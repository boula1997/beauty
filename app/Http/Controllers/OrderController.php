<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderMail;
use App\Mail\OrderUserMail;
use App\Models\Order;
use App\Models\ProductVariation;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Process;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\ProductOffer;
use App\Models\Counter;
use App\Models\Orderproduct;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Routing\Annotation\Route;
use App\Traits\HandlesOrders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;



class OrderController extends Controller
{
    use HandlesOrders;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $order;
    private $orderproduct;


    public function __construct(Order $order, Orderproduct $orderproduct)
    {
        $this->order = $order;
        $this->orderproduct = $orderproduct;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            return view('front.order');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function orderTracking()
    {
        try {
            return view('front.orderTracking');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        try {
            if(!isset($request->address_id))
            return redirect()->back()->with(['error' =>__('general.noAddressSelected')]);

            if(!isset($request->paymentMethod))
            return redirect()->back()->with(['error' =>__('general.noPaymentMethodSelected')]);

            cart()->clearItems();
            loadUserCart(auth()->user()->id);

            $data = $request->except('color', 'size','paymentMethod','flexRadioDefault');
            $data['total'] = cart()->getTotal()+8;
            $data['address_id'] = $request->address_id;
            if($request->paymentMethod=="adc wallet"){
                $data['payment_method'] ="wallet";
                $data['payment_name'] ="wallet";
            }
            else if($request->paymentMethod=="pay with cards"){
                $data['payment_method'] ="digital_payment";
                $data['payment_name'] ="cards";
            }
            else if($request->paymentMethod=="stc pay"){
                $data['payment_method'] ="digital_payment";
                $data['payment_name'] ="stc_pay";
            }
            $user = auth('web')->user();
            $data['user_id'] = $user->id;
            // Validating finished offers and out-of-stock items
            $outOfStock = [];
            $outOfOffer = [];
            foreach (cart()->getItems() as $item) {
                $product = Product::find($item->getId());
                $variation = ProductVariation::where('color_id', $item->get('options')["color"])
                ->where('size_id', $item->get('options')["size"])
                ->where('product_id', $product->id)
                ->first();
                // Check if item is out of stock
                if ($item->get('quantity') > $variation->quantity) {
                    $outOfStock[] = $variation->id;
                }

                $offer=ProductOffer::find($item->get('options')["offer_id"]);
                // Check if the offer has already ended
                if (!validOffer($offer)) {
                    $outOfOffer[]=$variation->id;
                }
            }

            if(count($outOfStock) > 0){
                 return redirect()->back()->with(['error' =>__('general.this_quantity_is_not_available')]);
            }


            if($request->paymentMethod=="adc wallet"){
                // Check if user has enough balance
                if ($user->balance < cart()->getTotal()) {


                  return redirect()->back()->with(['error' =>__('general.noEnoughBalance')]);

                }

                $data['pending_at'] = Carbon::now();
                $data['paid_at'] = Carbon::now();
                $data['payment_status'] = 'paid';

                // Create order
                $order = $this->createOrderWithProducts($data);

                // Deduct balance
                $user->update(['balance' => $user->balance - $order->total]);

                //todo:: send notification

                cart()->clearItems();
                updateUserCart();
                return redirect()->route('showOneOrder',$order->id)
                ->with('success', trans('general.created_successfully'));
            }else{
                return redirect()->route('order.checkout', ['payment_name' => $data['payment_name'], 'user_id' => $user->id, 'lang' => app()->getLocale(), 'platform' => 'website', 'address_id' => $request->address_id]);
            }

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function showOrders(){

        return view('front.order_index');
    }

    public function showOneOrder($id)
    {
        $order = Order::find($id);
        // $orderproducts=Orderproduct::find($id)->all();
        // dd($order);
        return view('front.single_order',compact('order'));
    }


    // public function cancel(Request $request)
    // {
    //     $order = Order::findOrFail($request->order_id);
    //     if ($order->status === 'pending' && $order->payment_name=="wallet") {
    //         $reason=isset($request->other_reason)?$request->other_reason:$request->order_option;
    //         $order->update(['status' => 'canceled','cancelReason'=>$reason]);
    //         return redirect()->back()->with('success', __('general.OrderCanceled'));
    //     }

    //     return redirect()->back()->with('error', __('general.CannotCancelOrder'));
    // }


    public function cancel(Request $request)
    {
        DB::beginTransaction();
        try {

            $order =auth()->user()->orders()->where('id', $request->order_id)->first();

            if (!$order) {
                return redirect()->back()->with('error','Order not found.');
            }

            if ($order->status === 'cancelled') {
                return redirect()->back()->with('error','This order is already cancelled.');
            }

            if ($order->status !== 'pending') {
                return redirect()->back()->with('error',__('general.order_cannot_be_cancelled')); 
            }
            
            if ($order->payment_status !== 'paid') {
                return redirect()->back()->with('error',__('general.order_cannot_be_cancelled_due_to_payment'));
            }            
            

            $validator = Validator::make($request->all(), [
                'order_option' => 'required|string',
                'other_reason' => 'required_if:order_option,other|string|nullable|max:255',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }


            $updated =$order->update([
                'status' => 'cancelled',
                'cancelReason' => $request->cancelReason,
            ]);
            
            if($updated)
            {
                // refund
                $hyperpayController = app()->make(HyperpayController::class);
                
                if($hyperpayController->refund($order)==='false')
                {
                    $amount=$order->total;
                    
                    $order->user->increment('balance', $amount);
                    
                    $paymentId = Str::uuid();
                    // transaction
                    $transaction=Transaction::create([
                        'order_id'=>$order->id, 
                        'user_id'=>$order->user->id, 
                        'amount'=>$order->total,
                        'transaction_id'=> $paymentId,
                        'transaction_date'=>Carbon::now(),
                        'payment_type' => 'credit',
                        'payment_name' => 'wallet',
                        'payment_gateway' => 'wallet',
                    ]);
                }
            
            }
            
            
            DB::commit();
            
            return redirect()->back()->with('success', __('general.order_cancelled_due_to_payment'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
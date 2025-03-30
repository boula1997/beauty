<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HyperpayController;
use App\Http\Requests\API\OrderRequest;
use App\Http\Resources\OrderDetailsResource;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\Orderproduct;
use App\Models\ProductVariation;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\HandlesOrders;
use App\Traits\FCMNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class OrderController extends Controller
{
    use HandlesOrders;
    use FCMNotification;

    private $order;
    private $orderproduct;


    public function __construct(Order $order, Orderproduct $orderproduct)
    {
        $this->middleware('auth:api', ['except' => ['index','reasons','orderStatus']]);
        $this->order = $order;
        $this->orderproduct = $orderproduct;
    }


    public function store(OrderRequest $request)
    {
        DB::beginTransaction();
        try {
            cart()->clearItems();
            loadUserCart(auth()->user()->id);

            $data = $request->except('color', 'size','paymentMethod','flexRadioDefault');
            $data['total'] = cart()->getTotal();
            $data['address_id'] = $request->address_id;
            if($request->paymentMethod=="wallet"){
                $data['payment_method'] ="wallet";
                $data['payment_name'] ="wallet";
            }
            else if($request->paymentMethod=="cards"){
                $data['payment_method'] ="digital_payment";
                $data['payment_name'] ="cards";
            }
            else if($request->paymentMethod=="stc_pay"){
                $data['payment_method'] ="digital_payment";
                $data['payment_name'] ="stc_pay";
            }

            $user = auth('api')->user();
            $data['user_id'] = $user->id;
            // Validating finished offers and out-of-stock items
            foreach (cart()->getItems() as $item) {
                $product = Product::find($item->getId());
             
                // Check if item is out of stock
                if ($item->get('quantity') > $product->quantity) {
                    //  return failedResponse (__('general.out_of_stock_items'));
                }

                // Check if the offer has already ended
                if (isset($product->productOffer)&&$product->productOffer->endDate < now()) {

                    // return failedResponse (__('general.finished_offer_items'));

                }
            }

            if($request->paymentMethod=="wallet")
            {
                // Check if user has enough balance
                if ($user->balance < cart()->getTotal()) {


                 return failedResponse(__('general.noEnoughBalance'));

                }

                $data['pending_at'] = Carbon::now();
                $data['paid_at'] = Carbon::now();
                $data['payment_status'] = 'paid';
                // Create order
                $order = $this->createOrderWithProducts($data);

                // Deduct balance
                $user->update(['balance' => $user->balance - $order->total]);
                                
                //todo:: send notification
                if( $order && isset($order->id) )
                {
                    
                    $notification = [
                        'title' => __('general.order_push_title', [], $user->app_lang),
                        'title_ar' => __('general.order_push_title', [], 'ar'),
                        'title_en' => __('general.order_push_title', [], 'en'),
                        'title_fr' => __('general.order_push_title', [], 'fr'),
                        'body' => __('general.new_order_push_body', [], $user->app_lang),
                        'body_ar' => __('general.new_order_push_body', [], 'ar'),
                        'body_en' => __('general.new_order_push_body', [], 'en'),
                        'body_fr' => __('general.new_order_push_body', [], 'fr'),
                        'order_id' => $order->id,
                        'type' => 'wallet',
                    ];
                    $this->sendFCMNotification($notification, $user->fcm_token);
                    
                }
                cart()->clearItems();
                updateUserCart();
                
                DB::commit();
               
                return response()->json(['success' => __('general.sent_successfully'), 'order'=>new OrderResource($order)]);
            }
            else{

                return successResponse();
            }

        } catch (\Exception $e) {
            return failedResponse( __($e->getMessage()));
        }
    }


    public function reasons()
    {
        try {

            $reasons = [
                __('general.want_to_change_order'),
                __('general.want_to_enter'),
                __('general.dont_want_to_continue'),
                __('general.find_cheaper'),
                __('general.dont_want_to_buy'),
                __('general.others'),
            ];

            return successResponse($reasons);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function orderStatus()
    {
        try {

            $status = [
                'pending',
                'in_processing',
                'cancelled',
                'shipped',
                'out_for_delivery',
                'delivered',
                'refunded',
                'returned',
            ];

            return successResponse($status);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function getOrders(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }

            $perPage = $request->input('per_page', 10);

            $orders=Auth::user()->orders()->orderBy('created_at', 'desc')->paginate($perPage);

            $data = OrderResource::collection($orders);

            $pagination = [
                'current_page' => $orders->currentPage(),
                'per_page' => $orders->perPage(),
                'last_page' => $data->lastPage(),
                'total_items' => $orders->total(),
            ];

            return response()->json(['pagination' => $pagination, 'data' => $data], 200);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {

            $data = new OrderDetailsResource(Auth::user()->orders()->findOrfail($id));

            return successResponse($data);

        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }


    public function ordersByStatus(Request $request)
    {
        try {


            $validator = Validator::make($request->all(), [
                'per_page' => 'integer|min:1|max:100',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errors['message'] = 'Validation Error';
                return response()->json(['errors' => $errors], 420);
            }

            $perPage = $request->input('per_page', 10);

            $orders=Auth::user()->orders()->where('status',$request->status)->orderBy('created_at', 'desc')->paginate($perPage);

            $data = OrderResource::collection($orders);

            $pagination = [
                'current_page' => $orders->currentPage(),
                'per_page' => $orders->perPage(),
                'last_page' => $data->lastPage(),
                'total_items' => $orders->total(),
            ];

            return response()->json(['pagination' => $pagination, 'data' => $data], 200);

        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function cancelOrder(Request $request, $id)
    {
        DB::beginTransaction();
        try {

            $order = Auth::user()->orders()->where('id', $id)->first();

            if (!$order) {
                return failedResponse('Order not found.');
            }

            if ($order->status === 'cancelled') {
                return failedResponse('This order is already cancelled.');
            }

            if ($order->status !== 'pending') {
                return failedResponse(__('general.order_cannot_be_cancelled')); 
            }
            
            if ($order->payment_status !== 'paid') {
                return failedResponse(__('general.order_cannot_be_cancelled_due_to_payment'));
            }            
            

            $request->validate([
                'cancelReason' => 'required|string|max:255',
            ]);

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
            
                // notification 
                $order_id= ($order->payment_method ==='wallet') ? 0 : $order->id;
                $type= ($order->payment_method ==='wallet')? 'wallet':'order_status';

                $notification = [
                    'title' => __('general.order_cancelled_title', [], $order->user->app_lang),
                    'title_ar' => __('general.order_cancelled_title', [], 'ar'),
                    'title_en' => __('general.order_cancelled_title', [], 'en'),
                    'title_fr' => __('general.order_cancelled_title', [], 'fr'),
                    'body' => __('general.order_cancelled_body', [], $order->user->app_lang),
                    'body_ar' => __('general.order_cancelled_body', [], 'ar'),
                    'body_en' => __('general.order_cancelled_body', [], 'en'),
                    'body_fr' => __('general.order_cancelled_body', [], 'fr'),
                    'order_id' => $order->id,
                    'order_id' => $order_id,
                    'type' => $type,
                ];
                $this->sendFCMNotification($notification, $order->user->fcm_token); 
            }
            
            
            DB::commit();
            
            return successResponse('Order cancelled successfully.', $order);

        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }
}
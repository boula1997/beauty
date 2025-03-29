<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HyperpayController;
use App\Http\Requests\API\OrderRequest as APIOrderRequest;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\OrderRequest as RequestsOrderRequest;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\Orderproduct;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Traits\FCMNotification;
use Carbon\Carbon;
use Illuminate\Support\Str;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use FCMNotification;
    private $order;
    
    function __construct(Order $order)
    {
        $this->middleware('permission:order-list|order-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
        $this->middleware('permission:order-reply', ['only' => ['reply']]);
        $this->order = $order;
    }


    public function index()
    {
        try {
            $data = $this->order->latest()->paginate(10);
            return view('admin.crud.orders.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('admin.crud.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        // $products=Product::get();
        return view('admin.crud.orders.edit', compact('order'));
    }

    public function update(OrderRequest $request, Order $order)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $order->update($data);
            return redirect()->route('orders.index', compact('order'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        try {
            $order->delete();
            return redirect()->route('orders.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function reply($id)
    {
        try {
            $order=$this->order->find($id);
            return view('admin.crud.orders.reply',compact('order'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function emailReply($id,OrderRequest $request)
    {
        try {
            $data = $request->all();
            $order=$this->order->find($id);
            // Mail::to($order->email)->send(new OrderAdminMail($data));
            return redirect()->route('orders.index')
                ->with('success', trans('general.replied_successfully'));
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            $order = Order::findOrFail($id);
    
            $allowedStatuses = ['pending', 'in_processing', 'cancelled', 'shipped', 'out_for_delivery', 'delivered', 'failed', 'refunded'];

    
            $newStatus = $request->input('status');
    
            if (!in_array($newStatus, $allowedStatuses)) {
                return response()->json(['message' => __('Invalid status')], 400);
            }
    
         
            $currentIndex = array_search($order->status, $allowedStatuses);
            $newIndex = array_search($newStatus, $allowedStatuses);
    
            if ($newIndex <= $currentIndex) {
                return response()->json(['message' => __('Cannot revert to a previous status')], 400);
            }
    
            $updateData = [
                'status' => $newStatus,
                "{$newStatus}_at" => now() 
            ];

           $updated= $order->update($updateData);
            
           if( $updated)
           { 
                if($newStatus === 'cancelled')
                {
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
                

                $type= ($order->payment_method ==='wallet')? 'wallet':'order_status';
                $notification = [
                    'title' => __('general.update_order_push_title', [], $order->user->app_lang),
                    'title_ar' => __('general.update_order_push_title', [], 'ar'),
                    'title_en' => __('general.update_order_push_title', [], 'en'),
                    'title_fr' => __('general.update_order_push_title', [], 'fr'),
                    'body' => __('general.update_order_push_body', [], $order->user->app_lang),
                    'body_ar' => __('general.update_order_push_body', [], 'ar'),
                    'body_en' => __('general.update_order_push_body', [], 'en'),
                    'body_fr' => __('general.update_order_push_body', [], 'fr'),
                    'order_id' => $order->id,
                    'type' =>  $type,
                ];
                $this->sendFCMNotification($notification, $order->user->fcm_token);
           }
    
            return response()->json(['message' => __('Order status updated successfully')]);
    
        } catch (Exception $e) {
            return response()->json(['message' => __('general.something_wrong')], 500);
        }
    }
       

}
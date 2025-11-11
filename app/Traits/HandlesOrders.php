<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Exception;
use App\Services\MailService;


trait HandlesOrders
{
    public function createOrderWithProducts($data)
    {
        DB::beginTransaction();
        try {
            $order = $this->order->create($data);

            foreach (cart()->getItems() as $item) {
                $productId = strtok($item->getId(), '-'); 
                $product = Product::find($productId);

                $variation = ProductVariation::where('color_id', $item->get('options')["color"])
                ->where('size_id', $item->get('options')["size"])
                ->where('product_id', strtok($item->getId(), '-'))
                ->first();

                $quantity = $item->get('quantity');
                $total = 0;
                
                if ($product->discount > 0) {
                    // السعر بعد الخصم بيجيلك أوتوماتيك من accessor
                    $total = $item->get('quantity') * $product->price;
                } elseif ($product->byOneGetOne && $product->discount <= 0) {
                    // ✅ Buy One Get One Free
                    $freeItems = $quantity;
                    $totalQuantity = $quantity + $freeItems;

                    $total = $quantity * $product->price;

                    $quantity = $totalQuantity;
                }else {
                    $total = $item->get('quantity') * $product->price;
                }
                
                $orderproduct = $this->orderproduct->create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'productvariation_id' => $variation->id,
                    'count' => $quantity,
                    'total' => $item->get('quantity') * $product->price ,
                ]);


                $product = $orderproduct->product;
                $variation->update(['quantity'=> $variation->quantity - $item->get('quantity')]);
            }

             // transactions
            if ( ($data['payment_method'] == "wallet") || ($data['payment_method'] == "instapay") ) {
                $paymentId = Str::uuid();
                
                $order->update(['transaction_reference'=>$paymentId]);
            } 
            else 
            {
                $paymentId = $data['transaction_reference']; 
            }
            
            $to = $order->user->email;
            $toName = $order->user->fullname;
            $subject=__('general.order_confirmation_subject', ['id' => $order->id]);
            $body = view('mail.order_user_mail', compact('order'))->render();
             
            // Call the MailService to send the email
            $result = MailService::sendMail($to, $toName, $subject, $body);
            
            // $transaction=Transaction::create([
            //     'order_id'=>$order->id, 
            //     'user_id'=>$order->user->id, 
            //     'amount'=>$order->total,
            //     'transaction_id'=>$paymentId,
            //     'transaction_date'=>Carbon::now(),
            //     'payment_type' => 'debit',
            //     'payment_name' => $data['payment_name'],
            //     'payment_gateway' => $data['payment_method'],
            // ]);            
            DB::commit();
            return $order;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e; // Re-throw the exception to handle it in the calling function
        }
    }
}
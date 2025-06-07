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
                $orderproduct = $this->orderproduct->create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'count' => $item->get('quantity'),
                    'total' => $item->get('quantity') * $product->price ,
                ]);


                $product = $orderproduct->product;
                // $product->update(['stock'=> $product->stock - $item->get('quantity')]);
            }

             // transactions
            if (  $data['payment_method'] == "wallet") {
                $paymentId = Str::uuid();
                
                $order->update(['transaction_reference'=>$paymentId]);
            } 
            else 
            {
                $paymentId = $data['transaction_reference']; 
            }
dd($order->user->email);
            $to = $order->user->email;
            $toName = $order->user->fullname;
            $subject="Your Verification Code";
            $body = view('mail.order_user_mail', compact('order'))->render();
             
            // Call the MailService to send the email
            $result = MailService::sendMail($to, $toName, $subject, $body);
            
            $transaction=Transaction::create([
                'order_id'=>$order->id, 
                'user_id'=>$order->user->id, 
                'amount'=>$order->total,
                'transaction_id'=>$paymentId,
                'transaction_date'=>Carbon::now(),
                'payment_type' => 'debit',
                'payment_name' => $data['payment_name'],
                'payment_gateway' => $data['payment_method'],
            ]);            
            DB::commit();
            return $order;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e; // Re-throw the exception to handle it in the calling function
        }
    }
}
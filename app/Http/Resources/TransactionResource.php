<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "order_id" => $this->order_id,
            "store_image" => $this->order?->orderproducts?->first()?->product?->store?->image ?? asset('default.jpg'),
            "store_name" => $this->order?->orderproducts?->first()?->product?->store?->title ?? 'Unknown Store',
            "transaction_date" => $this->transaction_date,
            "payment_type" => $this->payment_type,
            "amount" => $this->amount,
            "payment_name" => $this->payment_name,
        ];
    }
}
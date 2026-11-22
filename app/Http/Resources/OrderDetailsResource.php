<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {  
        return [
            "id" => $this->id,
            "total" => $this->total,
            "status"=>$this->status,
            "created_at"=>$this->created_at,

            "orderproducts"=>OrderProductResource::collection($this->orderproducts),
            "address" => $this->address,
            "name" => $this->name,
            "phone" => $this->phone,
            "payment_method" => $this->payment_method,
            "payment_status" => $this->payment_status,
            "cancelReason" => $this->cancelReason,
            "paymentDetails"=>orderCheckoutData($this),
          
        ];
    }
}
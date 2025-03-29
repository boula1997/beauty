<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductOfferResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "startDate" => $this->startDate,
            "endDate" => $this->endDate,
            "percentage" => $this->percentage,
            'old_price' => $this->static_price,
            'new_price' =>$this->static_price - (( $this->percentage / 100) * $this->static_price),
        ];
    }
}
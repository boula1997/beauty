<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChildVariationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $price = $this->price; // Store the price to pass it to ProductOfferResource


        return [
            "id" => $this->id,
            "size" => $this->size->title,
            "size_id" => $this->size_id,
            "quantity" => $this->quantity,
            "old_price" => (double)$price,
            "new_price" => (double)$this->offer_price,
        ];
    }
}
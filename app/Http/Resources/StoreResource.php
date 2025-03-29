<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
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
            "logo" => $this->image,
            "title" => $this->title,
            "description" => strip_tags($this->description),
            "email" => $this->email,
            "phone" => $this->phone,
            "banner" => $this->banner,
            "deliveryCharge" => $this->deliveryCharge,
            "categories" => CategoryResource::collection($this->categories),
            
        ];
    }
}
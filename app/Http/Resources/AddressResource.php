<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            "title" => $this->title,
            "fullName" => $this->fullName,
            "phone" => $this->phone,
            "fullAddress" => $this->fullAddress,
            "current" => $this->current,
            "city" => $this->city,
            "country" => $this->country,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
      

        ];
    }
}
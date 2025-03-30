<?php

namespace App\Http\Resources\home;

use App\Http\Resources\ProductVariationResource;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        $user = Auth::user();
        return [
            "id" => $this->id,
            "image" => $this->image,
            "title" => $this->title,
            "weight" => $this->weight,
            "SKU" => $this->SKU,
            "backgroundColor" => $this->backgroundColor,
            "rate" => $this->rate,
            "price" => $this->price,
            "quantity" => $this->quantity,
            "startDate" => isset($this->productOffer->startDate)?$this->productOffer->startDate:0,
            "endDate" => isset($this->productOffer->endDate)?$this->productOffer->endDate:0,
            "percentage" => isset($this->productOffer->percentage)?$this->productOffer->percentage:0,
            'isFavourite' => $user ? $this->isFavoritedByUser($user->id) : false

        ];
    }
}
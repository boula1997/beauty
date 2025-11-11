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
            "description" => $this->description,
            "rate" => $this->rate,
            "price" => $this->price,
            "byOneGetOne" => $this->byOneGetOne,
            "discount" => $this->discount,
            
            "applyOffer" => $this->discount > 0 ? $this->discount .'% off'
                : ($this->byOneGetOne
                ? 'Buy 1 Get 1'
                : null),
            // 'isFavourite' => $user ? $this->isFavoritedByUser($user->id) : false

        ];
    }
}
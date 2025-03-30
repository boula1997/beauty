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
            "SKU" => $this->SKU,
            "rate" => $this->rate,
            "price" => $this->price,
            "quantity" => $this->quantity,
            'isFavourite' => $user ? $this->isFavoritedByUser($user->id) : false

        ];
    }
}
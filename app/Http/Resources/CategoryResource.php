<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "type" => $this->type,
            "image" => $this->image,
            "products" =>  $this->products->map(function ($product) {
                return [
                    'id'    => $product->id,
                    "image" => $product->image,
                    "images" => $product->images,
                    "title" => $product->title,
                    "description" => strip_tags($product->description),
                    "price" => $product->price,
                    "byOneGetOne" => $product->byOneGetOne,
                    "discount" => $product->discount,
                    
                    "applyOffer" => $product->discount > 0 ? $product->discount .' % off'
                        : ($product->byOneGetOne
                        ? 'byOneGetOne'
                        : null),
                ];
            }),
        ];
    }
}
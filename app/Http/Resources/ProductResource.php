<?php

namespace App\Http\Resources;

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
        $user = $request->bearerToken() ? Auth::guard('api')->user() : null;
        return [
            "id" => $this->id,
            "image" => $this->image,
            "images" => $this->images,
            "title" => $this->title,
            "description" => strip_tags($this->description),
            "SKU" => $this->SKU,
            "is_addition" => $this->is_addition,
            "rate" => $this->rate,
            "price" => $this->price,
            "quantity" => $this->quantity,
            "category" => new CategoryResource($this->category),
            "subcategory" => new SubcategoryResource($this->subcategory),
            'isFavourite' => $user ? $this->isFavoritedByUser($user->id) : false,
            "relatedProducts" => $this->category
            ? $this->category->products()
                ->where('id', '!=', $this->id)
                ->latest()
                ->take(4)
                ->get()
                ->map(function ($related) {
                    return [
                        "id" => $related->id,
                        "image" => $related->image,
                        "images" => $related->images,
                        "title" => $related->title,
                        "description" => strip_tags($related->description),
                        "SKU" => $related->SKU,
                        "is_addition" => $related->is_addition,
                        "rate" => $related->rate,
                        "price" => $related->price,
                        "quantity" => $related->quantity,
                        "category" => new CategoryResource($related->category),
                        "subcategory" => new SubcategoryResource($related->subcategory),
                    ];
                })
            : [],
        ];
    }
}
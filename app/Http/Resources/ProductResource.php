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
            "relatedProducts" => ProductResource::collection(
                $this->category
                    ? $this->category->products()
                        ->where('id', '!=', $this->id)
                        ->latest()
                        ->take(4)
                        ->get()
                    : collect([])
            ),
        ];
    }
}
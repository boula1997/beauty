<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

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

        // Check if current route is product.show
       $isSingleProductRoute = $request->route('id') !== null;

        return [
            "id" => $this->id,
            "image" => $this->image,
            "images" => $this->images,
            "title" => $this->title,
            "description" => strip_tags($this->description),
            "byOneGetOne" => $this->byOneGetOne,
            "discount" => $this->discount,

            "applyOffer" => $this->discount > 0
                ? $this->discount . ' LE off'
                : ($this->byOneGetOne ? 'Buy 1 Get 1' : null),

            "price" => $this->price,

            "colors" => $this->getColors(),

            "category" => $this->category,

            "isFavourite" => $user
                ? $this->isFavoritedByUser($user->id)
                : false,

            // ✅ Related products (only for single product route)
            "related_products" => $isSingleProductRoute
                ? ProductResource::collection(
                    Product::where('category_id', $this->category_id)
                        ->where('id', '!=', $this->id)
                        ->latest()
                        ->take(10)
                        ->get()
                )
                : null,
        ];
    }
}
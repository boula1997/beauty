<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductResource extends JsonResource
{
    protected $includeRelated;

    public function __construct($resource, $includeRelated = true)
    {
        parent::__construct($resource);
        $this->includeRelated = $includeRelated;
    }

    public function toArray($request)
    {
        $user = $request->bearerToken() ? Auth::guard('api')->user() : null;

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
            "isFavourite" => $user ? $this->isFavoritedByUser($user->id) : false,

            "related_products" => $this->includeRelated
                ? ProductResource::collection(
                    Product::where('id', '!=', $this->id)
                        ->inRandomOrder()
                        ->take(10)
                        ->get()
                )
                : null,
        ];
    }
}
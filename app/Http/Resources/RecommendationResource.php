<?php

namespace App\Http\Resources;

use App\Models\ProductVariation;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecommendationResource extends JsonResource
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
            "image" => $this->image,
            "title" => $this->title,
            "rate" => $this->rate,
            "backgroundColor" => $this->backgroundColor,

            "productVariations" =>ProductVariationResource::collection($this->productVariations),      
        ];
    }
}
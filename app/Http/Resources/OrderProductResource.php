<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {  
        return [
            "id" => $this->id,
            "image" => $this->product?->image ?? asset('default.jpg'),
            "title" => $this->product?->title,
            "count" => $this->count,
            "total" => $this->total,
            "variation" => $this->variation ? new ProductVariationResource($this->variation) : null,
        ];
    }
}
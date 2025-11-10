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
        dd($request->all());
        return [
            "id" => $this->id,
            "image" => $this->product->image,
            "title" => $this->product->title,
            "count" => $this->count,
            "total" => $this->total,
            "variation" => new ProductVariationResource($this->variation),
        ];
    }
}
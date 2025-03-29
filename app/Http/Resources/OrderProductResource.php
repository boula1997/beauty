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
            "image" => $this->product->image,
            "title" => $this->product->title,
            "count" => $this->count,
            "total" => $this->total,
            "variations" => [
                "size" => isset($this->variation->size)?$this->variation->size->title:'',
                "color" => isset($this->variation->color)?$this->variation->color->title:'',
            ],     

        ];
    }
}
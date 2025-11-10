<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ChildVariationResource;
use App\Models\ProductVariation;

class ProductVariationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // $variations=ProductVariation::where('product_id',$this->product_id)->where('color_id',$this->color_id)->get();

        return [
            // "image" => $this->image,
            "color" => getColorTitle($this->color_id),
            "color_id" => $this->color_id,

            "size" => getSizeTitle($this->size_id),
            "size_id" => $this->size_id,
            // 'variations'=>ChildVariationResource::collection($variations),
        ];
    }
}
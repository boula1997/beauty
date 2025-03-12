<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
                    'plan'=>asset('storage/' . $this->plan),
                    'image'=>$this->image,
                    'images'=>$this->images,
                    'title'=>$this->title,
                    'subtitle'=>$this->subtitle,
                    'description'=>$this->description,
                    'space'=>$this->space,
                    'floors'=>$this->floors,
                    'location'=>$this->location,
                    'landescapPer'=>$this->landescapPer,
                    'villaLandArea'=>$this->villaLandArea,
                    'villaTotalBuild'=>$this->villaTotalBuild,
                    'style'=>$this->style,
                    'category'=>$this->category,
                ];
    }
}
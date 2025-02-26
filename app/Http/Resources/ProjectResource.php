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
                    'image'=>$this->image,
                    'images'=>$this->images,
                    'title'=>$this->title,
                    'subtitle'=>$this->subtitle,
                    'description'=>$this->description,
                    'category'=>$this->category,
                ];
    }
}
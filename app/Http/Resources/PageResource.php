<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
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
            "image" => $this->images,
            "title" => $this->title,
            "subtitle" => $this->subtitle,
            "identifier" => $this->identifier,
            "description" => strip_tags($this->description),
            'youtube_link'=>$this->youtube_link,
        ];
    }
}
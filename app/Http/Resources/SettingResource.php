<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            "logo" => $this->logo,
            "white_logo" => $this->white_logo,
            "map" => $this->map,
            "address" => $this->address,
            "phones" => contacts('phone'),
            "socials" => contacts('social'),
            "emails" => contacts('email'),
            "tab" => $this->tab,
            "appointment" => $this->appointment,
            "copyright" => $this->copyright,
            "description" => strip_tags($this->description),
            "meta_data" => $this->meta_data,
            "title" => $this->title,
            "taxes" => $this->taxes,
            "shipping"=>$this->shipping,
            "policy" => $this->policy,
            "breadcrumb" => asset($this->breadcrumb),
            "adminName" => auth("admin_api")->user()->name,
            "adminType" => auth("admin_api")->user()->type,
        ];
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' =>$this->id,
            'image' =>'/upload/offer/'.$this->image,
            'name_ar' =>$this->name_ar,
            'name_en' =>$this->name_en,
            'main_price' =>$this->main_price,
            'discount' =>$this->discount,
            'end_price' =>$this->end_price,
            'description_ar' =>$this->description_ar,
            'description_en' =>$this->description_en,
        ];
    }
}

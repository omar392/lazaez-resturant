<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartOfferResource extends JsonResource
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
            'id'=>$this->id,
            'quantity'=>$this->quantity,
            'price'=>$this->price,
            'total_price_before'=>$this->total_price_before,
            'total_price_after'=>$this->total_price_after,
            'image'=>'/upload/offer/'.$this->offers->image,
            'name_ar'=>$this->offers->name_ar,
            'name_en'=>$this->offers->name_en,
            'description_ar'=>$this->offers->description_ar,
            'description_en'=>$this->offers->description_en,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            'image'=>'/upload/product/'.$this->products->image,
            'name_ar'=>$this->products->name_ar,
            'name_en'=>$this->products->name_en,
            'description_ar'=>$this->products->description_ar,
            'description_en'=>$this->products->description_en,
        ];
    }
}

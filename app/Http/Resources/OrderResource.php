<?php

namespace App\Http\Resources;

use App\Models\Cart;
use App\Models\Setting;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $total_price_after = Cart::where(['user_id' => $this->user_id])->sum('total_price_after');
        $setting = Setting::findOrFail(1);
        $tax = $setting->tax;
        $service = $setting->service;
        $after_service =  $total_price_after + $service;
        $final = ($after_service + (($after_service*$tax)/100));
        return [ 
            'id'=>$this->id,
            'name'=>$this->name,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'payment'=>$this->payment,
            'date'=>$this->created_at->format('d-m-Y'),
            'time'=>$this->created_at->format('H:i'),
            'total' =>$final,
            'products'=> ProductResource::collection($this->products),
            'offers'=> OfferResource::collection($this->offers),
        ];
    }
}

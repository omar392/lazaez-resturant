<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'offer_id',
        'price',
        'offer_price',
        'quantity',
        'total_price_before',
        'total_price_after',
        'wrapping_id',
        'cooking_id',
        'spice_id',
        'cutting_id',
];
    
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function spice(){
        return $this->belongsTo('App\Models\Spice');
    }

    public function cooking(){
        return $this->belongsTo('App\Models\Cooking');
    }

    public function cutting(){
        return $this->belongsTo('App\Models\Cutting');
    }
    
    public function wrapping(){
        return $this->belongsTo('App\Models\Wrapping');
    }
    public function orders(){
        return $this->hasOne(Order::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function offers()
    {
        return $this->belongsTo(Offer::class,'offer_id');
    }
}

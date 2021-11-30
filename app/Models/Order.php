<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        // 'cart_id',
        'city_id',
        'country_id',
        'name',
        'phone',
        'secondphone',
        'address',
        'address_details',
        'payment',
        'note',
        'status',
    ];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    // public function carts(){
    //     return $this->belongsTo(Cart::class,'cart_id');
    // }
    public function products()
    {
        return $this->belongsToMany(Product::class,'order_products','order_id','product_id');
    }

    public function offers()
    {
        return $this->belongsToMany(Product::class,'order_products','order_id','offer_id');
    }

    public function cities(){
        return $this->belongsTo(City::class,'city_id');
    }
    public function countries(){
        return $this->belongsTo(Country::class,'country_id');
    }
}

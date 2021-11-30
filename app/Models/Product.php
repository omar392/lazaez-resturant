<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'image',
        'price',
        'offer_price',
        'discount',
        'status',
        'cat_id',
        'child_cat_id',
        // 'cutting_id',
        // 'wrapping_id',
        // 'cooking_id',
        // 'spice_id',
    ];

    public function getNameAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->name_ar;
        }
        return $this->name_en;
    }
    public function getDescriptionAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->description_ar;
        }
        return $this->description_en;
    }

    // public function spice(){
    //     return $this->belongsTo('App\Models\Spice');
    // }

    // public function cooking(){
    //     return $this->belongsTo('App\Models\Cooking');
    // }

    // public function cutting(){
    //     return $this->belongsTo('App\Models\Cutting');
    // }
    
    // public function wrapping(){
    //     return $this->belongsTo('App\Models\Wrapping');
    // }

    public function rel_prods(){
        return $this->hasMany('App\Models\Product','cat_id','cat_id')->where('status','active')->limit(10);
    }

    public function carts()
    {
        return $this->hasMany(Order::class);
    }
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_products','product_id','order_id');
    }
}

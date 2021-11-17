<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name_ar','name_en','summary_ar','summary_en','image','is_parent','parent_id','status'];

    public function getNameAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->name_ar;
        }
        return $this->name_en;
    }
    
    public static function shiftChild($cat_id){

        return Category::whereIn('id',$cat_id)->update(['is_parent'=>1]);
        
    }

    public static function getChildByParentID($id){
        // return Category::where('parent_id',$id)->get();
        return Category::where('parent_id',$id)->pluck('name_ar','id');
    }

    public function products(){
        return $this->hasMany('App\Models\Product','cat_id','id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_ar',
        'about_en',
        'polices_ar',
        'polices_en',
        'terms_ar',
        'terms_en',
    ];
    public function getAboutAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->about_ar;
        }
        return $this->about_en;
    }
    public function getPolicesAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->polices_ar;
        }
        return $this->polices_en;
    }
    public function getTermsAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->terms_ar;
        }
        return $this->terms_en;
    }
}

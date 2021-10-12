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
}

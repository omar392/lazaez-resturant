<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'phone',
        'whatsapp',
        'apple_url',
        'android_url',
        'twitter',
        'snapchat',
        'instagram',
        'address_ar',
        'address_en',
    ];
}

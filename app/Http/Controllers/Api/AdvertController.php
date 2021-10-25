<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdvertResource as AdvertResource;
use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function adverts(){

        $adverts = Advert::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'banners'=> AdvertResource::collection($adverts),
        ],200);

    }
}

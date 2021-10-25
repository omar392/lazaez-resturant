<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource as BannerResource;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function banners(){
        $banners = Banner::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'banners'=> BannerResource::collection($banners),
        ],200);
    }
}

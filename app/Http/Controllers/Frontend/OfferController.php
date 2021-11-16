<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Setting;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        return view('frontend.offers.index',$data);
    }
}

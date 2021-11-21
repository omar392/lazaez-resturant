<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Setting;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::where(['status'=>'active','is_parent'=>1])->limit(4)->orderBy('id','DESC')->get();
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['offers'] = Offer::where(['status'=>'active'])->get();
        return view('frontend.offers.index',$data);
    }
}

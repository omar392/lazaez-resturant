<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function faqs()
    {        
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['faqs'] = Faq::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['about']  = About::first();
        return view('frontend.single_pages.faqs',$data);
    }
    public function terms()
    {
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['about']  = About::first();   
        return view('frontend.single_pages.terms',$data);
    }
    public function privcy()
    {
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['about']  = About::first();
        return view('frontend.single_pages.privcy',$data);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function faqs()
    {
        return view('frontend.single_pages.faqs');
    }
    public function terms()
    {
        return view('frontend.single_pages.terms');
    }
    public function privcy()
    {
        return view('frontend.single_pages.privcy');
    }
}

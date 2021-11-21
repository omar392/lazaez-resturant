<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::where(['status'=>'active','is_parent'=>1])->limit(4)->orderBy('id','DESC')->get();
        $data['offers'] = Offer::where(['status'=>'active'])->get();
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        // Product::all()->orderBy('price','desc')->get();
        $data['products'] = Product::where(['status'=>'active'])->orderBy('price','DESC')->get();
        $data['all_products'] = Product::where(['status'=>'active'])->get();
        return view('frontend.home',$data);
    }

    public function singleProducts($id)
    {
        $data['categories'] = Category::where(['status'=>'active','is_parent'=>1])->limit(4)->orderBy('id','DESC')->get();
        $data['offers'] = Offer::where(['status'=>'active'])->get();
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
      
        $data['products'] = Product::where(['status'=>'active'])->orderBy('price','DESC')->get();
        $data['all_products'] = Product::where(['status'=>'active'])->get();
        // $service= Service::findOrFail($id);
        $data['category_products'] = Category::findOrFail($id);
        // dd($category_products->products);
        return view('frontend.products.index',$data);
    }
    public function singleProduct($id)
    {
        $data['categories'] = Category::where(['status'=>'active','is_parent'=>1])->limit(4)->orderBy('id','DESC')->get();
        $data['offers'] = Offer::where(['status'=>'active'])->get();
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['product']=Product::with('rel_prods')->where('id',$id)->first();
        $data['single_product'] = Product::findOrFail($id);
        $data['all_products'] = Product::where(['status'=>'active'])->get();
        return view('frontend.products.product_details',$data);
    }
}

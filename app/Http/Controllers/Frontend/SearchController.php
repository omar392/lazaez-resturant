<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $data['categories'] = Category::where(['status'=>'active','is_parent'=>1])->limit(4)->orderBy('id','DESC')->get();
        $data['offers'] = Offer::where(['status'=>'active'])->get();
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['all_products'] = Product::where(['status'=>'active'])->get();
        // $data['category_products'] = Category::findOrFail($id);
        $rules = [
            'keyword'   => 'nullable|string'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json([
                'status'=>'success',
                'message'=>'no data ',
            ],200);
        }
        $keyword = $request->keyword ;
        $search = Product::where(function($query) use ($keyword){
            $query->where('name_ar','LIKE','%'.$keyword.'%');
            $query->orWhere('name_en','LIKE','%'.$keyword.'%');
            $query->orWhere('description_ar','LIKE','%'.$keyword.'%');
            $query->orWhere('description_en','LIKE','%'.$keyword.'%');
        })->get();
        // dd($search);
        return view('frontend.single_pages.search',$data,compact('search'));
    }
}

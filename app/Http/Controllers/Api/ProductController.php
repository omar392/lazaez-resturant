<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferResource;
use App\Http\Resources\ProductResource as ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(Request $request){

        $data = $request->id;
        $products = Product::where(['status'=>'active','child_cat_id' => $data])->get();
        // dd($sub_categories);
        return response()->json([
            'status'=>'success',
            'products' =>ProductResource::collection($products),
        ],200);
    }
     public function singleProduct(Request $request)
    {
        $data = $request->id;
        $single_product = Product::where(['status'=>'active', 'id' => $data])->get();
        return response()->json([
            'status'=>'success',
            'offers'=> ProductResource::collection($single_product),
        ],200);
    }
}

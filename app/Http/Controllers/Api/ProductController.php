<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
}

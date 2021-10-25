<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource as ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
class SearchController extends Controller
{
    public function searchProduct(Request $request){

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
    return response()->json([
        'status'=>'success',
        'products'=>ProductResource::collection($search),
    ],200);
    
}
}

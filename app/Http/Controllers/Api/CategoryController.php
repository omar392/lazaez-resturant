<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource as CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function mainCategories(){

        $main_categories = Category::where(['status'=>'active','is_parent'=>1])->get();
        // dd($main_categories);
        return response()->json([
            'status'=>'success',
            'categories' =>CategoryResource::collection($main_categories),
        ],200);

    }

    public function subCategories(Request $request){

        $data = $request->id;
        $sub_categories = Category::where(['status'=>'active','is_parent'=>0,'parent_id' => $data])->get();
        // dd($sub_categories);
        return response()->json([
            'status'=>'success',
            'categories' =>CategoryResource::collection($sub_categories),
        ],200);

    }

}

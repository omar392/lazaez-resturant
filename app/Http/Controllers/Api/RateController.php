<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RateResource;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RateController extends Controller
{
    public function addRate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id'           => 'required',
            'product_id'        => 'required',
            'comment'        => 'required',
            'rate'        => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 200);
        }
        $status = Rate::create(array_merge(
            $validator->validated(),
        ));
        if ($status) {
            return response()->json([
                'status'=>'success',
                'message'=>'Rate Added Successfully',
            ],200);
        }
    }
    public function getAllRates(Request $request)
    {
        $data = $request->product_id;
        $product_rate = Rate::where(['product_id' => $data])->get();
        // dd($product_rate);
        return response()->json([
            'status'=>'success',
            'rates'=> RateResource::collection($product_rate),
        ],200);
    }
}

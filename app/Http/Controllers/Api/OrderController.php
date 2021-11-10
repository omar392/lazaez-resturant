<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function makeOrder(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id'           => 'required',
            'product_id'        => 'required',
            'spice_id'          => 'nullable',
            'cooking_id'        => 'nullable',
            'wrapping_id'       => 'nullable',
            'cutting_id'        => 'nullable',
            'price'             => 'required',
            'quantity'          => 'required',
            'action'            =>'required|in:wait,finished',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 200);
        }
        $status = Order::create(array_merge(
            $validator->validated(),
            ['total_price' => (($request->price) * ($request->quantity)),]
        ));
        if ($status) {
            return response()->json([
                'status'=>'success',
                'message'=>'Order Added Successfully',
            ],200);
        }
    }
}

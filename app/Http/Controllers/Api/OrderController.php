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
        $this->validate($request,[
            'user_id'           => 'required',
            'product_id'        => 'required',
            'spice_id'          => 'nullable',
            'cooking_id'        => 'nullable',
            'wrapping_id'       => 'nullable',
            'cutting_id'        => 'nullable',
            'price'             => 'required|numeric',
            'quantity'          => 'required|numeric',
            'action'            =>'required|in:wait,finished',
        ]);
        $data = $request->all();
        $data['total_price'] = (($request->price) * ($request->quantity));
        $status = Order::create($data);
        // dd($status);
        if ($status) {
            return response()->json([
                'status'=>'success',
                'message'=>'Order Added Successfully',
            ],200);
        }
    }
}

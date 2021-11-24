<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Http\Resources\OrderResource;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addToCart(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id'           => 'required',
            'product_id'        => 'required',
            'spice_id'          => 'nullable',
            'cooking_id'        => 'nullable',
            'wrapping_id'       => 'nullable',
            'cutting_id'        => 'nullable',
            'price'             => 'required',
            'offer_price'             => 'required',
            'quantity'          => 'required',
            // 'action'            =>'required|in:wait,finished',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 200);
        }
        $status = Cart::create(array_merge(
            $validator->validated(),
            [
                'total_price_before' => (($request->price) * ($request->quantity)),
                'total_price_after' => (($request->offer_price) * ($request->quantity)),
            ]
        ));
        if ($status) {
            return response()->json([
                'status'=>'success',
                'message'=>'Order Added Successfully',
            ],200);
        }
    }
    public function getUserCart(Request $request)
    {
        $data = $request->user_id;
        $user_orders = Cart::where(['user_id' => $data])->get();
        // dd($user_orders);
        $total_price_before = Cart::where(['user_id' => $data])->sum('total_price_before');
        $total_price_after = Cart::where(['user_id' => $data])->sum('total_price_after');
        $discount = $total_price_before - $total_price_after;
        $setting = Setting::findOrFail(1);
        $tax = $setting->tax;
        $service = $setting->service;
        $after_service =  $total_price_after + $service;
        // dd($after_service);
        $final = ($after_service + (($after_service*$tax)/100));
        return response()->json([
            'status'=>'success',
            'cart'=> CartResource::collection($user_orders),
            'total_price_before'=>$total_price_before,
            'total_price_after'=>$total_price_after,
            'discount'=>$discount,
            'tax'=>$tax,
            'service'=>$service,
            'final'=>$final,
        ],200);
    }
    public function deleteItem(Request $request)
    {
        $product = $request->product_id;
        $data = $request->user_id;
        $delete_item = Cart::where(['product_id'=>$product,'user_id'=>$data])->delete();
        // dd('dddd');
        if ($delete_item) {
            return response()->json([
                'status'=>'success',
                'message'=>'deleted successfully',
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'No data to dalete',
            ],200);
        }
    }
    public function deleteCart(Request $request)
    {
        $data = $request->user_id;
        $delete_cart = Cart::where(['user_id'=>$data])->delete();
        if ($delete_cart) {
            return response()->json([
                'status'=>'success',
                'message'=>'deleted successfully',
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'No data to dalete',
            ],200);
        }
    }
    public function addOrder(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'user_id'           => 'required',
            'note'              => 'required',
            'name'              => 'required',
            'phone'             => 'required',
            'secondphone'       => 'required',
            'address'           => 'required',
            'address_details'   => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 200);
        }
        $order = Order::create(array_merge(
            $validator->validated(),
        ));
        $products = Cart::where('user_id',$order->user_id)->get();
        // dd($products);
        foreach ($products as $key => $product) {
            $order_products = OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $product->product_id,
            ]);
        }
        // dd($order_products);
        if ($order_products) {
            return response()->json([
                'status'=>'success',
                'message'=>'Order Added Successfully',
            ],200);
        }
    }
    public function newOrder()
    {
        $user = auth()->user()->id;
        // dd($user);
        $new_order = User::findOrFail($user);
        // dd($orderrr->orders);
        // foreach ($new_order->orders as $key => $value) {
        //    dd($value->products);
        // }
        $total_price_after = Cart::where(['user_id' => $user])->sum('total_price_after');
        $setting = Setting::findOrFail(1);
        $tax = $setting->tax;
        $service = $setting->service;
        $after_service =  $total_price_after + $service;
        // dd($after_service);
        $final = ($after_service + (($after_service*$tax)/100));
        $product_user = Order::where(['status'=>'new','user_id'=>$user])->get();
        // dd($product_user);
        return response()->json([
            'status'=>'success',
            'orders'=> OrderResource::collection($product_user),
            'total' =>$final,
        ],200);
    }
    public function finishedOrder()
    {
        $user = auth()->user()->id;
        // dd($user);
        $new_order = User::findOrFail($user);
        
        $total_price_after = Cart::where(['user_id' => $user])->sum('total_price_after');
        $setting = Setting::findOrFail(1);
        $tax = $setting->tax;
        $service = $setting->service;
        $after_service =  $total_price_after + $service;
        // dd($after_service);
        $final = ($after_service + (($after_service*$tax)/100));
        // dd($orderrr->orders);
        // foreach ($new_order->orders as $key => $value) {
        //    dd($value->products);
        // }
        $product_user = Order::where(['status'=>'payed','user_id'=>$user])->get();
        // dd($product_user);
        return response()->json([
            'status'=>'success',
            'orders'=> OrderResource::collection($product_user),
            'total' =>$final,
        ],200);
    }

}

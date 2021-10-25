<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferResource as OfferResource;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offers(){
        $offers = Offer::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'banners'=> OfferResource::collection($offers),
        ],200);
    }
    
    public function singleOffer(Request $request){
        $data = $request->id;
        $single_offer = Offer::where(['status'=>'active', 'id' => $data])->get();
        return response()->json([
            'status'=>'success',
            'banners'=> OfferResource::collection($single_offer),
        ],200);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BranchesResource as BranchesResource;
use App\Http\Resources\CityResource;
use App\Models\City;
use App\Models\Cooking;
use App\Models\Country;
use App\Models\Cutting;
use App\Models\Spice;
use App\Models\Wrapping;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function cutting()
    {
        $cutting = Cutting::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'cutting'=> BranchesResource::collection($cutting),
        ],200);
    }
    public function wrapping()
    {
        $wrapping = Wrapping::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'wrapping'=> BranchesResource::collection($wrapping),
        ],200);
    }
    public function cooking()
    {
        $cooking = Cooking::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'cooking'=> BranchesResource::collection($cooking),
        ],200);
    }
    public function spice()
    {
        $spice = Spice::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'spice'=> BranchesResource::collection($spice),
        ],200);
    }
    public function countries()
    {
        $countries = Country::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'countries'=> CityResource::collection($countries),
        ],200);
    }
    public function cities()
    {
        $cities = City::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'countries'=> CityResource::collection($cities),
        ],200);
    }
}

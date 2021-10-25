<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FaqResource as FaqResource;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faqs(){

        $faqs = Faq::where(['status'=>'active'])->get();
        return response()->json([
            'status'=>'success',
            'faqs'=> FaqResource::collection($faqs),
        ],200);

    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class CollectController extends Controller
{
    public function terms(){
        $terms = About::findorFail(1);

        if($terms){
            return response()->json([
                'status'=>'success',
                'id' => $terms->id,
                'terms_ar' => $terms->terms_ar,
                'terms_en' => $terms->terms_en,
            ],200);
        }

    }

    public function aboutUs(){
        $aboutus = About::findorFail(1);

        if($aboutus){
            return response()->json([
                'status'=>'success',
                'id' => $aboutus->id,
                'about_ar' => $aboutus->about_ar,
                'about_en' => $aboutus->about_en,
            ],200);
        }

    }

    public function polices(){
        $polices = About::findorFail(1);

        if($polices){
            return response()->json([
                'status'=>'success',
                'id' => $polices->id,
                'polices_ar' => $polices->polices_ar,
                'polices_en' => $polices->polices_en,
            ],200);
        }

    }
}

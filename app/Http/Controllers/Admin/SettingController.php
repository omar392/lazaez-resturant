<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('admin.setting.edit',compact('setting'));
    }
    public function update(Request $request){
        $setting = Setting::findOrFail(1);
        $setting ->update([
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'whatsapp'=>$request->input('whatsapp'),
            'apple_url'=>$request->input('apple_url'),
            'android_url'=>$request->input('android_url'),
            'twitter'=>$request->input('twitter'),
            'snapchat'=>$request->input('snapchat'),
            'instagram'=>$request->input('instagram'),
            'address_ar'=>$request->input('address_ar'),
            'address_en'=>$request->input('address_en'),
        ]);
        $setting->save();
        return redirect()->back()->with('success','تم التعديل بنجاح ');
    }
}

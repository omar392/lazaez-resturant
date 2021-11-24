<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class AuthController extends Controller
{
    public function userLogin(){
        $data['categories'] = Category::where(['status'=>'active','is_parent'=>1])->limit(4)->orderBy('id','DESC')->get();
        $data['offers'] = Offer::where(['status'=>'active'])->get();
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['all_products'] = Product::where(['status'=>'active'])->get();
        return view('frontend.auth.login',$data);
    }
    public function userSign(Request $request)
    {
        $this->validate($request,[
            'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'  => 'required|string',
        ]);
        if(Auth::attempt(['phone' => $request->phone , 'password' => $request->password , 'status' =>'active'])){
            Session::put('user',$request->phone);

            if(Session::get('url.intended')){
                return Redirect::to(Session::get('url.intended'));
            }else{
                return redirect()->route('home')->with('success','تم تسجيل الدخول بنجاح ');
            }
            
        }else{
            return redirect()->back('error','Invaild Email && Password');
        }
    }

    public function userRegister()
    {
        $data['categories'] = Category::where(['status'=>'active','is_parent'=>1])->limit(4)->orderBy('id','DESC')->get();
        $data['offers'] = Offer::where(['status'=>'active'])->get();
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['all_products'] = Product::where(['status'=>'active'])->get();
        return view('frontend.auth.register',$data);
    }
    public function userSignUp(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'min:4|required|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'code' => mt_rand(1000, 9999),
            'isVerified' => 1,
        ]);
        // dd('dddd');
        Auth::login($user);
        if ($user) {
            toastr()->success('تم التسجيل بنجاح ');
            return redirect()->route('user.code');
        }
    }
    public function code()
    {
        $data['categories'] = Category::where(['status'=>'active','is_parent'=>1])->limit(4)->orderBy('id','DESC')->get();
        $data['offers'] = Offer::where(['status'=>'active'])->get();
        $data['banner'] = Banner::where(['status'=>'active'])->get();
        $data['setting']  = Setting::first();
        $data['all_products'] = Product::where(['status'=>'active'])->get();
        return view('frontend.auth.code',$data);
    }
    // public function verifyCode(Request $request)
    // {
    //     $data = $request->validate([
    //         'code'=>'required|string',
    //     ]);
    // }
    private function create(array $data){

        return User::create([
            'name'=>$data['name'],
            'phone'=>$data['phone'],
            'email'=>$data['email'],
            'code' => $data[rand(1111, 9999)],
            'password'=> bcrypt($data['password']),
        ]);
    }//Function To Register
}

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
        ]);
        dd('dddd');
        if ($user == true) {}
        // // $data['code'] = $request->rand(1111, 9999);
        // return $request->all();
        // $this->validate($request,[
        //     'name'=>'required|string',
        //     'phone'=>'required|string',
        //     'email'=>'required|email|unique:users,email',
        //     'password'=>'min:4|required|confirmed',
        //     'code' => mt_rand(1000, 9999),
        // ]);
        // $data = $request->all();
        // // $data['code'] = $request->rand(1111, 9999);
        // $check = $this->create($data);
        // Session::put('user',$data['email']);
        // Auth::login($check);
        // if($check){
        //     return redirect()->route('website')->with('success','نم التسجيل على الموقع بنجاح !!');
        // }else{
        //     return back()->with('error','من فظلك راجع ما تقوم به وحاول مرة ثانية !! ');
        // }

       
    }
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

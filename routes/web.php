<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MasterController;
use App\Http\Controllers\Frontend\OfferController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('website');

Route::get('command', function () {
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    return "cache is cleared successfully !! ";
});

//login
Route::get('user/login',[AuthController::class,'userLogin'])->name('user.login');
Route::post('signin',[AuthController::class,'userSign'])->name('user.sign');
//endlogin
//forget password
Route::get('verify',[AuthController::class,'verifyCode'])->name('user.verify');
Route::post('sendverify',[AuthController::class,'sendVerify'])->name('send.verify');
Route::get('forget-pass',[AuthController::class,'forgetPass'])->name('forget.pass');
Route::post('reset-pass',[AuthController::class,'resetPass'])->name('reset.pass');
//endforget password
Route::get('code',[AuthController::class,'code'])->name('user.code');
Route::post('code',[AuthController::class,'codeVerify'])->name('user.code');
//user logout
Route::get('user/logout',[AuthController::class,'userLogout'])->name('user.logout');
//end user logout
//register
Route::get('user/register',[AuthController::class,'userRegister'])->name('user.register');
Route::post('user/signup',[AuthController::class,'userSignUp'])->name('user.signup');
//end register
Auth::routes(['register'=>false]);
Route::get('/search', [SearchController::class, 'search']);
    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
        ], function(){
            Route::get('products/{id}',[HomeController::class,'singleProducts'])->name('single.products');
            Route::get('single_products/{id}',[HomeController::class,'singleProduct'])->name('single.product');
            Route::get('/',[HomeController::class,'index'])->name('website');
            Route::get('contact-us',[ContactController::class,'index'])->name('contact');
            Route::get('about-us',[AboutController::class,'index'])->name('about.us');
            Route::get('faqs',[MasterController::class,'faqs'])->name('faqs.index');
            Route::get('terms',[MasterController::class,'terms'])->name('terms.index');
            Route::get('privcy',[MasterController::class,'privcy'])->name('privcy.index');
            Route::get('offers',[OfferController::class,'index'])->name('offers.index');

        });

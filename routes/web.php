<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MasterController;
use App\Http\Controllers\Frontend\OfferController;
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
Route::get('user/login',[AuthController::class,'userLogin'])->name('user.login');
Route::post('signin',[AuthController::class,'userSign'])->name('user.sign');
Route::get('user/register',[AuthController::class,'userRegister'])->name('user.register');
Route::post('user/signup',[AuthController::class,'userSignUp'])->name('user.signup');
Auth::routes(['register'=>false]);
    
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

    
    
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


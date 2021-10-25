<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CollectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('terms',[CollectController::class,'terms']);
Route::get('about-us',[CollectController::class,'aboutUs']);
Route::get('polices',[CollectController::class,'polices']);

Route::post('register',[AuthController::class,'registerUser']);
Route::post('verifycode',[AuthController::class,'verifyCode']);
Route::post('resendcode',[AuthController::class,'resetCode']);
Route::post('forgetpassword',[AuthController::class,'forgetPassword']);
Route::post('login',[AuthController::class,'loginUser']);

Route::group(['middleware' => 'auth.jwt'], function () {

    Route::get('user',[AuthController::class,'userData']);
    Route::post('update-user',[AuthController::class,'updateUser']);
    Route::get('banners',[BannerController::class,'banners']);
    Route::get('main-categories',[CategoryController::class,'mainCategories']);

    Route::post('logout',[AuthController::class,'logout']);

});
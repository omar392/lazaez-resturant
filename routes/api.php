<?php

use App\Http\Controllers\Api\AdvertController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\BranchesController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CollectController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SearchController;
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
//cities and countries
Route::get('cities',[BranchesController::class,'cities']);
Route::get('countries',[BranchesController::class,'countries']);
//
//cart operations
Route::post('add-to-cart',[OrderController::class,'addToCart']);
Route::post('get-user-order',[OrderController::class,'getUserCart']);
Route::post('delete-item',[OrderController::class,'deleteItem']);
Route::post('delete-all-cart',[OrderController::class,'deleteCart']);
//end cart operations

//makeorder
Route::post('add-order',[OrderController::class,'addOrder']);

//end orders

Route::get('terms',[CollectController::class,'terms']);
Route::get('about-us',[CollectController::class,'aboutUs']);
Route::get('polices',[CollectController::class,'polices']);

Route::get('cutting',[BranchesController::class,'cutting']);
Route::get('wrapping',[BranchesController::class,'wrapping']);
Route::get('cooking',[BranchesController::class,'cooking']);
Route::get('spice',[BranchesController::class,'spice']);

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
    Route::post('sub-categories',[CategoryController::class,'subCategories']);
    Route::post('products',[ProductController::class,'products']);
    Route::get('faqs',[FaqController::class,'faqs']);
    Route::get('adverts',[AdvertController::class,'adverts']);
    Route::get('offers',[OfferController::class,'offers']);
    Route::post('single-offer',[OfferController::class,'singleOffer']);
    Route::post('search',[SearchController::class,'searchProduct']);
    
    Route::get('new-order',[OrderController::class,'newOrder']);
    Route::get('finished-order',[OrderController::class,'finishedOrder']);
    Route::post('logout',[AuthController::class,'logout']);

});
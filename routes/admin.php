<?php


use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\AdvertController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CookingController;
use App\Http\Controllers\Admin\CuttingController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\OpinionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WrappingController;
use Illuminate\Support\Facades\Route;



Route::get('admin/home',[AdminController::class,'index'])->name('adminhome');
Route::GET('admin',[LoginController::class,'showLoginForm'])->name('admin.login');
Route::POST('admin',[LoginController::class,'login']);
Route::POST('logout',[LoginController::class,'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {


//categories 
Route::resource('category', CategoryController::class);
Route::post('category_status',[CategoryController::class,'categoryStatus'])->name('category.status');
Route::post('category/{id}/child',[CategoryController::class,'getChildByParentID']);

//Products 
Route::resource('product', ProductController::class);
Route::post('product_status',[ProductController::class,'productStatus'])->name('product.status');

//opinions 
Route::resource('opinion', OpinionController::class);
Route::post('opinion_status',[OpinionController::class,'opinionStatus'])->name('opinion.status');

//Admins 
Route::resource('admins', AdminsController::class);
Route::post('admins_status',[AdminsController::class,'adminsStatus'])->name('admins.status');

//roles 
Route::resource('roles', RoleController::class);

//offer
Route::resource('offer', OfferController::class);
Route::post('offer_status',[OfferController::class,'offerStatus'])->name('offer.status');

//banners
Route::resource('banner', BannerController::class);
Route::post('banner_status',[BannerController::class,'bannerStatus'])->name('banner.status');

//banners 
Route::resource('advert', AdvertController::class);
Route::post('advert_status',[AdvertController::class,'advertStatus'])->name('advert.status');

//faq
Route::resource('faq', FaqController::class);
Route::post('faq_status',[FaqController::class,'faqStatus'])->name('faq.status');


//cutting
Route::resource('cutting', CuttingController::class);
Route::post('cutting_status',[CuttingController::class,'cuttingStatus'])->name('cutting.status');


//wrapping
Route::resource('wrapping', WrappingController::class);
Route::post('wrapping_status',[WrappingController::class,'wrappingStatus'])->name('wrapping.status');

//cooking
Route::resource('cooking', CookingController::class);
Route::post('cooking_status',[CookingController::class,'cookingStatus'])->name('cooking.status');

//spice
Route::resource('spice', SpiceController::class);
Route::post('spice_status',[SpiceController::class,'spiceStatus'])->name('spice.status');


//settings
Route::get('setting',[SettingController::class,'index'])->name('setting');
Route::post('setting',[SettingController::class,'update'])->name('updatesetting');

//about_us
Route::get('about',[AboutController::class,'index'])->name('about');
Route::post('about',[AboutController::class,'update'])->name('updateabout');

//useers 
Route::resource('user', UserController::class);
Route::post('user_status',[UserController::class,'userStatus'])->name('user.status');

//our team 
Route::resource('team', TeamController::class);
Route::post('team_status',[TeamController::class,'teamStatus'])->name('team.status');


});


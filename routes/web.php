<?php

use Illuminate\Support\Facades\Route;

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

// user Section

Route::get('/',[\App\Http\Controllers\user\HomeController::class,'index_home'])->name('home');
Route::get('/order-details',[\App\Http\Controllers\user\HomeController::class,'index_order'])->name('details');
Route::get('/product-details/{slug}',[\App\Http\Controllers\user\HomeController::class,'index_product_details'])->name('product_details');
Route::get('/user-plans',[\App\Http\Controllers\user\HomeController::class,'index_plans'])->name('plan.user');


/////////////////////it is for register////////////////////////////////////// 
Route::get('/register',[\App\Http\Controllers\AuthController::class,'register'])->name('register');
Route::post('/register',[\App\Http\Controllers\AuthController::class,'store'])->name('register.create');

/////////////////////////it is for login /////////////////////////////

Route::get('/login',[\App\Http\Controllers\AuthController::class,'index'])->name('login');
Route::post('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login.create');


/////////////////////it if for contact form/////////////////////

Route::get('/contact',[\App\Http\Controllers\user\HomeController::class,'index'])->name('contact');
Route::post('/contact',[\App\Http\Controllers\user\HomeController::class,'store'])->name('contact.create');

Route::get('/checkout\{slug}',[\App\Http\Controllers\user\HomeController::class,'checkout'])->name('checkout');
Route::post('/checkout\create',[\App\Http\Controllers\user\HomeController::class,'checkout_store'])->name('checkout.store');

Route::get('/plan-payment',[\App\Http\Controllers\user\RazorpayController::class,'index'])->name('payment');
Route::post('/payment-process',[\App\Http\Controllers\user\RazorpayController::class,'payment_store'])->name('razorpay.payment.store');
// ---------------------------------------------------------------------

// Admin Section
/////////////////////It is for admin dashboard
Route::get('/dashboard',[\App\Http\Controllers\admin\HomeController::class,'index'])->name('dashboard');


//////////////////////It is for plan create//////////////////////////////////////////////
Route::get('/plan-create',[\App\Http\Controllers\admin\HomeController::class,'index_plan'])->name('plan.form');
Route::post('/plan-created',[\App\Http\Controllers\admin\HomeController::class,'index_plan_create'])->name('plans.create');

/////////////////////////it is for plan view////////////////////////////////////
Route::get('/plan-view',[\App\Http\Controllers\admin\HomeController::class,'index_plan_view'])->name('plan.view');

/////////////////////////it is for plan details view////////////////////////////////////
Route::get('/plan-details\{id}',[\App\Http\Controllers\admin\HomeController::class,'index_plan_details'])->name('plan.details');

/////////////////////////it is for plan update////////////////////////////////////
Route::get('/edit-plan-details\{id}',[\App\Http\Controllers\admin\HomeController::class,'index_edit'])->name('plan.details.edit');
Route::post('/update-plan-details\{id}',[\App\Http\Controllers\admin\HomeController::class,'index_plan_update'])->name('plan.details.update');

/////////////////////////////it is for delete plan////////////////////////////////////////
Route::delete('/plan-delete\{id}',[\App\Http\Controllers\admin\HomeController::class,'delete_plan'])->name('plan.delete');

/////////////////////////////it is for admin banner section///////////////////////////////////
Route::get('/banner-view',[\App\Http\Controllers\admin\BannerController::class,'index'])->name('banner.view');

Route::get('/banner-create',[\App\Http\Controllers\admin\BannerController::class,'create'])->name('banner.form');
Route::post('/banner-store',[\App\Http\Controllers\admin\BannerController::class,'store'])->name('banner.store');

Route::post('/banner/status/{id}', [\App\Http\Controllers\admin\BannerController::class,'status'])->name('admin.banner.status');
Route::delete('/banner/delete/{id}', [\App\Http\Controllers\admin\BannerController::class,'delete'])->name('admin.banner.delete');
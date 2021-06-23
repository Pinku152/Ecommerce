<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\StripePaymentController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact',[HomeController::class,'contact']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/about',[HomeController::class,'about']);
Route::get("categories/{id}",[ProductController::class,'filter']);

Route::get('/product-detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);

Route::post("add_to_cart",[CartController::class,'addToCart']);
Route::get("cartlist",[CartController::class,'cartList']);
Route::get("removecart/{id}",[CartController::class,'removeCart']);

Route::get("ordernow",[OrderController::class,'orderNow']);
Route::post("orderplace",[OrderController::class,'orderPlace']);
Route::get("myorders",[OrderController::class,'myOrders']);

Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

Auth::routes();

//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role_id');

Route::group(['middleware' => ['protectedPage']], function(){
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('admin/categories',CategoryController::class);
    Route::resource('admin/products',ProductController::class);
    Route::get('/admin/orders',[OrderController::class,'index'])->name('orders.index');
    Route::get('/admin/orders/{id}',[OrderController::class,'edit']);
    Route::post('/admin/orders/{id}',[OrderController::class,'update']);
    Route::get('/admin/profile',[ProfileController::class,'index']);
    Route::post('/admin/profile/{id}',[ProfileController::class,'update']);
    Route::get('/admin/change-password',[ChangePasswordController::class,'index']);
    Route::post('admin/change-password', [ChangePasswordController::class,'changePassword']);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

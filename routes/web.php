<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UsersController;
use App\Models\Sepet;
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

Route::get('/', [MainController::class,'index']);
Route::get('/products', [MainController::class,'product']);
Route::get('/account/{user_id}', [UsersController::class,'account']);
Route::get('/product-details/{id}', [MainController::class,'productDetails']);

Route::get('/login', function(){
    return view('client.login');
})->middleware('userLogin');
Route::get('sepet/{user}', [SepetController::class,'index']);
Route::get('logout/',[AdminLoginController::class,'logout']);

Route::prefix('/admin')->middleware('auth')->middleware('authLogin')->group(function(){
    Route::get('/', function(){
        return view('dashboard.home');
    });
    Route::get('/slider', [SliderController::class,'index']);
    Route::get('/slider-add', [SliderController::class,'add']);
    Route::get('/slider-edit/{id}', [SliderController::class,'edit2']);

    Route::get('/account', function(){
        return view('dashboard.account');
    });
    Route::get('/users', [UsersController::class,'index']);
    Route::get('/user/{id}', [UsersController::class,'dondurma']);

    Route::get('/products', [ProductController::class,'index']);
    Route::get('/product-edit/{id}', [ProductController::class,'edit2']);
    
    Route::get('/product-add', function(){
        return view('dashboard.product-add');
    });
    Route::get('/orders', [OrdersController::class,'index']);
    Route::get('/order/{id}', [OrdersController::class,'onay']);
    Route::get('/sepet', [Sepet::class,'index']);


});
Route::prefix('/admin')->middleware('isLogin')->group(function(){
    Route::get('/login', [AdminLoginController::class,'index'])->name('login');
    Route::post('/login', [AdminLoginController::class,'login']);
    
});

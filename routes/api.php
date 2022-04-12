<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImagesController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UsersController;
use App\Models\Sepet;
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

Route::prefix('v1/')->group(function () {
    
    Route::post('/slider', [SliderController::class,'store']);
    Route::post('/slider/{id}', [SliderController::class,'edit']);
    Route::get('/slider-del/{id}', [SliderController::class,'destroy']);

   
    Route::post('/users', [UsersController::class,'store']);
    Route::put('/users/{id}', [UsersController::class,'edit']);
    Route::delete('/users/{id}', [UsersController::class,'destroy']);

    Route::post('/products', [ProductController::class,'store']);
    Route::put('/products/{id}', [ProductController::class,'edit']);
    Route::get('/product-del/{id}', [ProductController::class,'destroy']);
    

    Route::get('/product-images', [ProductImagesController::class,'index']);
    Route::post('/product-images', [ProductImagesController::class,'store']);
    Route::put('/product-images/{id}', [ProductImagesController::class,'edit']);
    Route::delete('/product-images/{id}', [ProductImagesController::class,'destroy']);
    
    Route::get('/orders/{user_id}', [OrdersController::class,'store']);
    Route::delete('/orders/{id}', [OrdersController::class,'destroy']);

    Route::get('/sepet/{id}/{user}', [SepetController::class,'store']);
    Route::get('/sepet/{user}', [SepetController::class,'get_data']);
    Route::get('/sepet-del/{id}', [SepetController::class,'destroy']);

    Route::post('/login',[UsersController::class,'login']);
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiProductController;


use App\Http\Controllers\OrderController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::middleware(['cors'])->group(function () {
    // our routes to be protected will go in here
    Route::post('/logout',[ApiAuthController::class,'logout'])->name('logout.api');
    Route::post('/order',[OrderController::class,'store']);
    Route::get('/orders/{id}',[OrderController::class,'showAllOrder']);
    Route::get('/orderDetails/{id}',[OrderController::class,'showOrderItems']);
    Route::delete('/order/{id}',[OrderController::class,'deleteOrder']);
    Route::get('/pay_types',[OrderController::class,'showAllPaymentTypes']);
    Route::get('/cards',[OrderController::class,'showAllVisaCards']);
    Route::post('/register',[ApiAuthController::class,'register']);
    Route::post('/login',[ApiAuthController::class,'login']);
    Route::get('/categories',[ApiProductController::class,'getCategories']);
    Route::get('/products/{category_id}',[ApiProductController::class,'getProductsByCategory']);
    Route::get('/allproducts',[ApiProductController::class,'getAllProducts']);
// });




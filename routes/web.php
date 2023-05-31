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

Auth::routes();


Route::get('/', [\App\Http\Controllers\WebController::class,"home"]);
Route::get("/shop",[\App\Http\Controllers\WebController::class,"shop"]);
Route::get("/search",[\App\Http\Controllers\WebController::class,"search"]);
Route::get("/category/{category:slug}",[\App\Http\Controllers\WebController::class,"category"]);
Route::get("/product/{product:slug}",[\App\Http\Controllers\WebController::class,"product"]);
Route::get("/cart",[\App\Http\Controllers\WebController::class,"cart"]);
//Route::get("/cart/delete/{product}",[\App\Http\Controllers\WebController::class,"cartDelete"]);
Route::get("/add-to-cart/{product}",[\App\Http\Controllers\WebController::class,"addToCart"]);
Route::get("/checkout",[\App\Http\Controllers\WebController::class,"checkout"]);
Route::post("/checkout",[\App\Http\Controllers\WebController::class,"placeOrder"]);
Route::get("/thankyou/{order}",[\App\Http\Controllers\WebController::class,"thankYou"]);
Route::get("/invoice",[\App\Http\Controllers\WebController::class,"invoice"]);
Route::get("/favourite",[\App\Http\Controllers\WebController::class,"favourite"]);
Route::get("/add-to-favourite/{product}",[\App\Http\Controllers\WebController::class,"addToFavourite"]);
Route::get('success-transaction/{order}', [\App\Http\Controllers\WebController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction/{order}', [\App\Http\Controllers\WebController::class, 'cancelTransaction'])->name('cancelTransaction');



Route::prefix("/admin")->middleware(["auth","admin"])->group(function (){
    Route::get("/",[\App\Http\Controllers\AdminController::class,"dashboard"]);
    Route::get("/orders",[\App\Http\Controllers\AdminController::class,"orders"]);
    Route::get("/orders/{order}",[\App\Http\Controllers\AdminController::class,"invoice"]);
    Route::get("/orders/confirm/{order}",[\App\Http\Controllers\AdminController::class,"confirm"]);


    Route::get("/products",[\App\Http\Controllers\AdminController::class,"products"]);
    Route::get("/products/create",[\App\Http\Controllers\AdminController::class,"productCreate"]);
    Route::post("/products/create",[\App\Http\Controllers\AdminController::class,"productSave"]);
    Route::get("/products/delete/{product}",[\App\Http\Controllers\AdminController::class,"productDelete"]);
});





<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });
Route::prefix('category')->group(function(){
    Route::get('/food-beverage',[ProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health',[ProductsController::class, 'beautyHealth']);
    Route::get('/home-care',[ProductsController::class, 'homeCare']);
    Route::get('/baby-kid',[ProductsController::class, 'babyKid']);
});

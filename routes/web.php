<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Shop\MainController;

use Illuminate\Support\Facades\Auth;
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
// General Routes
Route::get('/home', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Auth::routes();
// Shops
Route::get('/shops', [MainController::class, 'index'])->name(('shops.index'));
Route::get('/shops/{shop}/product', [MainController::class, 'product'])->name(('shops.product'));

Route::get('/shops/categories/{category}', [MainController::class, 'categories'])->name(('shops.categories'));
// Cart
Route::get('/shops/cart', [MainController::class, 'cart'])->name('shops.cart');


Route::POST('/shops', [CartController::class, 'store'])->name(('cart.store'));

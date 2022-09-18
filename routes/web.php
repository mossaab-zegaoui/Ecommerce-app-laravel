<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\Shop\MainController;
use App\Models\Cart;
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
})->name('home');
Route::get('/', function () {
    return view('index');
});
Route::get('/blog', [MainController::class, 'blog'])->name(('blog'));
Route::get('/about', [MainController::class, 'about'])->name(('about'));
// Mail
Route::get('/contact', [MainController::class, 'contact'])->name(('contact'));
Route::post('/contact', [MainController::class, 'contact_store'])->name(('contact_store'));

// Shops
Route::get('/shops', [MainController::class, 'index'])->name(('shops.index'));
Route::get('/shops/{shop}/product', [MainController::class, 'show'])->name(('shops.show'));
Route::get('/shops/{category}/categories', [MainController::class, 'categories'])->name(('shops.categories'));

// Cart
Route::get('/shops/cart', [CartController::class, 'index'])->name('shops.cart');
Route::POST('/shops', [CartController::class, 'store'])->name(('cart.store'));
Route::delete('/shops/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::patch('/shops/cart/{cart}', [CartController::class, 'update'])->name('cart.update');


// Coupons
Route::post('/coupon', [CouponsController::class, 'store'])->name('coupon.store');
Route::delete('/coupon', [CouponsController::class, 'destroy'])->name('coupon.destroy');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::POST('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout/destroy', [CheckoutController::class, 'destroy'])->name('checkout.destroy');

// Send email

Route::get('/subscribe', function () {
    return view('subscription');
});
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

<?php

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
    return view('vendor.ezp.landing-page');
})->name('landingPage');

Route::get('/cart', function () {
    return view('vendor.ezp.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('vendor.ezp.checkout');
})->name('checkout');

Route::post('cart/{id}', 'CartController@store')->name('cart.store');
Route::get('/shop', 'ProductController@index')->name('shop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

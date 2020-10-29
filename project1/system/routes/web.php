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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/index', function () {
    return view('pages.index');
});


Route::get('/shop-single', function () {
    return view('pages.shop-single');
});


Route::get('/shop', function () {
    return view('pages.shop');
});


Route::get('/thankyou', function () {
    return view('pages.thankyou');
}); 

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/templete', function () {
    return view('templete.base');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/katagori', function () {
    return view('katagori');
}); 

Route::get('/login', function () {
    return view('login');
});





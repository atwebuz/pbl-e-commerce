<?php

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
    return view('pages.home');
});



Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/cart', function () {
    return view('pages.cart');
});



Route::get('/wishlist', function () {
    return view('pages.wishlist');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/404', function () {
    return view('pages.404');
});


Route::get('/products', function () {
    return view('pages.products');
});


Route::get('/product', function () {
    return view('pages.product');
});

<?php

use App\Models\Product;
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

Route::get('/registration', function () {
    return view('pages.register');
});

Route::get('/login', function () {
    return view('pages.login');
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

Route::get('/profile', function () {
    return view('pages.profile');
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


Route::get('/products', function () {

    return view('pages.products', [
        'products' => Product::paginate(12)
    ]);
});
// $collection = $products->getCollection();
// $count = $collection->count();

Route::get('/products/{product}', function (Product $product) {

  
        return view('pages.product', [
            'product' => $product
        ]);
 
});
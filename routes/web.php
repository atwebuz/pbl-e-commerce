<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProductController;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "webake something great!
|
*/

Route::get('/', function () {
    $brands = Brand::select(['name'])
    ->withCount('products')
    ->get();
// dd($brands);
    return view('pages.home', [
        'brands' => $brands
    ]);
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

//****************** */
Route::get('/products', [ProductController::class, 'index'])->name('products');

// Show Create Form
Route::get('/products/create', [ProductController::class, 'create']);

// Store product Data
Route::post('/products', [ProductController::class, 'store']);

// Show Edit Form
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);

// Update product
Route::put('/products/{product}', [ProductController::class, 'update']);

// Delete product
Route::delete('/products/{product}', [ProductController::class, 'destroy']);

// Manage products
Route::get('/products/manage', [ProductController::class, 'manage']);

// Single product
Route::get('/products/{product}', [ProductController::class, 'show']);;

// Show Register/Create Form
// Route::get('/register', [UserController::class, 'create']);;

// Create New User
// Route::post('/users', [UserController::class, 'store']);;

// Log User Out
// Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
// Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// localization
Route::get('/{locale?}', [LangController::class, 'index']);

Route::get('language/{locale}', [LangController::class, 'show']);
// not found 404 page
Route::fallback(FallbackController::class);

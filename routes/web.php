<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, "indexPage"]);
Route::get('/logout', [UserController::class, "logout"]);
Route::get('/userProfile', [UserController::class, "userProfile"]);
Route::post('/update/{id}',[UserController::class,'update']);

Route::get('/products', function () {
    return view('products');
});

// Routes for individual products
Route::get('/products/motherboard', function () {
    return view('products.motherboard'); // Blade file for Motherboard
});

// Route for the Memory products
Route::get('/products/memory', [ProductController::class, 'memory'])->name('products.memory');

// Route for the Motherboard products
Route::get('/products/motherboard', [ProductController::class, 'motherboards'])->name('products.motherboard');

// Route for the CPU products
Route::get('/products/cpu', [ProductController::class, 'cpu'])->name('products.cpu');

// Route for the Storage products
Route::get('/products/storage', [ProductController::class, 'storage'])->name('products.storage');

// Route for the Video Card products
Route::get('/products/video-card', [ProductController::class, 'videocard'])->name('products.video_card');

// Route for the Storage products
Route::get('/products/case', [ProductController::class, 'case'])->name('products.case');

// Routes for cart
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/products/cpu/{id}/add', [CartController::class, 'addToCart'])->name('product.addToCart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('FAQ');
});

// loads the login page
Route::get('/login', function () {
    return view('forms.loginForm');
});

// registration page directing to the view
Route::get('/register', [UserController::class, 'signup']);

// registration information saved to db
Route::post('/register', [UserController::class, 'register']);

// gets the input from the login page and authenticates
Route::post('/login', [UserController::class, 'login']);

Route::get('/admin-login', function () {
    return view('forms.admin-login');
});

Route::get('/checkout', function () {
    return view('forms.checkout');
});

Route::post('/contactForm',[ContactFormController::class,'contactForm']);

Route::get('/contact/contact-form', function () {
    return view('forms.contactForm');
});

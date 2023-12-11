<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[UserController::class,"indexPage"]);
Route::get('/logout',[UserController::class,"logout"]);
Route::get('/userProfile',[UserController::class,"userProfile"]);

Route::get('/products', function () {
    return view('products');
});

// Routes for individual products
Route::get('/products/motherboard', function () {
    return view('products.motherboard'); // Blade file for Motherboard
});

Route::get('/products/cpu', function () {
    return view('products.cpu'); // Blade file for CPU
});

Route::get('/products/memory', function () {
    return view('products.memory'); // Blade file for Memory
});

Route::get('/products/storage', function () {
    return view('products.storage'); // Blade file for Storage
});

Route::get('/products/video-card', function () {
    return view('products.video_card'); // Blade file for Video Card
});

Route::get('/products/case', function () {
    return view('products.case'); // Blade file for Case
});

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

// registraton page directing to the view
Route::get('/register', [UserController::class, 'signup']);

// registration information saved to db
Route::post('/register',[UserController::class,'register']);

// gets the input from the login page and authenticates
Route::post('/login',[UserController::class,'login']);


Route::get('/admin-login', function () {
    return view('forms.admin-login');
});

Route::get('/checkout', function () {
    return view('forms.checkout');
});

Route::get('/contact/contact-form', function () {
    return view('forms.contactForm');
});

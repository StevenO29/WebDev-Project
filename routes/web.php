<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

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

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/registered', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/gelas', function () {
    return view('gelas');
});
Route::get('/hdpe', function () {
    return view('hdpe');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/opp', function () {
    return view('opp');
});

Route::get('/pe', function () {
    return view('pe');
});
Route::get('/kresek', function () {
    return view('kresek');
});

Route::get('/hdpe', function () {
    return view('hdpe');
});

Route::get('/kertas', function () {
    return view('kertas');
});


Route::get('/short-codes', function () {
    return view('short-codes');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/welcome', function () {
    return view('welcome');
});


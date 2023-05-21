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

Route::get('/glass', function () {
    return view('glass');
});
Route::get('/gourmet', function () {
    return view('gourmet');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/plastic', function () {
    return view('plastic');
});

Route::get('/cup', function () {
    return view('cup');
});
Route::get('/cutleries', function () {
    return view('cutleries');
});

Route::get('/paper', function () {
    return view('paper');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/registered', function () {
    return view('registered');
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

Route::get('/products2', function () {
    return view('products2');
});

Route::get('/products3', function () {
    return view('products3');
});

Route::get('/products4', function () {
    return view('products4');
});

Route::get('/products5', function () {
    return view('products5');
});


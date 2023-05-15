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
    return view('indexLogout');
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
Route::get('/hdpe', function () {
    return view('hdpe');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/indexLogout', function () {
    return view('indexLogout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/opp', function () {
    return view('opp');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/orderdetails', function () {
    return view('orderdetails');
});
Route::get('/paper', function () {
    return view('paper');
});

Route::get('/pe', function () {
    return view('pe');
});

Route::get('/plastics', function () {
    return view('plastics');
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

Route::get('/newproduct', function () {
    return view('newproduct');
});


<?php

use App\Http\Controllers\nyobaController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\orderDetailsController;
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
    return view('login');
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


Route::get('/kertas', function () {
    return view('kertas');
});

Route::get('/pe', function () {
    return view('pe');
});

Route::get('/kresek', function () {
    return view('kresek');
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

Route::prefix('/order')->group(function(){
    Route::get('/',[orderController::class,"tabelorder"] );
});

 Route::prefix('/orderdetails')->group(function(){
     Route::get('/',[orderDetailsController::class,"tabelorderDetail"] );
});
//Route::get('/orderdetails/{id}', 'OrderDetailsController@show')->name('orderdetails.show');
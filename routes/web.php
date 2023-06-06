<?php

use App\Http\Controllers\newProdController;
use App\Http\Controllers\nyobaController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\orderDetailsController;
use App\Http\Controllers\productDetailsController;
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
    return view('welcome');
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


Route::get('/gourmet', function () {
    return view('gourmet');
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

// Route::get('/opp', function () {
//     return view('opp');
// });


// Route::get('/kertas', function () {
//     return view('kertas');
// });

// Route::get('/pe', function () {
//     return view('pe');
// });

// Route::get('/kresek', function () {
//     return view('kresek');
// });

// Route::get('/products', function () {
//     return view('products');
// });

// Route::get('/single', function () {
//     return view('single');
// });

Route::get('/editproduct', function () {
    return view('editproduct');
});



// Route::get('/newproduct', function () {
//     return view('newproduct');
// });
Route::prefix('/opp')->group(function(){
    Route::get('/',[newProdController::class,"tabelprodOPP"] );
});

Route::prefix('/hdpe')->group(function(){
    Route::get('/',[newProdController::class,"tabelprodHDPE"] );
});

Route::prefix('/pe')->group(function(){
    Route::get('/',[newProdController::class,"tabelprodPE"] );
});

Route::prefix('/kresek')->group(function(){
    Route::get('/',[newProdController::class,"tabelprodKresek"] );
});

Route::prefix('/gelas')->group(function(){
    Route::get('/',[newProdController::class,"tabelprodGelas"] );
});

Route::prefix('/kertas')->group(function(){
    Route::get('/',[newProdController::class,"tabelprodKertas"] );
});

Route::prefix('/order')->group(function(){
    Route::get('/',[orderController::class,"tabelorder"] );
});

  Route::prefix('/orderdetails')->group(function(){
      Route::get('/{id}',[orderDetailsController::class,"tabelorderDetail"] );
 });

Route::prefix('/single')->group(function(){
     Route::get('/{id}',[productDetailsController::class,"tableproduk"] );

});


 Route::prefix('/newproduct')->group(function(){
    Route::get('/',[newProdController::class,"newproduct"]);
    Route::POST('/proses',[newProdController::class,"Addbarang"]);
    
});

 Route::prefix('/editproduct')->group(function(){
     Route::get('/{id}',[newProdController::class,"tampilinBarangEdit"]);
     Route::post('/{id}',[newProdController::class,"EditBarang"]);
 });



// Route::get('/editproduct/{id}', [newProdController::class, "EditBarang"]);
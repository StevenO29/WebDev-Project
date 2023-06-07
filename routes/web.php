<?php

use App\Http\Controllers\newProdController;
use App\Http\Controllers\nyobaController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\orderDetailsController;
use App\Http\Controllers\productDetailsController;
use App\Http\Controllers\Auth\LoginRegisterController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/registered', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard')->middleware('auth');


// Route::get('/home', function () {
//     return view('dashboard');
// });

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

Route::get('/gourmet', function () {
    return view('gourmet');
});

Route::get('/index', function () {
    return view('index');
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

 Route::prefix('/deleteproduct')->group(function(){
    Route::get('/{id}',[newProdController::class,"tampilinBarangDelete"]);
    Route::post('/{id}',[newProdController::class,"DeleteBarang"]);
});



// Route::get('/editproduct/{id}', [newProdController::class, "EditBarang"]);
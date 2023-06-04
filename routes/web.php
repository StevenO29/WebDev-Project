<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/registered', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/opp', [TransactionController::class, 'index']);
Route::get('/checkout/{Product_ID}', [TransactionController::class, 'addToCart'])->name('addToCart');
Route::get('/checkout', [TransactionController::class, 'checkout']);
// Route::get('/opp', [TransactionController::class, 'checkout']);

Route::get('/gelas', function () {
    return view('gelas');
});

// Route::controller(TransactionController::class)->group(function(){
//     Route::get('/addToCart', 'index')->name('cart.index');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/add-to-cart', 
'TransactionController@addToCart')->name('transactions.addToCart');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/hdpe', function () {
    return view('hdpe');
});

Route::get('/offers', function () {
    return view('offers');
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

// Route::controller(TransactionController::class)->group(function() {
//     Route::get('/cart', 'index')->name('cart.index');
//     Route::post('/cart/add', 'addItem')->name('cart.add');
//     Route::patch('/cart/update/{itemId}', 'updateItem')->name('cart.update');
//     Route::delete('/cart/remove/{itemId}', 'removeItem')->name('cart.remove');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


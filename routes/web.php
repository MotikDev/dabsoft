<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/catalogue', function () {
    return view('pages.catalogue');
})->name('catalogue');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/facilities', function () {
    return view('pages.facilities');
})->name('facilities');

Route::get('/terms-and-conditions', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::get('/property/{property}/{title}', [ProductController::class, 'show'])->name('show-property');
Route::get('/property/{type}', [ProductController::class, 'showCategory'])->name('show-category');
Route::post('/property/inquiry', [ProductController::class, 'store'])->name('inquiry.store');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/featured', function () {
        return view('featured-products');
    })->name('featured');

    // Route::post('/store-product', 'App\Http\Controllers\ProductController@store')->name('store-product');
    Route::post('/store-product', [ProductController::class, 'store'])->name('store-product');
});
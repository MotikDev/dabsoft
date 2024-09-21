<?php

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.index');
})->name('index');

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
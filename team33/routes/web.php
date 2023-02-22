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

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/smartphones', function () {
    return view('smartphones');
});

Route::get('/laptops', function () {
    return view('laptops');
});

Route::get('/tablets', function () {
    return view('tablets');
});

Route::get('/tvs', function () {
    return view('tvs');
});

Route::get('/cameras', function () {
    return view('cameras');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/testimoni', function () {
    return view('testimoni');
});
Route::get('/program', function () {
    return view('program');
});
Route::get('/programdetail', function () {
    return view('programdetail');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/portofoliodetail', function () {
    return view('portofoliodetail');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/productdetail', function () {
    return view('productdetail');
});
Route::get('/contact', function () {
    return view('contact');
});

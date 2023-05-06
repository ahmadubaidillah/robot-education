<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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

// Testimoni
Route::get('/datatestimoni',[TestimoniController::class,'index'])->name('datatestimoni');
Route::get('/testimoni',[TestimoniController::class,'testimoni'])->name('testimoni');
Route::get('/tambahtestimoni',[TestimoniController::class, 'tambahtestimoni'])->name('tambahtestimoni');
Route::post('/inserttestimoni',[TestimoniController::class, 'inserttestimoni'])->name('inserttestimoni');
Route::get('/tampiltestimoni/{id}',[TestimoniController::class, 'tampiltestimoni'])->name('tampiltestimoni');
Route::post('/updatetestimoni/{id}',[TestimoniController::class, 'updatetestimoni'])->name('updatetestimoni');
Route::get('/deletetestimoni/{id}',[TestimoniController::class, 'deletetestimoni'])->name('deletetestimoni');

// Portofolio
Route::get('/dataportofolio',[PortofolioController::class,'index'])->name('dataportofolio');
Route::get('/portofolio',[PortofolioController::class,'portofolio'])->name('portofolio');
Route::get('/portofoliodetail/{id}',[PortofolioController::class, 'portofoliodetail'])->name('portofoliodetail');
Route::get('/tambahportofolio',[PortofolioController::class, 'tambahportofolio'])->name('tambahportofolio');
Route::post('/insertportofolio',[PortofolioController::class, 'insertportofolio'])->name('insertportofolio');
Route::get('/tampilportofolio/{id}',[PortofolioController::class, 'tampilportofolio'])->name('tampilportofolio');
Route::post('/updateportofolio/{id}',[PortofolioController::class, 'updateportofolio'])->name('updateportofolio');
Route::get('/deleteportofolio/{id}',[PortofolioController::class, 'deleteportofolio'])->name('deleteportofolio');

// Product
Route::get('/dataproduct',[ProductController::class,'index'])->name('dataproduct');
Route::get('/product',[ProductController::class,'product'])->name('product');
Route::get('/productdetail/{id}',[ProductController::class, 'productdetail'])->name('productdetail');
Route::get('/tambahproduct',[ProductController::class, 'tambahproduct'])->name('tambahproduct');
Route::post('/insertproduct',[ProductController::class, 'insertproduct'])->name('insertproduct');
Route::get('/tampilproduct/{id}',[ProductController::class, 'tampilproduct'])->name('tampilproduct');
Route::post('/updateproduct/{id}',[ProductController::class, 'updateproduct'])->name('updateproduct');
Route::get('/deleteproduct/{id}',[ProductController::class, 'deleteproduct'])->name('deleteproduct');

// Program
Route::get('/dataprogram',[ProgramController::class,'index'])->name('dataprogram');
Route::get('/program',[ProgramController::class,'program'])->name('program');
Route::get('/programdetail/{id}',[ProgramController::class, 'programdetail'])->name('programdetail');
Route::get('/tambahprogram',[ProgramController::class, 'tambahprogram'])->name('tambahprogram');
Route::post('/insertprogram',[ProgramController::class, 'insertprogram'])->name('insertprogram');
Route::get('/tampilprogram/{id}',[ProgramController::class, 'tampilprogram'])->name('tampilprogram');
Route::post('/updateprogram/{id}',[ProgramController::class, 'updateprogram'])->name('updateprogram');
Route::get('/deleteprogram/{id}',[ProgramController::class, 'deleteprogram'])->name('deleteprogram');

// Contact
Route::get('/datacontact',[ContactController::class,'index'])->name('datacontact');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/contactdetail/{id}',[ContactController::class, 'contactdetail'])->name('contactdetail');
Route::get('/tambahcontact',[ContactController::class, 'tambahcontact'])->name('tambahcontact');
Route::post('/insertcontact',[ContactController::class, 'insertcontact'])->name('insertcontact');
Route::get('/deletecontact/{id}',[ContactController::class, 'deletecontact'])->name('deletecontact');

Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/adminpanel', function () {
    return view('adminpanel');
});

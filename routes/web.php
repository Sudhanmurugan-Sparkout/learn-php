<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/add-products',[ProductController::class,'addProduct'])->middleware('auth')->name('add-products');;
Route::get('/fetch-product-price/{productId}/',[ProductController::class,'fetchPrice']);
Route::get('/apply-discount/{total}',[ProductController::class,'applyDiscount']);
Route::post('product/store',[ProductController::class,'store']);

Route::get('login', [LoginController::class, 'index'])->name('login'); //->middleware('guest');
Route::post('login/post', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('home.logout');

Route::get('register', [RegisterController::class, 'index'])->name('register.index');
Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');

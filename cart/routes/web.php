<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/products/', function () {
    return view('products');
});

Route::get('/insertCategory/', function () {
    return view('insertCategory');
});

Route::get('/showCategory/', function () {
    return view('showCategory');
});

Route::get('/insertProduct/', function() {
    return view("insertProduct");
});

Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class,'store'])->name('addCategory');
Route::get('/viewCategory', [App\Http\Controllers\CategoryController::class,'view'])->name('viewCategory');

Route::post('/insertProduct/store', [App\Http\Controllers\ProductController::class,'store'])->name('addProduct');
Route::get('/viewProducts', [App\Http\Controllers\ProductController::class,'view'])->name('viewProduct');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

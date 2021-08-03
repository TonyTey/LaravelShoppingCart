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

Route::get('/products', [App\Http\Controllers\ProductController::class, 'viewAll'])->name('Product');

Route::get('/insertCategory', function () {
    return view('insertCategory');
});

Route::get('/insertProduct', function() {
    return view("insertProduct", ['categoryID'=>App\Models\Category::all()]);
});

Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class,'store'])->name('addCategory');
Route::get('/viewCategory', [App\Http\Controllers\CategoryController::class,'view'])->name('viewCategory');

Route::post('/insertProduct/store', [App\Http\Controllers\ProductController::class,'store'])->name('addProduct');
Route::get('/viewProducts', [App\Http\Controllers\ProductController::class,'view'])->name('viewProduct');

Route::post('/products', [App\Http\Controllers\ProductController::class, 'searchProduct'])->name('search.product');

Route::get('/editProduct/{id}', [App\Http\Controllers\ProductController::class,'edit'])->name('editProduct');
Route::post('/updateProduct', [App\Http\Controllers\ProductController::class,'update'])->name('updateProduct');

Route::get('/viewDetail/{id}', [App\Http\Controllers\ProductController::class,'productDetail'])->name('viewDetail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

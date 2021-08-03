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

Route::get('/insertRoom', function() {
    return view("insertRoom");
});

Route::get('/rooms', [App\Http\Controllers\RoomController::class, 'viewAll'])->name('Room');

Route::post('/insertRoom/store', [App\Http\Controllers\RoomController::class,'store'])->name('addRoom');
Route::get('/viewRooms', [App\Http\Controllers\RoomController::class,'view'])->name('viewRoom');

Route::post('/searchRoom', [App\Http\Controllers\RoomController::class, 'searchRoom'])->name('search.room');

Route::get('/editRoom/{id}', [App\Http\Controllers\RoomController::class,'edit'])->name('editRoom');
Route::post('/updateProduct', [App\Http\Controllers\RoomController::class,'update'])->name('updateRoom');

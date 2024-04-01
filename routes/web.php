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

Route::get('/', function () {
    return view('welcome');
});



// Menampilkan Saja
Route::view('/header', 'header');
Route::view('/entitas', 'entitas');
Route::view('/dokumen', 'dokumenpen');
Route::view('/pengangkut', 'pengangkut');
Route::view('/kemasan', 'kemasan');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;

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

Route::get('/login', [AkunController::class, 'index']);

Route::post('/login', [AkunController::class, 'login']);

// Menampilkan Saja
Route::view('/header', 'header');
Route::view('/entitas', 'entitas');
Route::view('/dokumen', 'dokumenpen');
Route::view('/pengangkut', 'pengangkut');
Route::view('/kemasan', 'kemasan');
Route::view('/transaksi', 'transaksi');
Route::view('/barang', 'barang');
Route::view('/pungutan', 'pungutan');
Route::view('/pernyataan','pernyataan');

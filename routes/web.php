<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\PengeksporController;
use App\Http\Controllers\DokumenController;

Route::get('/', [AkunController::class, 'index'])->name('login');

Route::post('/', [AkunController::class, 'login']);

Route::post('/layout/popuplogout', [AkunController::class, 'logout'])->name('logout');

Route::post('/sesi/registrasi', [PengeksporController::class,'regis'])->name('reg');

Route::view('/regis','sesi/Registrasi');

Route::get('akun/login', [AkunController::class, 'login'])->name('new.login');

Route::view('/profile','pengekspor/profile');

Route::view('/log','sesi/login');

Route::view('daftar','pengekspor/daftardok');

Route::post('layout/popupdafdok', [DokumenController::class, 'tambahDok'])->name('tambahdok');

Route::view('/header', 'pengekspor/header')->name('header');

// Menampilkan Saja

Route::view('/entitas', 'entitas');
Route::view('/dokumen', 'dokumenpen');
Route::view('/pengangkut', 'pengangkut');
Route::view('/kemasan', 'kemasan');
Route::view('/transaksi', 'transaksi');
Route::view('/barang', 'barang');
Route::view('/pungutan', 'pungutan');
Route::view('/pernyataan','pernyataan');

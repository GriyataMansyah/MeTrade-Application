<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PengeksporController;

Route::get('', [AkunController::class, 'index'])->name('login');

Route::post('login', [AkunController::class, 'login'])->name('cobalogin');

Route::get('layout/popuplogout', [AkunController::class, 'logout'])->name('logout');

Route::post('/sesi/registrasi', [PengeksporController::class,'regis'])->name('reg');

Route::view('/regis','sesi/Registrasi');

Route::get('akun/login', [AkunController::class, 'login'])->name('new.login');

Route::view('/profile','pengekspor/profile');

Route::view('/log','sesi/login');

Route::match(['get', 'post'],'Dokumens', [DokumenController::class, 'dokumens']);

Route::view('layout/popupdafdok','layout/popupdafdok')->name('tambahdokumen');

Route::match(['get', 'post'],'tambahdokumen', [DokumenController::class, 'tambahDok'])->name('tambahdok');

Route::view('/header', 'pengekspor/header')->name('header');

// Route::get('layout/popuplogout', [AkunController::class, 'showName']);------

Route::view('/entitas', 'pengekspor/entitas')->name("entitas");

Route::post('header', [HeaderController::class, 'tambah']);
// Menampilkan Saja


Route::view('/dokumen', 'dokumenpen');
Route::view('/pengangkut', 'pengangkut');
Route::view('/kemasan', 'kemasan');
Route::view('/transaksi', 'transaksi');
Route::view('/barang', 'barang');
Route::view('/pungutan', 'pungutan');
Route::view('/pernyataan','pernyataan');

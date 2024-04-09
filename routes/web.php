<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\EntitasController;
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

Route::view('/header1', 'pengekspor/header');

Route::view('/header', 'pengekspor/header')->name('header');

Route::post('header', [HeaderController::class, 'tambah']);

Route::view('/entitas', 'pengekspor/entitas')->name('entitas');

Route::post('entitas', [EntitasController::class, 'tambah']);

Route::view('/dokumenpen1', 'pengekspor/dokumenpen')->name("dokumenpen");

Route::view('/pengangkut1', 'pengekspor/pengangkut');

Route::view('/kemasan1', 'pengekspor/kemasan');

Route::view('/transaksi1', 'pengekspor/transaksi');

Route::view('/barang1', 'pengekspor/barang');

Route::view('/pungutan1', 'pengekspor/pungutan');

Route::view('/pernyataan1','pengekspor/pernyataan');

Route::post('layout/popupbadanentitas', [PemilikBarangController::class, 'tambahPemilik']);

// Menampilkan Saja

Route::view('1', 'petugas/datamaster');
Route::view('/dokumen', 'dokumenpen');


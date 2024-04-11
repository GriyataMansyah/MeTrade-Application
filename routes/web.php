<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\EntitasController;
use App\Http\Controllers\PengeksporController;
use App\Http\Controllers\DataPengangkutController;
use App\Http\Controllers\DokumenPendukungController;


Route::get('', [AkunController::class, 'index'])->name('login');

Route::post('login', [AkunController::class, 'login'])->name('cobalogin');

Route::get('layout/popuplogout', [AkunController::class, 'logout'])->name('logout');

Route::post('/sesi/registrasi', [PengeksporController::class,'regis'])->name('reg');

Route::view('/regis','sesi/Registrasi');

Route::get('akun/login', [AkunController::class, 'login'])->name('new.login');

Route::view('/profile','pengekspor/profile');

Route::view('/log','sesi/login');

Route::match(['get', 'post'],'Dokumens', [DokumenController::class, 'dokumens'])->name("dokumens");

Route::view('layout/popupdafdok','layout/popupdafdok')->name('tambahdokumen');

Route::match(['get', 'post'],'tambahdokumen', [DokumenController::class, 'tambahDok'])->name('tambahdok');

Route::view('/header1', 'pengekspor/header');

Route::view('/header', 'pengekspor/header')->name('header');

Route::post('header', [HeaderController::class, 'tambah']);

Route::view('popuppengangkut', 'layout/popuppengangkut')->name("poppengangkut");

Route::post('poppengangkut', [DataPengangkutController::class, 'tambahpengangkut'])->name('tambahpengangkut1');

Route::delete('pengekspor/Pengangkut/{seri}', [DataPengangkutController::class, 'hapus'])->name('hapusseri');

Route::post('layout/popupdokumenpen', [DokumenPendukungController::class, 'tambah'])->name('tambahdokumenpendukung');

Route::view('/entitas', 'pengekspor/entitas')->name('entitas');

Route::post('entitas', [EntitasController::class, 'tambah']);

Route::view('/popupbadanentitas', 'layout/popupbadanentitas')->name('badanentitas');

Route::post('badanentitas', [EntitasController::class, 'tambahPemilik']);

Route::view('/pengangkut1', 'pengekspor/Pengangkut')->name("pengangkut");

Route::post('pengangkut', [DataPengangkutController::class, 'tambah'])->name("tambahpengangkut");

Route::delete('entitas/{seri}', [EntitasController::class, 'destroy'])->name('hapus.pemilik');

Route::delete('pengekspor/daftardok/{id}', [DokumenController::class, 'destroy'])->name('hapus.dokumen');

Route::delete('pengekspor/dokumenpen/{id}', [DokumenPendukungController::class, 'destroy'])->name('hapus.dokumenpen');

Route::view('/dokumenpen1', 'pengekspor/dokumenpen')->name("dokumenpen");

Route::view('/kemasan1', 'pengekspor/kemasan')->name("kemasan");

Route::view('/transaksi1', 'pengekspor/transaksi');

Route::view('/barang1', 'pengekspor/barang');

Route::view('/pungutan1', 'pengekspor/pungutan');

Route::view('/pernyataan1','pengekspor/pernyataan');

// Menampilkan Saja

Route::view('1', 'petugas/datamaster');
Route::view('/dokumen', 'dokumenpen');


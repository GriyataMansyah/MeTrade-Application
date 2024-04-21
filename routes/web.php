<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\EntitasController;
use App\Http\Controllers\KemasanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengeksporController;
use App\Http\Controllers\PernyataanController;
use App\Http\Controllers\DataPengangkutController;
use App\Http\Controllers\DokumenPendukungController;


Route::get('', [AkunController::class, 'index'])->name('login');

Route::post('login', [AkunController::class, 'login'])->name('cobalogin');

Route::get('layout/popuplogout', [AkunController::class, 'logout'])->name('logout');

Route::post('/sesi/registrasi', [PengeksporController::class,'regis'])->name('reg');

Route::view('/regis','sesi/Registrasi');

Route::get('akun/login', [AkunController::class, 'login'])->name('new.login');

Route::view('/profile','pengekspor/profile')->name("profile");

Route::post('layout/profilepopupemail', [PengeksporController::class, 'gantiemail'])->name('gantiemail');

Route::post('layout/profilepopupphone', [PengeksporController::class, 'gantiphone'])->name('gantiphone');

Route::post('layout/profilepopuppassword', [PengeksporController::class, 'gantipass'])->name('gantipass');

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

Route::view('popupkemasan', 'layout/popupkemasan')->name("popupkemasan");

Route::post('popupkemasan/tambahkemasan', [KemasanController::class, 'tambahkemasan'])->name("tambahkemasan");

Route::delete('pengekspor/kemasan/{seri}', [KemasanController::class, 'hapus'])->name('hapusaja');

Route::post('popupkemasan/tambahpetikemas', [KemasanController::class, 'tambahpetikemas'])->name("tambahcok");

Route::delete('pengekspor/kemasan-petikemas/{seri}', [KemasanController::class, 'hapuspetikemas'])->name('hapuscok');

Route::delete('entitas/{seri}', [EntitasController::class, 'destroy'])->name('hapus.pemilik');

Route::delete('pengekspor/daftardok/{id}', [DokumenController::class, 'destroy'])->name('hapus.dokumen');

Route::delete('pengekspor/dokumenpen/{id}', [DokumenPendukungController::class, 'destroy'])->name('hapus.dokumenpen');

Route::post('pengekspor/Transaksi', [TransaksiController::class, 'tambahtransaksi'])->name("tambahtransaksi");

Route::post('layout/popuptransaksi', [TransaksiController::class, 'tambahbank'])->name("tambahbank");

Route::delete('pengekspor/transaksi/{seri}', [TransaksiController::class, 'hapusbank'])->name('hapusbank');

Route::view('/popupbarang', 'layout/popupbarang')->name('popupbarang');

Route::post('popupbarang/tambahlartas', [BarangController::class, 'tambahlartas'])->name("tambahlartas");

Route::delete('pengekspor/barang/{seri}', [BarangController::class, 'hapuslartas'])->name('hapuslartas');

Route::post('popupbarang/tambahentitas', [BarangController::class, 'tambahentitas'])->name("tambahentitas");

Route::delete('pengekspor/barang/delete/{seri}', [BarangController::class, 'hapusentitas'])->name('hapusentitas');

Route::view('/barang1', 'pengekspor/barang')->name('barang1');

Route::post('/barang1', [BarangController::class, 'tambahbarang'])->name("tambahbarang");

Route::view('/pernyataan1','pengekspor/pernyataan')->name("pernyataan");

Route::post('pernyataan', [PernyataanController::class, 'tambahpernyataan'])->name("tambahpernyataan");

Route::view('/dokumenpen1', 'pengekspor/dokumenpen')->name("dokumenpen");

Route::view('/kemasan1', 'pengekspor/kemasan')->name("kemasan");

Route::view('/transaksi1', 'pengekspor/transaksi')->name('transaksi');

Route::view('/pungutan1', 'pengekspor/pungutan')->name('pungutan');

Route::view('/P','pengekspor/PERCOBAAN');

Route::view('/editheader','pengekspor/edit/header')->name("headerv2");

Route::post('editheader/{id}', [HeaderController::class, 'headerupdate'])->name("editheader");

Route::post('headerv2', [HeaderController::class, 'updatedata']);

Route::view('/editentitas','pengekspor/edit/entitas')->name("entitasv2");

Route::post('pengekspor/edit/entitas', [HeaderController::class, 'headerupdatedata'])->name("headerupdatedata");

Route::view('/editdokumenpen','pengekspor/edit/dokumenpen')->name("dokumenpenv2");

Route::view('/editpengangkut','pengekspor/edit/Pengangkut')->name("angkutv2");

Route::view('/editkemasan','pengekspor/edit/kemasan')->name("kemasanv2");

Route::view('/edittransaksi','pengekspor/edit/transaksi')->name("transaksiv2");

Route::view('/editbarang','pengekspor/edit/barang')->name("barangv2");

Route::view('/editpungutan','pengekspor/edit/pungutan')->name("pungutanv2");

Route::view('/editpernyataan','pengekspor/edit/pernyataan')->name("pernyataanv2");






// Menampilkan Saja

Route::view('1', 'petugas/datamaster');
Route::view('/dokumen', 'dokumenpen');


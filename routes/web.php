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

Route::view('/php', 'pengekspor/header');

Route::view('/header', 'pengekspor/header')->name('header');

Route::post('header', [HeaderController::class, 'tambah']);

Route::view('popuppengangkut', 'layout/popuppengangkut')->name("poppengangkut");

Route::post('poppengangkut', [DataPengangkutController::class, 'tambahpengangkut'])->name('tambahpengangkut1');

Route::delete('pengekspor/Pengangkut/{seri}', [DataPengangkutController::class, 'hapus'])->name('hapusseri');

Route::delete('pengekspor/editpengangkut/{seri}', [DataPengangkutController::class, 'hapus2'])->name('hapusseri2');

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

Route::delete('pengekspor/editkemasan/{seri}', [KemasanController::class, 'hapus2'])->name('hapusaja2');

Route::post('popupkemasan/tambahpetikemas', [KemasanController::class, 'tambahpetikemas'])->name("tambahcok");

Route::delete('pengekspor/kemasan-petikemas/{seri}', [KemasanController::class, 'hapuspetikemas'])->name('hapuscok');

Route::delete('pengekspor/editkemasan-petikemas/{seri}', [KemasanController::class, 'hapuspetikemas2'])->name('hapuscok2');

Route::delete('entitas/{seri}', [EntitasController::class, 'destroy'])->name('hapus.pemilik');

Route::delete('editentitas/{seri}', [EntitasController::class, 'destroy2'])->name('hapus.pemilik2');

Route::delete('pengekspor/daftardok/{id}', [DokumenController::class, 'destroy'])->name('hapus.dokumen');

Route::delete('pengekspor/dokumenpen/{id}', [DokumenPendukungController::class, 'destroy'])->name('hapus.dokumenpen');

Route::delete('pengekspor/editdokumenpen/{id}', [DokumenPendukungController::class, 'destroy2'])->name('hapus.dokumenpen2');

Route::post('pengekspor/Transaksi', [TransaksiController::class, 'tambahtransaksi'])->name("tambahtransaksi");

Route::post('pengekspor/edittransaksi', [TransaksiController::class, 'tambahtransaksi2'])->name("tambahtransaksi2");

Route::post('layout/popuptransaksi', [TransaksiController::class, 'tambahbank'])->name("tambahbank");

Route::post('layout/editpopuptransaksi', [TransaksiController::class, 'tambahbank2'])->name("tambahbank2");

Route::delete('pengekspor/transaksi/{seri}', [TransaksiController::class, 'hapusbank'])->name('hapusbank');

Route::delete('pengekspor/edittransaksi/{seri}', [TransaksiController::class, 'hapusbank2'])->name('hapusbank2');

Route::view('/popupbarang', 'layout/popupbarang')->name('popupbarang');

Route::post('popupbarang/tambahlartas', [BarangController::class, 'tambahlartas'])->name("tambahlartas");

Route::delete('pengekspor/barang/{seri}', [BarangController::class, 'hapuslartas'])->name('hapuslartas');

Route::post('popupbarang/tambahentitas', [BarangController::class, 'tambahentitas'])->name("tambahentitas");

Route::delete('pengekspor/barang/delete/{seri}', [BarangController::class, 'hapusentitas'])->name('hapusentitas');

Route::view('/barang1', 'pengekspor/barang')->name('barang1');

Route::post('/barang1', [BarangController::class, 'tambahbarang'])->name("tambahbarang");

Route::post('/editbarang', [BarangController::class, 'tambahbarang2'])->name("tambahbarang2");

Route::view('/pernyataan1','pengekspor/pernyataan')->name("pernyataan");

Route::post('pernyataan', [PernyataanController::class, 'tambahpernyataan'])->name("tambahpernyataan");

Route::post('/editpernyataan', [PernyataanController::class, 'tambahpernyataan2'])->name("tambahpernyataan2");

Route::view('/dokumenpen1', 'pengekspor/dokumenpen')->name("dokumenpen");

Route::view('/kemasan1', 'pengekspor/kemasan')->name("kemasan");

Route::view('/transaksi1', 'pengekspor/transaksi')->name('transaksi');

Route::view('/pungutan1', 'pengekspor/pungutan')->name('pungutan');

Route::view('/P','pengekspor/PERCOBAAN');

//Menuju Ke Edit Dokumen (Header)
Route::post('editheader/{id}', [HeaderController::class, 'headerupdate'])->name("editheader");

//Menuju Ke Edit Entitas
Route::post('/editdata/entitas', [HeaderController::class, 'headerupdatedata'])->name("headerupdatedata");

//NAMBAH Ke Table Di Entitas (Modif)
Route::post('/editdata/modif/entitas', [EntitasController::class, 'modifentitas'])->name("modifentitas");

//Menuju Ke Edit Dokumen Pendukung
Route::post('/editdata/dokumenpen', [EntitasController::class, 'entitasupdatedata'])->name("entitasupdatedata");

//NAMBAH Ke Table Di DokumenPen (Modif)
Route::post('/editdata/modif/dokumenpen', [DokumenPendukungController::class, 'modifdokumenpen'])->name("modifdokumenpen");

//NAMBAH Ke Table Di Angkutan (Modif)
Route::post('/editdata/modif/angkutan', [DataPengangkutController::class, 'modifangkutan'])->name("modifangkutan");

//NAMBAH Ke Table Di KEMASAN (Modif)
Route::post('/editdata/modif/kemasan', [KemasanController::class, 'modifkemasan'])->name("modifkemasan");

//NAMBAH Ke Table Di KEMASAN (Modif)
Route::post('/editdata/modif/petikemas', [KemasanController::class, 'modifpetikemas'])->name("modifpetikemas");

//Menuju Ke Edit Kemasan
Route::post('/editdata/Kemasan', [DataPengangkutController::class, 'editangkutan'])->name("editangkut2");

//OTW 
Route::view('/editdata/header', 'pengekspor/edit/header')->name('editheader2');
Route::view('/editdata/entitas', 'pengekspor/edit/entitas')->name('editentitas');
Route::view('/editdata/dokumenpen', 'pengekspor/edit/dokumenpen')->name('editdokumenpen');
Route::view('/editdata/angkutan', 'pengekspor/edit/Pengangkut')->name('editangkut');
Route::view('/editdata/kemasan', 'pengekspor/edit/kemasan')->name('editkemasan');
Route::view('/editdata/transaksi', 'pengekspor/edit/transaksi')->name('edittransaksi');
Route::view('/editdata/barang', 'pengekspor/edit/barang')->name('editbarang');
Route::view('/editdata/pungutan', 'pengekspor/edit/pungutan')->name('editpungutan');
Route::view('/editdata/pernyataan', 'pengekspor/edit/pernyataan')->name('editpernyataan');

// Route::view('/editheader','pengekspor/edit/header')->name("headerv2");

// Route::post('headerv2', [HeaderController::class, 'updatedata']);

// Route::view('/editentitas','pengekspor/edit/entitas')->name("entitasv2");

// Route::get('/entitas-update', [HeaderController::class, 'tampilkanentitas'])->name("tampilkanentitas");

// Route::get('/dokumenpen-update', [EntitasController::class, 'tampilkandokumenpen'])->name("tampilkandokumenpen");

// Route::view('/editdokumenpen','pengekspor/edit/dokumenpen')->name("dokumenpenv2");

// Route::view('/editpengangkut','pengekspor/edit/Pengangkut')->name("angkutv2");

// Route::view('/editkemasan','pengekspor/edit/kemasan')->name("kemasanv2");

// Route::view('/edittransaksi','pengekspor/edit/transaksi')->name("transaksiv2");

// Route::view('/editbarang','pengekspor/edit/barang')->name("barangv2");

// Route::view('/editpungutan','pengekspor/edit/pungutan')->name("pungutanv2");

// Route::view('/editpernyataan','pengekspor/edit/pernyataan')->name("pernyataanv2");








// Menampilkan Saja

Route::view('1', 'petugas/datamaster');
Route::view('/dokumen', 'dokumenpen');
Route::view('/output', '/pengekspor/output')->name('output');


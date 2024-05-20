<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\EntitasController;
use App\Http\Controllers\KemasanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengeksporController;
use App\Http\Controllers\PernyataanController;
use App\Http\Controllers\DataPengangkutController;
use App\Http\Controllers\DokumenPendukungController;

// ->middleware('protect.route')

Route::get('', [AkunController::class, 'tampilkanHalamanLogin'])->name('login');

Route::post('login', [AkunController::class, 'login'])->name('cobalogin');

Route::get('layout/popuplogout', [AkunController::class, 'logout'])->name('logout');

Route::post('/sesi/registrasi', [PengeksporController::class,'registrasi'])->name('reg');

Route::view('/regis','sesi/Registrasi');

Route::get('akun/login', [AkunController::class, 'login'])->name('new.login');

Route::view('/profile','pengekspor/profile')->name("profile");

Route::post('layout/profilepopupemail', [PengeksporController::class, 'gantiemail'])->name('gantiemail');

Route::post('layout/profilepopupphone', [PengeksporController::class, 'gantiNomorHp'])->name('gantiphone');

Route::post('layout/profilepopuppassword', [PengeksporController::class, 'gantiPassword'])->name('gantipass');

Route::view('/log','sesi/login');

Route::match(['get', 'post'],'Dokumens', [DokumenController::class, 'tampilkanDaftarDokumen'])->name("dokumens");

Route::view('layout/popupdafdok','layout/popupdafdok')->name('tambahdokumen');

Route::match(['get', 'post'],'tambahdokumen', [DokumenController::class, 'tambahDokumen'])->name('tambahdok');

Route::view('/php', 'pengekspor/header');

Route::view('/header', 'pengekspor/header')->name('header');

Route::post('header', [HeaderController::class, 'tambahDataHeader']);

Route::view('popuppengangkut', 'layout/popuppengangkut')->name("poppengangkut");

Route::post('poppengangkut', [DataPengangkutController::class, 'tambahSaranaAngkut'])->name('tambahpengangkut1');

Route::delete('pengekspor/Pengangkut/{seri}', [DataPengangkutController::class, 'hapus'])->name('hapusseri');

Route::delete('pengekspor/editpengangkut/{seri}', [DataPengangkutController::class, 'hapusSaranaAngkut'])->name('hapusseri2');

Route::post('layout/popupdokumenpen', [DokumenPendukungController::class, 'tambahDokumenPendukung'])->name('tambahdokumenpendukung');

Route::view('/entitas', 'pengekspor/entitas')->name('entitas');

Route::post('entitas', [EntitasController::class, 'tambahDataEntitas']);

Route::view('/popupbadanentitas', 'layout/popupbadanentitas')->name('badanentitas');

Route::post('badanentitas', [EntitasController::class, 'tambahDataPemilik']);

Route::view('/pengangkut1', 'pengekspor/Pengangkut')->name("pengangkut");

Route::post('pengangkut', [DataPengangkutController::class, 'tambahDataPengangkut'])->name("tambahpengangkut");

Route::view('popupkemasan', 'layout/popupkemasan')->name("popupkemasan");

Route::post('popupkemasan/tambahkemasan', [KemasanController::class, 'tambahkemasan'])->name("tambahkemasan");

Route::delete('pengekspor/kemasan/{seri}', [KemasanController::class, 'hapusKemasan'])->name('hapusaja');

Route::delete('pengekspor/editkemasan/{seri}', [KemasanController::class, 'hapusEditKemasan'])->name('hapusaja2');

Route::post('popupkemasan/tambahpetikemas', [KemasanController::class, 'tambahpetikemas'])->name("tambahcok");

Route::delete('pengekspor/kemasan-petikemas/{seri}', [KemasanController::class, 'hapuspetikemas'])->name('hapuscok');

Route::delete('pengekspor/editkemasan-petikemas/{seri}', [KemasanController::class, 'hapusEditPetiKemas'])->name('hapuscok2');

Route::delete('entitas/{seri}', [EntitasController::class, 'hapusDataPemilik'])->name('hapus.pemilik');

Route::delete('editentitas/{seri}', [EntitasController::class, 'hapusEditDataPemilik'])->name('hapus.pemilik2');

Route::delete('pengekspor/daftardok/{id}', [DokumenController::class, 'hapusDokumen'])->name('hapus.dokumen');

Route::delete('pengekspor/dokumenpen/{id}', [DokumenPendukungController::class, 'hapusDokumenPendukung'])->name('hapus.dokumenpen');

Route::delete('pengekspor/editdokumenpen/{id}', [DokumenPendukungController::class, 'hapusEditDokumenPendukung'])->name('hapus.dokumenpen2');

Route::post('pengekspor/Transaksi', [TransaksiController::class, 'tambahtransaksi'])->name("tambahtransaksi");

Route::post('pengekspor/edittransaksi', [TransaksiController::class, 'tambahEditTransaksi'])->name("tambahtransaksi2");

Route::post('layout/popuptransaksi', [TransaksiController::class, 'tambahbank'])->name("tambahbank");

Route::post('layout/editpopuptransaksi', [TransaksiController::class, 'tambahEditBank'])->name("tambahbank2");

Route::delete('pengekspor/transaksi/{seri}', [TransaksiController::class, 'hapusbank'])->name('hapusbank');

Route::delete('pengekspor/edittransaksi/{seri}', [TransaksiController::class, 'hapusEditBank'])->name('hapusbank2');

Route::view('/popupbarang', 'layout/popupbarang')->name('popupbarang');

Route::post('popupbarang/tambahlartas', [BarangController::class, 'tambahlartas'])->name("tambahlartas");

Route::delete('pengekspor/barang/{seri}', [BarangController::class, 'hapuslartas'])->name('hapuslartas');

Route::post('popupbarang/tambahentitas', [BarangController::class, 'tambahentitas'])->name("tambahentitas");

Route::delete('pengekspor/barang/delete/{seri}', [BarangController::class, 'hapusentitas'])->name('hapusentitas');

Route::view('/barang1', 'pengekspor/barang')->name('barang1');

Route::post('/barang1', [BarangController::class, 'tambahbarang'])->name("tambahbarang");

Route::post('/editbarang', [BarangController::class, 'editBarang'])->name("tambahbarang2");

Route::view('/pernyataan1','pengekspor/pernyataan')->name("pernyataan");

Route::post('pernyataan', [PernyataanController::class, 'tambahpernyataan'])->name("tambahpernyataan");

Route::post('/editpernyataan', [PernyataanController::class, 'tambahEditPernyataan'])->name("tambahpernyataan2");

Route::view('/dokumenpen1', 'pengekspor/dokumenpen')->name("dokumenpen");

Route::view('/kemasan1', 'pengekspor/kemasan')->name("kemasan");

Route::view('/transaksi1', 'pengekspor/transaksi')->name('transaksi');

Route::view('/pungutan1', 'pengekspor/pungutan')->name('pungutan');

Route::view('/P','pengekspor/PERCOBAAN');

//Menuju Ke Edit Dokumen (Header)
Route::post('editheader/{id}', [HeaderController::class, 'tampilkanEditDataHeader'])->name("editheader");

//Menuju Ke Edit Entitas
Route::post('/editdata/entitas', [HeaderController::class, 'editDataHeader'])->name("headerupdatedata");

//NAMBAH Ke Table Di Entitas (Modif)
Route::post('/editdata/modif/entitas', [EntitasController::class, 'editDataPemilik'])->name("modifentitas");

//Menuju Ke Edit Dokumen Pendukung
Route::post('/editdata/dokumenpen', [EntitasController::class, 'editDataEntitas'])->name("entitasupdatedata");

//NAMBAH Ke Table Di DokumenPen (Modif)
Route::post('/editdata/modif/dokumenpen', [DokumenPendukungController::class, 'editDokumenPendukung'])->name("modifdokumenpen");

//NAMBAH Ke Table Di Angkutan (Modif)
Route::post('/editdata/modif/angkutan', [DataPengangkutController::class, 'editSaranaAngkut'])->name("modifangkutan");

//NAMBAH Ke Table Di KEMASAN (Modif)
Route::post('/editdata/modif/kemasan', [KemasanController::class, 'editKemasan'])->name("modifkemasan");

//NAMBAH Ke Table Di KEMASAN (Modif)
Route::post('/editdata/modif/petikemas', [KemasanController::class, 'editPetiKemas'])->name("modifpetikemas");

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

Route::view('/petugas/dataMaster', 'petugas/dataMastermas')->name('dataMaster');

Route::view('/petugas/dataMasterHeader', 'petugas/dataMasterHeader')->name('dataMasterHeader');

Route::view('/petugas/dataMasterBarang', 'petugas/dataMasterBarang')->name('dataMasterBarang');

Route::view('/petugas/dataMasterTransaksi', 'petugas/dataMasterTransaksi')->name('dataMasterTransaksi');

Route::view('/petugas/dataMasterPengangkut', 'petugas/dataMasterPengangkut')->name('dataMasterPengangkut');

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

Route::post('/edit/tambahdata/kantorpabeanmuatasal', [PetugasController::class, 'tambahKantorPabeanMuatAsal'])->name("tambahKantorPabeanMuatAsal");

Route::post('/edit/hapusdata/kantorpabeanmuatasal', [PetugasController::class, 'hapusKantorPabeanMuatAsal'])->name("hapusKantorPabeanMuatAsal");

Route::post('/edit/tambahdata/PelabuhanMuatEkspor', [PetugasController::class, 'tambahPelabuhanMuatEkspor'])->name("tambahPelabuhanMuatEkspor");

Route::post('/edit/hapusdata/PelabuhanMuatEkspor', [PetugasController::class, 'hapusPelabuhanMuatEkspor'])->name("hapusPelabuhanMuatEkspor");

Route::post('/edit/tambahdata/JenisEkspor', [PetugasController::class, 'tambahJenisEkspor'])->name("tambahJenisEkspor");

Route::post('/edit/hapusdata/JenisEkspor', [PetugasController::class, 'hapusJenisEkspor'])->name("hapusJenisEkspor");

Route::post('/edit/tambahdata/KategoriEkspor', [PetugasController::class, 'tambahKategoriEkspor'])->name("tambahKategoriEkspor");

Route::post('/edit/hapusdata/KategoriEkspor', [PetugasController::class, 'hapusKategoriEkspor'])->name("hapusKategoriEkspor");

Route::post('/edit/tambahdata/CaraDagang', [PetugasController::class, 'tambahCaraDagang'])->name("tambahCaraDagang");

Route::post('/edit/hapusdata/CaraDagang', [PetugasController::class, 'hapusCaraDagang'])->name("hapusCaraDagang");

Route::post('/edit/tambahdata/CaraBayar', [PetugasController::class, 'tambahCaraBayar'])->name("tambahCaraBayar");

Route::post('/edit/hapusdata/CaraBayar', [PetugasController::class, 'hapusCaraBayar'])->name("hapusCaraBayar");

Route::post('/edit/tambahdata/Komoditi', [PetugasController::class, 'tambahKomoditi'])->name("tambahKomoditi");

Route::post('/edit/hapusdata/Komoditi', [PetugasController::class, 'hapusKomoditi'])->name("hapusKomoditi");

Route::post('/edit/tambahdata/Curah', [PetugasController::class, 'tambahCurah'])->name("tambahCurah");

Route::post('/edit/hapusdata/Curah', [PetugasController::class, 'hapusCurah'])->name("hapusCurah");

Route::post('/edit/tambahdata/TempatPenimbunan', [PetugasController::class, 'tambahTempatPenimbunan'])->name("tambahTempatPenimbunan");

Route::post('/edit/hapusdata/TempatPenimbunan', [PetugasController::class, 'hapusTempatPenimbunan'])->name("hapusTempatPenimbunan");

Route::post('/edit/tambahdata/PelabuhanMuatAsal', [PetugasController::class, 'tambahPelabuhanMuatAsal'])->name("tambahPelabuhanMuatAsal");

Route::post('/edit/hapusdata/PelabuhanMuatAsal', [PetugasController::class, 'hapusPelabuhanMuatAsal'])->name("hapusPelabuhanMuatAsal");

Route::post('/edit/tambahdata/PelabuhanBongkar', [PetugasController::class, 'tambahPelabuhanBongkar'])->name("tambahPelabuhanBongkar");

Route::post('/edit/hapusdata/PelabuhanBongkar', [PetugasController::class, 'hapusPelabuhanBongkar'])->name("hapusPelabuhanBongkar");

Route::post('/edit/tambahdata/PelabuhanTujuan', [PetugasController::class, 'tambahPelabuhanTujuan'])->name("tambahPelabuhanTujuan");

Route::post('/edit/hapusdata/PelabuhanTujuan', [PetugasController::class, 'hapusPelabuhanTujuan'])->name("hapusPelabuhanTujuan");

Route::post('/edit/tambahdata/LokasiPemeriksaaan', [PetugasController::class, 'tambahLokasiPemeriksaan'])->name("tambahLokasiPemeriksaan");

Route::post('/edit/hapusdata/LokasiPemeriksaaan', [PetugasController::class, 'hapusLokasiPemeriksaan'])->name("hapusLokasiPemeriksaan");

Route::post('/edit/tambahdata/Valuta', [PetugasController::class, 'tambahValuta'])->name("tambahValuta");

Route::post('/edit/hapusdata/Valuta', [PetugasController::class, 'hapusValuta'])->name("hapusValuta");

Route::post('/edit/tambahdata/CaraPenyerahan', [PetugasController::class, 'tambahCaraPenyerahan'])->name("tambahCaraPenyerahan");

Route::post('/edit/hapusdata/CaraPenyerahan', [PetugasController::class, 'hapusCaraPenyerahan'])->name("hapusCaraPenyerahan");

Route::post('/edit/tambahdata/Asuransi', [PetugasController::class, 'tambahAsuransi'])->name("tambahAsuransi");

Route::post('/edit/hapusdata/Asuransi', [PetugasController::class, 'hapusAsuransi'])->name("hapusAsuransi");

Route::post('/edit/tambahdata/HS', [PetugasController::class, 'tambahHS'])->name("tambahHS");

Route::post('/edit/hapusdata/HS', [PetugasController::class, 'hapusHS'])->name("hapusHS");

Route::post('/edit/tambahdata/Lartas', [PetugasController::class, 'tambahLartas'])->name("tambahLartas");

Route::post('/edit/hapusdata/Lartas', [PetugasController::class, 'hapusLartas'])->name("hapusLartas");

Route::post('/edit/tambahdata/KodeSatuan', [PetugasController::class, 'tambahKodeSatuan'])->name("tambahKodeSatuan");

Route::post('/edit/hapusdata/KodeSatuan', [PetugasController::class, 'hapusKodeSatuan'])->name("hapusKodeSatuan");

Route::post('/edit/tambahdata/KodeKemasan', [PetugasController::class, 'tambahKodeKemasan'])->name("tambahKodeKemasan");

Route::post('/edit/hapusdata/KodeKemasan', [PetugasController::class, 'hapusKodeKemasan'])->name("hapusKodeKemasan");

Route::post('/edit/ProfilePetugas/Email', [PetugasController::class, 'gantiemail'])->name("gantiemail");

Route::post('/edit/ProfilePetugas/NomorHP', [PetugasController::class, 'gantiNomorHp'])->name("gantiNomorHp2");

Route::post('/edit/ProfilePetugas/Password', [PetugasController::class, 'gantiPassword'])->name("gantiPassword2");











// Menampilkan Saja

Route::view('1', 'petugas/datamaster');
Route::view('/dokumen', 'dokumenpen');
Route::view('/output', '/pengekspor/output')->name('output');

Route::view('/petugas/profile', 'petugas/profile')->name('ProfilePetugas');


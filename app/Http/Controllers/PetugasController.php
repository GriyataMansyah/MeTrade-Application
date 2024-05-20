<?php

namespace App\Http\Controllers;

use App\Models\HS;
use App\Models\Akun;
use App\Models\Curah;
use App\Models\Valuta;
use App\Models\petugas;
use App\Models\Asuransi;
use App\Models\Komoditi;
use App\Models\CaraBayar;
use App\Models\KodeSatuan;
use App\Models\JenisDagang;
use App\Models\JenisEkspor;
use App\Models\Kodekemasan;
use Illuminate\Http\Request;
use App\Models\CaraPenyerahan;
use App\Models\KantorMuatAsal;
use App\Models\KategoriEkspor;
use App\Models\DataJenisLartas;
use App\Models\PelabuhanTujuan;
use App\Models\PelabuhanBongkar;
use App\Models\LokasiPemeriksaan;
use App\Models\PelabuhanMuatEkspor;
use App\Models\DataTempatPenimbunan;
use Illuminate\Support\Facades\Auth;
use App\Models\DataPelabuhanMuatAsal;
use Illuminate\Support\Facades\Session;

class PetugasController extends Controller
{

// ------------------------------- KANTOR PABEAN MUAT ASAL ----------------------------------
    public function tambahKantorPabeanMuatAsal(Request $request)
    {
        $request->validate([
            'tambahkantorpabeanmuatasal' => 'required',
        ]);
        
        $id_pengguna = Auth::id();
        $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
       
        $p = new KantorMuatAsal;
        $p->nama = $request->input('tambahkantorpabeanmuatasal');
        $p->id_data_master = $pengguna->id;
        $p->save();
              
        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('dataMasterHeader');  
    }

    public function hapusKantorPabeanMuatAsal(Request $request)
{
    $request->validate([
        'hapuskantorpabeanmuatasal' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapuskantorpabeanmuatasal');
    
    $kantorMuatAsal = KantorMuatAsal::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterHeader');
}


// ------------------------------- PELABUHAN MUAT EKSPOR ----------------------------------

    public function tambahPelabuhanMuatEkspor(Request $request)
{
    $request->validate([
        'tambahPelabuhanMuatEkspor' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new PelabuhanMuatEkspor;
    $p->nama = $request->input('tambahPelabuhanMuatEkspor');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterHeader');  
}

    public function hapusPelabuhanMuatEkspor(Request $request)
{
    $request->validate([
        'hapusPelabuhanMuatEkspor' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusPelabuhanMuatEkspor');
    
    $kantorMuatAsal = PelabuhanMuatEkspor::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterHeader');
}

// ------------------------------- JENIS EKSPOR ----------------------------------
public function tambahJenisEkspor(Request $request)
{
    $request->validate([
        'tambahJenisEkspor' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new JenisEkspor;
    $p->nama = $request->input('tambahJenisEkspor');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterHeader');  
}

    public function hapusJenisEkspor(Request $request)
{
    $request->validate([
        'hapusJenisEkspor' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusJenisEkspor');
    
    $kantorMuatAsal = JenisEkspor::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterHeader');
}

// ------------------------------- KATEGORI EKSPOR ----------------------------------
public function tambahKategoriEkspor(Request $request)
{
    $request->validate([
        'tambahKategoriEkspor' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new KategoriEkspor;
    $p->nama = $request->input('tambahKategoriEkspor');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterHeader');  
}

    public function hapusKategoriEkspor(Request $request)
{
    $request->validate([
        'hapusKategoriEkspor' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusKategoriEkspor');
    
    $kantorMuatAsal = KategoriEkspor::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterHeader');
}

// ------------------------------- CARA DAGANG ----------------------------------
public function tambahCaraDagang(Request $request)
{
    $request->validate([
        'tambahCaraDagang' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new JenisDagang;
    $p->nama = $request->input('tambahCaraDagang');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterHeader');  
}

    public function hapusCaraDagang(Request $request)
{
    $request->validate([
        'hapusCaraDagang' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusCaraDagang');
    
    $kantorMuatAsal = JenisDagang::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterHeader');
}

// ------------------------------- CARA BAYAR ----------------------------------
public function tambahCaraBayar(Request $request)
{
    $request->validate([
        'tambahCaraBayar' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new CaraBayar;
    $p->nama = $request->input('tambahCaraBayar');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterHeader');  
}

    public function hapusCaraBayar(Request $request)
{
    $request->validate([
        'hapusCaraBayar' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusCaraBayar');
    
    $kantorMuatAsal = CaraBayar::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterHeader');
}

// ------------------------------- KOMODITI ----------------------------------
public function tambahKomoditi(Request $request)
{
    $request->validate([
        'tambahKomoditi' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new Komoditi;
    $p->nama = $request->input('tambahKomoditi');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterHeader');  
}

    public function hapusKomoditi(Request $request)
{
    $request->validate([
        'hapusKomoditi' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusKomoditi');
    
    $kantorMuatAsal = Komoditi::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterHeader');
}

// ------------------------------- KOMODITI ----------------------------------
public function tambahCurah(Request $request)
{
    $request->validate([
        'tambahCurah' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new Curah;
    $p->nama = $request->input('tambahCurah');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterHeader');  
}

    public function hapusCurah(Request $request)
{
    $request->validate([
        'hapusCurah' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusCurah');
    
    $kantorMuatAsal = Curah::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterHeader');
}

// ------------------------------- TEMPAT PENIMBUNAN ----------------------------------
public function tambahTempatPenimbunan(Request $request)
{
    $request->validate([
        'tambahTempatPenimbunan' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new DataTempatPenimbunan;
    $p->nama = $request->input('tambahTempatPenimbunan');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterPengangkut');  
}

    public function hapusTempatPenimbunan(Request $request)
{
    $request->validate([
        'hapusTempatPenimbunan' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusTempatPenimbunan');
    
    $kantorMuatAsal = DataTempatPenimbunan::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterPengangkut');
}

// ------------------------------- PELABUHAN MUAT ASAL ----------------------------------
public function tambahPelabuhanMuatAsal(Request $request)
{
    $request->validate([
        'tambahPelabuhanMuatAsal' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new DataPelabuhanMuatAsal;
    $p->nama = $request->input('tambahPelabuhanMuatAsal');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterPengangkut');  
}

    public function hapusPelabuhanMuatAsal(Request $request)
{
    $request->validate([
        'hapusPelabuhanMuatAsal' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusPelabuhanMuatAsal');
    
    $kantorMuatAsal = DataPelabuhanMuatAsal::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterPengangkut');
}

// ------------------------------- PELABUHAN BONGKAR ----------------------------------
public function tambahPelabuhanBongkar(Request $request)
{
    $request->validate([
        'tambahPelabuhanBongkar' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new PelabuhanBongkar;
    $p->nama = $request->input('tambahPelabuhanBongkar');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterPengangkut');  
}

    public function hapusPelabuhanBongkar(Request $request)
{
    $request->validate([
        'hapusPelabuhanBongkar' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusPelabuhanBongkar');
    
    $kantorMuatAsal = PelabuhanBongkar::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterPengangkut');
}

// ------------------------------- PELABUHAN TUJUAN ----------------------------------
public function tambahPelabuhanTujuan(Request $request)
{
    $request->validate([
        'tambahPelabuhanTujuan' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new PelabuhanTujuan;
    $p->nama = $request->input('tambahPelabuhanTujuan');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterPengangkut');  
}

    public function hapusPelabuhanTujuan(Request $request)
{
    $request->validate([
        'hapusPelabuhanTujuan' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusPelabuhanTujuan');
    
    $kantorMuatAsal = PelabuhanTujuan::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterPengangkut');
}

// ------------------------------- LOKASI PEMERIKSAAN ----------------------------------
public function tambahLokasiPemeriksaan(Request $request)
{
    $request->validate([
        'tambahLokasiPemeriksaan' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new LokasiPemeriksaan;
    $p->nama = $request->input('tambahLokasiPemeriksaan');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterPengangkut');  
}

    public function hapusLokasiPemeriksaan(Request $request)
{
    $request->validate([
        'hapusLokasiPemeriksaan' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusLokasiPemeriksaan');
    
    $kantorMuatAsal = LokasiPemeriksaan::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterPengangkut');
}

// ------------------------------- VALUTA ----------------------------------
public function tambahValuta(Request $request)
{
    $request->validate([
        'tambahValuta' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new Valuta;
    $p->nama = $request->input('tambahValuta');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterTransaksi');  
}

    public function hapusValuta(Request $request)
{
    $request->validate([
        'hapusValuta' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusValuta');
    
    $kantorMuatAsal = Valuta::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterTransaksi');
}

// ------------------------------- CARA PENYERAHAN ----------------------------------
public function tambahCaraPenyerahan(Request $request)
{
    $request->validate([
        'tambahCaraPenyerahan' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new CaraPenyerahan;
    $p->nama = $request->input('tambahCaraPenyerahan');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterTransaksi');  
}

    public function hapusCaraPenyerahan(Request $request)
{
    $request->validate([
        'hapusCaraPenyerahan' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusCaraPenyerahan');
    
    $kantorMuatAsal = CaraPenyerahan::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterTransaksi');
}

// ------------------------------- ASURANSI ----------------------------------
public function tambahAsuransi(Request $request)
{
    $request->validate([
        'tambahAsuransi' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new Asuransi;
    $p->nama = $request->input('tambahAsuransi');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterTransaksi');  
}

    public function hapusAsuransi(Request $request)
{
    $request->validate([
        'hapusAsuransi' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusAsuransi');
    
    $kantorMuatAsal = Asuransi::where('nama', $namaKantorMuatAsal)->first();
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterHeader')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterTransaksi');
}

// ------------------------------- HS ----------------------------------
public function tambahHS(Request $request)
{
    $request->validate([
        'tambahHS' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new HS;
    $p->nama = $request->input('tambahHS');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterBarang');  
}

public function hapusHS(Request $request)
{
    $request->validate([
        'hapusHS' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusHS');
    
    $kantorMuatAsal = HS::where('nama', $namaKantorMuatAsal);
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterBarang')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->Delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterBarang');
}


// ------------------------------- Lartas ----------------------------------
public function tambahLartas(Request $request)
{
    $request->validate([
        'tambahLartas' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new DataJenisLartas;
    $p->nama = $request->input('tambahLartas');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterBarang');  
}

    public function hapusLartas(Request $request)
{
    $request->validate([
        'hapusLartas' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusLartas');
    
    $kantorMuatAsal = DataJenisLartas::where('nama', $namaKantorMuatAsal);
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterBarang')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterBarang');
}

// ------------------------------- KODE SATUAN ----------------------------------
public function tambahKodeSatuan(Request $request)
{
    $request->validate([
        'tambahKodeSatuan' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new KodeSatuan;
    $p->nama = $request->input('tambahKodeSatuan');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterBarang');  
}

    public function hapusKodeSatuan(Request $request)
{
    $request->validate([
        'hapusKodeSatuan' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusKodeSatuan');
    
    $kantorMuatAsal = KodeSatuan::where('nama', $namaKantorMuatAsal);
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterBarang')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterBarang');
}

// ------------------------------- KODE KEMASAN ----------------------------------
public function tambahKodeKemasan(Request $request)
{
    $request->validate([
        'tambahKodeKemasan' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first();
   
    $p = new Kodekemasan;
    $p->nama = $request->input('tambahKodeKemasan');
    $p->id_data_master = $pengguna->id;
    $p->save();
          
    session()->flash('success', 'Data berhasil ditambahkan.');

    return redirect()->route('dataMasterBarang');  
}

    public function hapusKodeKemasan(Request $request)
{
    $request->validate([
        'hapusKodeKemasan' => 'required',
    ]);

    $namaKantorMuatAsal = $request->input('hapusKodeKemasan');
    
    $kantorMuatAsal = Kodekemasan::where('nama', $namaKantorMuatAsal);
    
    if (!$kantorMuatAsal) {
        return redirect()->route('dataMasterBarang')->withErrors(['Data tidak ditemukan']);
    }

    $kantorMuatAsal->delete();

    session()->flash('success', 'Data berhasil dihapus.');

    return redirect()->route('dataMasterBarang');
}

// ---------------------- PERUBAHAN DATA -------------------------------------
public function gantiemail(Request $request)
{
    $request->validate([
        'email' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = Petugas::where('id_akun', $id_pengguna)->first(); 
    $pengguna->email = $request->input('email'); 
    $pengguna->save();
          
    Session::flash('success', 'Email Berhasil Di Ganti');

    return redirect()->route('ProfilePetugas');  
    
}


public function gantiNomorHp(Request $request)
{
    $request->validate([
        'no_hp' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = \App\Models\Petugas::where('id_akun', $id_pengguna)->first();
    $pengguna->no_hp = $request->input('no_hp'); 
    $pengguna->save();
    
    Session::flash('success', 'No Handphone Berhasil Di Ganti');

    return redirect()->route('ProfilePetugas');  
    
}


public function gantiPassword(Request $request)
{
    $request->validate([
        'pass_lama' => 'required',
        'pass_baru' => 'required',
    ]);
    
    $id_pengguna = Auth::id();
    $pengguna = \App\Models\Petugas::where('id_akun', $id_pengguna)->first();
    $pengguna2 = Akun::find($pengguna->id_akun);
    
    // Memeriksa apakah password lama sesuai
    if (!\Hash::check($request->input('pass_lama'), $pengguna2->password)) {
        Session::flash('error', 'Password Lama Tidak Valid');
        return redirect()->route('profile');
    }
    
    // Memperbarui password dengan password baru
    $pengguna2->password = bcrypt($request->input('pass_baru'));
    $pengguna2->save();
    
    Session::flash('success', 'Password berhasil diubah.');
    
    return redirect()->route('ProfilePetugas');
    
}

}










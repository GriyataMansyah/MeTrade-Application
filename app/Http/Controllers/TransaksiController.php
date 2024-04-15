<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Dokumen;
use App\Models\Pungutan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function tambahtransaksi(Request $request){
        $request->validate([
          'valuta' => 'required',
          'NDPMB' => 'required',
          'cara_penyerahan' => 'required',
          'nilai_ekspor' => 'required',
          'freight' => 'required',
          'asuransi' => 'required',
          'nominal_asuransi' => 'required',
          'berat_kotor' => 'required',
          'berat_bersih' => 'required',
          'nilai_maklan' => 'required',
          'pph' => 'required',
          'nilai_bea_keluar' => 'required',
      ]);
      
        $Transaksi = new Transaksi;
        $id = Auth::id();
        $dokumen = Dokumen::where('id_pengekspor', $id)->latest('id')->first();
        $Transaksi->id_dokumen = $dokumen->id; 
        $Transaksi->valuta = $request->input('valuta');
        $Transaksi->NDPMB = $request->input('NDPMB');
        $Transaksi->nilai_ekspor = $request->input('nilai_ekspor');
        $Transaksi->cara_penyerahan = $request->input('cara_penyerahan');
        $Transaksi->freight = $request->input('freight');
        $Transaksi->asuransi = $request->input('asuransi');
        $Transaksi->nominal_asuransi = $request->input('nominal_asuransi');
        $Transaksi->berat_kotor = $request->input('berat_kotor');
        $Transaksi->berat_bersih = $request->input('berat_bersih');
        $Transaksi->nilai_maklan = $request->input('nilai_maklan');
        $Transaksi->pph = $request->input('pph');
        $Transaksi->nilai_bea_keluar = $request->input('nilai_bea_keluar');
        $Transaksi ->save();

        $baru = new Pungutan();
        $id = Auth::id();
        $dokumen = Dokumen::where('id_pengekspor', $id)->latest('id')->first();
        $baru->id_dokumen = $dokumen->id;
        $nilai_bea_keluar = $request->input('nilai_bea_keluar');
        $availableColumns = ['pungutan', 'dibayar', 'ditanggung_pemerintah', 'ditunda', 'tidak_dipungut', 'dibebaskan', 'sudah_dilunasi'];
        shuffle($availableColumns);
        $randomColumn = array_shift($availableColumns);
        $baru->$randomColumn = $nilai_bea_keluar;
        $baru->save();
    
        return redirect()->route('barang1');
      }

      public function tambahbank(Request $request){
        $request->validate([
            'kode_bank' => 'required',
            'nama_bank' => 'required',
        ]);

        $bank = new Bank;
        $bank->kode_bank = $request->input('kode_bank');
        $bank->nama_bank = $request->input('nama_bank');
        $bank ->save();

        return redirect()->route('transaksi');
        }

      public function hapusbank($seri)
        {
        $dob= Bank::findOrFail($seri);
        $dob->delete();
    
         return redirect()->route('transaksi');
        }
}
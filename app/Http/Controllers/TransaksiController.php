<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Barang;
use App\Models\Dokumen;
use App\Models\Pungutan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\InformasiEkspor;
use App\Models\InformasiPembayaran;
use Illuminate\Support\Facades\Auth;
use App\Models\InformasiPungutanBerat;

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

        $Ex = new InformasiEkspor;
        $Ex ->nilai_bea_keluar = $request->input('nilai_bea_keluar');
        $Ex ->asuransi = $request->input('asuransi');
        $Ex ->save();

        $Pung = new InformasiPungutanBerat;
        $Pung->berat_kotor = $request->input('berat_kotor');
        $Pung->berat_bersih = $request->input('berat_bersih');
        $Pung ->save();

        $Ko = new InformasiPembayaran; 
        $Ko->valuta = $request->input('valuta');
        $Ko->NDPMB = $request->input('NDPMB');
        $Ko->nilai_ekspor = $request->input('nilai_ekspor');
        $Ko->cara_penyerahan = $request->input('cara_penyerahan');
        $Ko->freight = $request->input('freight');
        $Ko->nominal_asuransi = $request->input('nominal_asuransi');
        $Ko->nilai_maklan = $request->input('nilai_maklan');
        $Ko->pph = $request->input('pph');
        $Ko ->save();

        $Transaksi = new Transaksi;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $id_info_pungutan = $Pung->id;
        $id_info_pembayaran = $Ko->id;
        $id_info_ekspor = $Ex->id;
        $Transaksi->id_dokumen = $dokumen->id; 
        $Transaksi->id_info_pungutan = $id_info_pungutan; 
        $Transaksi->id_info_pembayaran =  $id_info_pembayaran; 
        $Transaksi->id_info_ekspor = $id_info_ekspor; 
        $Transaksi ->save();

        $baru = new Pungutan();
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
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
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $bank->id_dokumen = $dokumen->id; 
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

        public function hapusbank2($seri)
          {
          $dob= Bank::findOrFail($seri);
          $dob->delete();
      
           return redirect()->route('edittransaksi');
          }

          public function tambahtransaksi2(Request $request){
            $id = $request->input('id');
            $Ex = InformasiEkspor::findOrFail($id); 
            $Ex ->nilai_bea_keluar = $request->input('nilai_bea_keluar');
            $Ex ->asuransi = $request->input('asuransi');
            $Ex ->save();
    
            $Pung = InformasiPungutanBerat::findOrFail($id); 
            $Pung->berat_kotor = $request->input('berat_kotor');
            $Pung->berat_bersih = $request->input('berat_bersih');
            $Pung ->save();
    
            $Ko = InformasiPembayaran::findOrFail($id); 
            $Ko->valuta = $request->input('valuta');
            $Ko->NDPMB = $request->input('NDPMB');
            $Ko->nilai_ekspor = $request->input('nilai_ekspor');
            $Ko->cara_penyerahan = $request->input('cara_penyerahan');
            $Ko->freight = $request->input('freight');
            $Ko->nominal_asuransi = $request->input('nominal_asuransi');
            $Ko->nilai_maklan = $request->input('nilai_maklan');
            $Ko->pph = $request->input('pph');
            $Ko ->save();
    
            $Transaksi = Transaksi::findOrFail($id); 
            $id_info_pungutan = $Pung->id;
            $id_info_pembayaran = $Ko->id;
            $id_info_ekspor = $Ex->id;
            $Transaksi->id = $id; 
            $Transaksi->id_info_pungutan = $id_info_pungutan; 
            $Transaksi->id_info_pembayaran =  $id_info_pembayaran; 
            $Transaksi->id_info_ekspor = $id_info_ekspor; 
            $Transaksi ->save();
    
            $dob= Pungutan::where('id', $id)->delete();

            $baru = new Pungutan();
            $baru->id = $id;
            $baru->id_dokumen = $id;
            $nilai_bea_keluar = $request->input('nilai_bea_keluar');
            $availableColumns = ['pungutan', 'dibayar', 'ditanggung_pemerintah', 'ditunda', 'tidak_dipungut', 'dibebaskan', 'sudah_dilunasi'];
            shuffle($availableColumns);
            $randomColumn = array_shift($availableColumns);
            $baru->$randomColumn = $nilai_bea_keluar;
            $baru->save();
            
            return redirect()->route('editbarang');
          }

          public function tambahbank2(Request $request){
            $id = $request->input('id');
            $bank = new Bank;
            $bank->id_dokumen = $id; 
            $bank->kode_bank = $request->input('kode_bank');
            $bank->nama_bank = $request->input('nama_bank');
            $bank ->save();
    
            return redirect()->route('edittransaksi');
            }

            
}
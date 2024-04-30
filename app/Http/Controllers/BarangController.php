<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Lartas;
use App\Models\Dokumen;
use App\Models\HargaKemasan;
use Illuminate\Http\Request;
use App\Models\EntitasBarang;
use App\Models\InformasiBarang;
use App\Models\InformasiAsalBarang;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function tambahbarang(Request $request){
        $request->validate([
          'HS' => 'required',
          'lartas' => 'required',
          'kode' => 'required',
          'uraian' => 'required',
          'daerah_asal_barang' => 'required',
          'satuan' => 'required',
          'kode_satuan' => 'required',
          'kemasan' => 'required',
          'kode_kemasan' => 'required',
          'harga_fob' => 'required',
          'volume' => 'required',
          'berat_bersih' => 'required',
          'harga_satuan_fob' => 'required',          
      ]);
        $HaMa = new HargaKemasan;
        $HaMa->kemasan = $request->input('kemasan');
        $HaMa->harga_fob = $request->input('harga_fob');
        $HaMa->volume = $request->input('volume');
        $HaMa->berat_bersih = $request->input('berat_bersih');
        $HaMa->harga_satuan_fob = $request->input('harga_satuan_fob');
        $HaMa ->save();
        
        $Info = new InformasiAsalBarang;
        $Info->negara_asal_barang = "INDONESIA";
        $Info->daerah_asal_barang = $request->input('daerah_asal_barang');
        $Info->save();

        $InBa = new InformasiBarang;
        $InBa->HS = $request->input('HS');
        $InBa->lartas = $request->input('lartas');
        $InBa->kode = $request->input('kode');
        $InBa->uraian = $request->input('uraian');
        $InBa->mark = $request->filled('mark') ? $request->input('mark') : null;
        $InBa->tipe = $request->filled('tipe') ? $request->input('tipe') : null;
        $InBa->ukuran = $request->filled('ukuran') ? $request->input('ukuran') : null;
        $InBa->satuan = $request->input('satuan');
        $InBa->kode_satuan = $request->input('kode_satuan');
        $InBa->kode_kemasan = $request->input('kode_kemasan');
        $InBa->save();

        $dok = new Barang;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $dok->id_dokumen = $dokumen->id; 
        $id_harga_kemasan = $HaMa->id;
        $id_informasi_asal_barang = $Info->id;
        $id_informasi_barang =  $InBa->id;
        $dok->id_harga_kemasan = $id_harga_kemasan;
        $dok->id_informasi_asal_barang = $id_informasi_asal_barang;
        $dok->id_informasi_barang = $id_informasi_barang;
        $dok ->save();
    
        return redirect()->route('pungutan');
      }


      public function tambahlartas(Request $Request){
        $Request->validate([
          'jenis' => 'required',
          'nomor' => 'required',
          'tanggal' => 'required',
          'fasilitas' => 'required',
          'izin' => 'required',
      ]);


        $A = new Lartas;
        $A->jenis = $Request->input('jenis');
        $A->nomor = $Request->input('nomor');
        $A->tanggal = $Request->input('tanggal');
        $A->fasilitas = $Request->input('fasilitas');
        $A->izin = $Request->input('izin');
        $A ->save();
  
      return redirect()->route('barang1');
      }

      public function hapuslartas($seri)
      {
      $docs = Lartas::findOrFail($seri);
      $docs->delete();
  
       return redirect()->route('barang1');
      }


      
      public function tambahentitas(Request $Request){
        $Request->validate([
          'nomor_identitas' => 'required',
          'nama' => 'required',
          'alamat' => 'required',
          'entitas' => 'required',
      ]);


        $B = new EntitasBarang;
        $B->nomor_identitas = $Request->input('nomor_identitas');
        $B->nama = $Request->input('nama');
        $B->alamat = $Request->input('alamat');
        $B->entitas = $Request->input('entitas');
        $B ->save();
  
      return redirect()->route('barang1');
      }

      public function hapusentitas($seri)
      {
      $O = EntitasBarang::findOrFail($seri);
      $O->delete();
  
       return redirect()->route('barang1');
      }
}

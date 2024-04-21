<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Lartas;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Models\EntitasBarang;
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
      
        $dok = new Barang;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $dok->id_dokumen = $dokumen->id; 
        $dok->HS = $request->input('HS');
        $dok->lartas = $request->input('lartas');
        $dok->kode = $request->input('kode');
        $dok->uraian = $request->input('uraian');
        $dok->mark = $request->filled('mark') ? $request->input('mark') : null;
        $dok->tipe = $request->filled('tipe') ? $request->input('tipe') : null;
        $dok->ukuran = $request->filled('ukuran') ? $request->input('ukuran') : null;
        $dok->negara_asal_barang = "INDONESIA";
        $dok->daerah_asal_barang = $request->input('daerah_asal_barang');
        $dok->satuan = $request->input('satuan');
        $dok->kode_satuan = $request->input('kode_satuan');
        $dok->kemasan = $request->input('kemasan');
        $dok->kode_kemasan = $request->input('kode_kemasan');
        $dok->harga_fob = $request->input('harga_fob');
        $dok->volume = $request->input('volume');
        $dok->berat_bersih = $request->input('berat_bersih');
        $dok->harga_satuan_fob = $request->input('harga_satuan_fob');
        $dok -> save();
    
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

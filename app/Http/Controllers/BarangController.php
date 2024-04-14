<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tambah(Request $request){
        $request->validate([
          'HS' => 'required',
          'lartas' => 'required',
          'kode' => 'required',
          'uraian' => 'required',
          'mark' => 'required',
          'tipe' => 'required',
          'ukuran' => 'required',
          'negara_asal_barang' => 'required',
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
        $id = Auth::id();
        $dokumen = Dokumen::where('id_pengekspor', $id)->latest('id')->first();
        $dok->id_dokumen = $dokumen->id; 
        $dok->HS = $request->input('HS');
        $dok->lartas = $request->input('lartas');
        $dok->kode = $request->input('kode');
        $dok->uraian = $request->input('uraian');
        $dok->mark = $request->filled('mark') ? $request->input('mark') : null;
        $dok->tipe = $request->filled('tipe') ? $request->input('tipe') : null;
        $dok->ukuran = $request->filled('ukuran') ? $request->input('ukuran') : null;
        $dok->negara_asal_barang = $request->input('negara_asal_barang');
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
}

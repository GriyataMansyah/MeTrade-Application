<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\SaranaAngkut;
use Illuminate\Http\Request;
use App\Models\DataPengangkut;
use Illuminate\Support\Facades\Auth;

class DataPengangkutController extends Controller
{
    public function tambah(Request $request){
        $request->validate([
          'tempat_penimbunan' => 'required',
          'lokasi_pemeriksaan' => 'required',
          'pelabuhan_muat_asal' => 'required',
          'tanggal_periksa' => 'required',
          'pelabuhan_bongkar' => 'required',
          'pelabuhan_tujuan' => 'required',
          'tanggal_perkiraan_ekspor' => 'required',
      ]);
      
        $dok = new DataPengangkut;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $dok->id_dokumen = $dokumen->id; 
        $dok->tempat_penimbunan = $request->input('tempat_penimbunan');
        $dok->pelabuhan_muat_asal = $request->input('pelabuhan_muat_asal');
        $dok->pelabuhan_muat_ekspor= "STG -SINGAPURE ONE";
        $dok->pelabuhan_bongkar = $request->input('pelabuhan_bongkar');
        $dok->pelabuhan_tujuan = $request->input('pelabuhan_tujuan');
        $dok->negara_tujuan_ekspor= "SINGAPORE";
        $dok->tanggal_perkiraan_ekspor = $request->input('tanggal_perkiraan_ekspor');
        $dok->lokasi_pemeriksaan = $request->input('lokasi_pemeriksaan');
        $dok->tanggal_periksa = $request->input('tanggal_periksa');
        $dok->kantor_periksa= "KBPPC SINGAPURE";
        $dok -> save();
    
        return redirect()->route('kemasan');
      }

      public function tambahpengangkut(Request $request){
        $request->validate([
          'nama_sarana_angkut' => 'required',
          'cara_pengangkutan' => 'required',
          'nomor_voy' => 'required',
          'bendera' => 'required',
      ]);
      
        $doc = new SaranaAngkut;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $doc->id_dokumen = $dokumen->id; 
        $doc->nama_sarana_angkut = $request->input('nama_sarana_angkut');
        $doc->cara_pengangkutan = $request->input('cara_pengangkutan');
        $doc->nomor_voy = $request->input('nomor_voy');
        $doc->bendera = $request->input('bendera');
        $doc->save();
    
        return redirect()->route('pengangkut');
      }

      public function hapus($seri)
      {
      $docs = SaranaAngkut::findOrFail($seri);
      $docs->delete();
  
       return redirect()->route('pengangkut');
      }
}

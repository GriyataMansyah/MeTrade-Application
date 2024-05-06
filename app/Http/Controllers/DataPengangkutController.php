<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\SaranaAngkut;
use Illuminate\Http\Request;
use App\Models\DataPengangkut;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\InformasiTempat;

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
        $bay = new InformasiTempat;
        $bay->tempat_penimbunan = $request->input('tempat_penimbunan');
        $bay->pelabuhan_muat_asal = $request->input('pelabuhan_muat_asal');
        $bay->pelabuhan_muat_ekspor= "STG -SINGAPURE ONE";
        $bay->pelabuhan_bongkar = $request->input('pelabuhan_bongkar');
        $bay->pelabuhan_tujuan = $request->input('pelabuhan_tujuan');
        $bay->negara_tujuan_ekspor= "SINGAPORE";
        $bay->tanggal_perkiraan_ekspor = $request->input('tanggal_perkiraan_ekspor');
        $bay->lokasi_pemeriksaan = $request->input('lokasi_pemeriksaan');
        $bay->save();

        $bay2 = $bay->id;
        $dok = new DataPengangkut;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $dok->id_dokumen = $dokumen->id; 
        $dok->id_informasi_tempat = $bay2;
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

      public function editangkutan(Request $request){
        $id = $request->input('id');
        $bay = InformasiTempat::findOrFail($id); 
        $bay->tempat_penimbunan = $request->input('tempat_penimbunan');
        $bay->pelabuhan_muat_asal = $request->input('pelabuhan_muat_asal');
        $bay->pelabuhan_bongkar = $request->input('pelabuhan_bongkar');
        $bay->pelabuhan_tujuan = $request->input('pelabuhan_tujuan');
        $bay->tanggal_perkiraan_ekspor = $request->input('tanggal_perkiraan_ekspor');
        $bay->lokasi_pemeriksaan = $request->input('lokasi_pemeriksaan');
        $bay->save();

        $dok = DataPengangkut::findOrFail($id);  
        $dok->tanggal_periksa = $request->input('tanggal_periksa');
        $dok -> save();
    
        return redirect()->route('editkemasan');
      }

      public function modifangkutan(Request $request){
        $id = $request->input('id');
        $doc = new SaranaAngkut;
        $doc->id_dokumen = $id; 
        $doc->nama_sarana_angkut = $request->input('nama_sarana_angkut');
        $doc->cara_pengangkutan = $request->input('cara_pengangkutan');
        $doc->nomor_voy = $request->input('nomor_voy');
        $doc->bendera = $request->input('bendera');
        $doc->save();
        return redirect()->route("editangkut");
      }

      public function hapus2($seri)
      {
      $docs = SaranaAngkut::findOrFail($seri);
      $docs->delete();
  
       return redirect()->route('editangkut');
      }
}

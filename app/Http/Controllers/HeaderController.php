<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HeaderController extends Controller
{
    
  public function tambah(Request $request){
    $header = new Header;
    $part1 = mt_rand(100000, 999999);
    $part2 = mt_rand(100000, 999999);
    $part3 = mt_rand(100000, 999999);
    $id = Auth::id();
    $dokumen = Dokumen::where('id_pengekspor', $id)->latest('id')->first();
    $header->id_dokumen = $dokumen->id; 
    $nomor_pengajuan = $part1 . $part2 . $part3;
    $header->nomor_pengajuan= $nomor_pengajuan;
    $header->pelabuhan_muat_ekspor = $request->input('pelabuhan_ekspor');
    $header->kantor_muat_asal = $request->input('kantor_asal');
    $header->kantor_muat_ekspor = $request->input('kantor_ekspor');
    $header->jenis_ekspor = $request->input('jenis_ekspor');
    $header->kategori_ekspor = $request->input('kategori_ekspor');
    $header->cara_dagang = $request->input('cara_dagang');
    $header->cara_bayar = $request->input('cara_bayar');
    $header->komoditi = $request->input('komoditi');
    $header->curah = $request->input('curah');
    $header -> save();

    return redirect()->route('entitas');
  }


}

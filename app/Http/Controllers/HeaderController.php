<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Models\InformasiEkspors;
use Illuminate\Support\Facades\Auth;


class HeaderController extends Controller
{
    
  public function tambahDataHeader(Request $request){
    $request->validate([
      'pelabuhan_ekspor' => 'required',
      'kantor_asal' => 'required',
      'kantor_ekspor' => 'required',
      'jenis_ekspor' => 'required',
      'kategori_ekspor' => 'required',
      'cara_dagang' => 'required',
      'cara_bayar' => 'required',
      'komoditi' => 'required',
      'curah' => 'required',
  ]);
    $hay = new InformasiEkspors;
    $hay->jenis_ekspor = $request->input('jenis_ekspor');
    $hay->kategori_ekspor = $request->input('kategori_ekspor');
    $hay->cara_dagang = $request->input('cara_dagang');
    $hay->save();

    $hayhay = $hay->id;
    $header = new Header;
    $part1 = mt_rand(100000, 999999);
    $part2 = mt_rand(100000, 999999);
    $part3 = mt_rand(100000, 999999);
    $Auth = Auth::id();
    $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
    $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
    $header->id_dokumen = $dokumen->id; 
    $nomor_pengajuan = $part1 . $part2 . $part3;
    $header->nomor_pengajuan= $nomor_pengajuan;
    $header->id_informasi_eksports= $hayhay;
    $header->pelabuhan_muat_ekspor = $request->input('pelabuhan_ekspor');
    $header->kantor_muat_asal = $request->input('kantor_asal');
    $header->kantor_muat_ekspor = $request->input('kantor_ekspor');
    $header->cara_bayar = $request->input('cara_bayar');
    $header->komoditi = $request->input('komoditi');
    $header->curah = $request->input('curah');
    $header -> save();

    return redirect()->route('entitas');
    }

    public function tampilkanheader(){
      return view('pengekspor.header');
    }

    public function tampilkaneditheader(){
      return view('pengekspor/edit/header');
    }

    public function tampilkanEditDataHeader($id){
      session(['id_dokumen' => $id]);
      // return redirect()->route("headerv2");
      return $this->tampilkaneditheader();
    }

    public function editDataHeader(Request $request)
    {
        $id = $request->input('id');
        $header = Header::findOrFail($id);
        $header->pelabuhan_muat_ekspor = $request->input('pelabuhan_ekspor');
        $header->kantor_muat_asal = $request->input('kantor_asal');
        $header->kantor_muat_ekspor = $request->input('kantor_ekspor');
        $header->cara_bayar = $request->input('cara_bayar');
        $header->komoditi = $request->input('komoditi');
        $header->curah = $request->input('curah');
        $header->save();

        $InformasiEkspors = InformasiEkspors::findOrFail($id);
        $InformasiEkspors->jenis_ekspor = $request->input('jenis_ekspor');
        $InformasiEkspors->kategori_ekspor = $request->input('kategori_ekspor');
        $InformasiEkspors->cara_dagang = $request->input('cara_dagang');
        $InformasiEkspors->save();

        return view('pengekspor/edit/entitas');
    }

}

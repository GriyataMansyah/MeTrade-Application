<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Entitas;
use App\Models\Pembeli;
use App\Models\Penerima;
use App\Models\Eksportir;
use Illuminate\Http\Request;
use App\Models\PemilikBarang;
use Illuminate\Support\Facades\Auth;

class EntitasController extends Controller
{
    public function tambah(Request $request){
        $request->validate([
          'nama_ek' => 'required',
          'alamat_ek' => 'required',
          'nama_pen' => 'required',
          'alamat_pen' => 'required',
          'negara_pen' => 'required',
          'nama_pem' => 'required',
          'alamat_pem' => 'required',
          'negara_pem' => 'required',
      ]);
      
        $Eksportir = new Eksportir;
        $part1 = mt_rand(100000, 999999);
        $part2 = mt_rand(100000, 999999);
        $part3 = mt_rand(100000, 999999);
        $nomor_pengajuan = $part1 . $part2 . $part3;
        $Eksportir->nomor_identitas= $nomor_pengajuan;
        $Eksportir->nama = $request->input('nama_ek');
        $Eksportir->alamat = $request->input('alamat_ek');
        $Eksportir -> save();

        $Pembeli = new Pembeli;
        $Pembeli->nama = $request->input('nama_pem');
        $Pembeli->alamat = $request->input('alamat_pem');
        $Pembeli->negara = $request->input('negara_pem');
        $Pembeli->save();

        $Penerima = new Penerima;
        $Penerima->nama = $request->input('nama_pen');
        $Penerima->alamat = $request->input('alamat_pen');
        $Penerima->negara = $request->input('negara_pen');
        $Penerima->save();

        $id = Auth::id();
        $id_dokumen = Dokumen::where('id_pengekspor', $id)->orderBy('id', 'desc')->value('id');
        $id_eksportir = $id;
        $Entitas = new Entitas;
        $Entitas->entitas = "Entitas";
        $Entitas->id_dokumen = $id_dokumen; 
        $Entitas->id_eksportir = $id_eksportir; 
        $Entitas->id_penerima = $Penerima->id;
        $Entitas->id_pembeli = $Pembeli->id;
        $Entitas->save();
    
        return redirect()->route('dokumenpen');
      }

      public function tambahPemilik(Request $request){
        $request->validate([
          'no_identitas' => 'required',
          'alamat' => 'required',
          'nama' => 'required',
      ]);
      
        $PemilikBarang = new PemilikBarang;
        $PemilikBarang->no_identitas = $request->input('no_identitas');
        $PemilikBarang->alamat = $request->input('alamat');
        $PemilikBarang->nama = $request->input('nama');
        $PemilikBarang ->save();

        return redirect()->route('entitas');
      }

      public function destroy($seri)
      {
      $pemilik_barang = PemilikBarang::findOrFail($seri);
      $pemilik_barang->delete();

      return redirect()->route('entitas');
      }

}

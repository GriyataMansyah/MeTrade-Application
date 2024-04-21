<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Models\DokumenPendukung;
use Illuminate\Support\Facades\Auth;

class DokumenPendukungController extends Controller
{
    public function tambah(Request $request){
        $request->validate([
          'nomor' => 'required',
          'jenis' => 'required',
          'tanggal' => 'required',
      ]);
      
        $dok = new DokumenPendukung;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $dok->id_dokumen = $dokumen->id; 
        $dok->nomor = $request->input('nomor');
        $dok->jenis = $request->input('jenis');
        $dok->tanggal = $request->input('tanggal');
        $dok -> save();
    
        return redirect()->route('dokumenpen');
      }

      public function destroy($id)
      {
      $dokumenpen = DokumenPendukung::findOrFail($id);
      $dokumenpen->delete();
  
       return redirect()->route('dokumenpen');
      }
}

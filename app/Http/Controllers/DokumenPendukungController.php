<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Models\DokumenPendukung;
use Illuminate\Support\Facades\Auth;

class DokumenPendukungController extends Controller
{
    public function tambahDokumenPendukung(Request $request){
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

      public function hapusDokumenPendukung($id)
      {
      $dokumenpen = DokumenPendukung::findOrFail($id);
      $dokumenpen->delete();
  
       return redirect()->route('dokumenpen');
      }

      public function editDokumenPendukung(Request $request){
        $id = $request->input('id');
        $dok = new DokumenPendukung;
        $dok->id_dokumen = $id; 
        $dok->nomor = $request->input('nomor');
        $dok->jenis = $request->input('jenis');
        $dok->tanggal = $request->input('tanggal');
        $dok -> save();

        return redirect()->route("editdokumenpen");
      }

      public function hapusEditDokumenPendukung($id)
      {
      $dokumenpen = DokumenPendukung::findOrFail($id);
      $dokumenpen->delete();
  
       return redirect()->route('editdokumenpen');
      }
      
}

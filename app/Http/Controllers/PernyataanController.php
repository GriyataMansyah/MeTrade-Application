<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Pernyataan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PernyataanController extends Controller
{
  private function tambahpernyataan(Request $request){
        $request->validate([
          'tempat' => "required",
          'tanggal' => 'required',
          'nama' => 'required',
          'jabatan' => 'required',
      ]);
      
        $p = new Pernyataan;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $p->id_dokumen = $dokumen->id; 
        $p->tempat = $request->input('tempat');
        $p->tanggal = $request->input('tanggal');
        $p->nama = $request->input('nama');
        $p->jabatan = $request->input('jabatan');
        $p->save();
    
        return redirect("Dokumens");
      }


      private function tambahEditPernyataan(Request $request){
        $request->validate([
          'tempat' => "required",
          'tanggal' => 'required',
          'nama' => 'required',
          'jabatan' => 'required',
      ]);
      
        $id = $request->input('id');
        $p = Pernyataan::findOrFail($id); 
        $p->id_dokumen = $id; 
        $p->tempat = $request->input('tempat');
        $p->tanggal = $request->input('tanggal');
        $p->nama = $request->input('nama');
        $p->jabatan = $request->input('jabatan');
        $p->save();
    
        return redirect("Dokumens");
      }
}

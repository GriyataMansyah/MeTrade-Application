<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Pernyataan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PernyataanController extends Controller
{
    public function tambahpernyataan(Request $request){
        $request->validate([
          'tempat' => "required",
          'tanggal' => 'required',
          'nama' => 'required',
          'jabatan' => 'required',
      ]);
      
        $p = new Pernyataan;
        $id = Auth::id();
        $dokumen = Dokumen::where('id_pengekspor', $id)->latest('id')->first();
        $p->id_dokumen = $dokumen->id; 
        $p->tempat = $request->input('tempat');
        $p->tanggal = $request->input('tanggal');
        $p->nama = $request->input('nama');
        $p->jabatan = $request->input('jabatan');
        $p->save();
    
        return redirect("Dokumens");
      }
}

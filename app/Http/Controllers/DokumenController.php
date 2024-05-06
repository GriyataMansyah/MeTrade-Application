<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengekspor;
use App\Models\Petugas;
use Illuminate\Support\Facades\Session;


class DokumenController extends Controller
{
    public function dokumens(){
         return view('pengekspor.daftardok');
    }

    public function tambahDok(Request $request)
    {
        $dokumen = new Dokumen;
        $id_petugas = Petugas::first()->id;
        $id_akun = Auth::id();
        $id_pengekspor = Pengekspor::where('id_akun', $id_akun)->value('id');
        $dokumen->id_pengekspor = $id_pengekspor;    
        $dokumen->id_petugas = $id_petugas;
        $dokumen->entitas = $request->entitas;
        $dokumen->jenis_pemberitahuan = $request->jenis_pemberitahuan;
        $dokumen->asal_brg = $request->asal_brg;
        $dokumen->tujuan_brg = $request->tujuan_brg;
        $dokumen->jenis_dokumen = $request->jenis_dokumen;
        $dokumen->save();

        $dokumen = $dokumen->id;
        $request->session()->put('dokumen_id', $dokumen);

        return redirect()->route('header');
    }

    public function destroy($id)
    {
    $dokumen = Dokumen::findOrFail($id);
    $dokumen->delete();

     return redirect()->route('dokumens');
    }

}

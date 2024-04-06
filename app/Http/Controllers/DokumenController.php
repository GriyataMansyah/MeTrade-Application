<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengekspor;
use App\Models\Petugas;

class DokumenController extends Controller
{
    public function tambahDok(Request $request)
    {
        $dokumen = new Dokumen;
        $id_pengekspor = Pengekspor::where('id_akun', Auth::id())->value('id');
        $dokumen->id_pengekspor = $id_pengekspor;
        $id_petugas = Petugas::first()->id;
        $dokumen->id_petugas = $id_petugas;
        $dokumen->entitas = $request->entitas;
        $dokumen->jenis_pemberitahuan = $request->jenis_pemberitahuan;
        $dokumen->asal_brg = $request->asal_brg;
        $dokumen->tujuan_brg = $request->tujuan_brg;
        $dokumen->jenis_dokumen = $request->jenis_dokumen;
        $dokumen->save();

        return redirect()->route('header');
    }

}

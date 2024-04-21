<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Kemasan;
use App\Models\PetiKemas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KemasanController extends Controller
{
    public function tambahkemasan(Request $request){
        $request->validate([
          'jumlah' => 'required',
          'jenis' => 'required',
          'merek' => 'required',
      ]);
      
        $dok = new Kemasan;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $dok->id_dokumen = $dokumen->id; 
        $dok->jumlah = $request->input('jumlah');
        $dok->jenis = $request->input('jenis');
        $dok->merek = $request->input('merek');
        $dok -> save();
    
        return redirect()->route('kemasan');
      }

    public function hapus($seri)
      {
      $do= Kemasan::findOrFail($seri);
      $do->delete();
  
       return redirect()->route('kemasan');
      }

    public function tambahpetikemas(Request $request){
        $request->validate([
          'nomor' => "required",
          'ukuran' => 'required',
          'jenis' => 'required',
          'tipe' => 'required',
      ]);
      
        $p = new PetiKemas;
        $Auth = Auth::id();
        $loggedInUserId =  \App\Models\pengekspor::where('id_akun', $Auth)->value('id');
        $dokumen = Dokumen::where('id_pengekspor', $loggedInUserId)->latest('id')->first();
        $p->id_dokumen = $dokumen->id; 
        $p->nomor = $request->input('nomor');
        $p->ukuran = $request->input('ukuran');
        $p->jenis = $request->input('jenis');
        $p->tipe = $request->input('tipe');
        $p->save();
    
        return redirect()->route('kemasan');
      }

    public function hapuspetikemas($seri)
      {
      $dob= PetiKemas::findOrFail($seri);
      $dob->delete();
  
       return redirect()->route('kemasan');
      }
}

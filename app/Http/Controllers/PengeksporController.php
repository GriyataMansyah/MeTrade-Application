<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\pengekspor;
use Illuminate\Http\Request;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class PengeksporController extends Controller
{
    public function regis(Request $request)
    {
        $password = $request->input('password');
        $confirmedPassword = $request->input('confirmedPassword');
    
        
        if ($password != $confirmedPassword) {
            return redirect()->back()->withInput()->with('error', 'Konfirmasi Password Tidak Cocok,Harap Isi Ulang Seluruh Data');
        }

        $userData = new \stdClass();
        $userData->npwp = $request->input('npwp');
        $userData->no_hp = $request->input('no_hp');
        $userData->nama = $request->input('nama');
        $userData->email = $request->input('email');

        $akunData = new \stdClass();
        $akunData->username = $request->input('username');
        $akunData->password = bcrypt($request->input('password'));
        $akunData->level = "pengekspor";

        $akunId = DB::table('akuns')->insertGetId((array) $akunData);

        $userData->id_akun = $akunId;

        DB::table('pengekspors')->insert((array) $userData);

        return redirect()->to('/')->with('success', 'Pendaftaran berhasil, silakan masuk.');
    }

    public function gantiemail(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        
        $id_pengguna = auth()->id();
        $pengguna = Pengekspor::find($id_pengguna);
        $pengguna->email = $request->input('email'); 
        $pengguna->save();
        
        Session::flash('success', 'Email Berhasil Di Ganti');

        return redirect()->route('profile');  
        
    }

    
    public function gantiphone(Request $request)
    {
        $request->validate([
            'no_hp' => 'required',
        ]);
        
        $id_pengguna = auth()->id();
        $pengguna = Pengekspor::find($id_pengguna);
        $pengguna->email = $request->input('no_hp'); 
        $pengguna->save();
        
        Session::flash('success', 'No Handphone Berhasil Di Ganti');

        return redirect()->route('profile');  
        
    }


    public function gantipass(Request $request)
    {
        $request->validate([
            'pass_lama' => 'required',
            'pass_baru' => 'required',
        ]);
        
        $id_pengguna = auth()->id();
        $pengguna = Pengekspor::find($id_pengguna);
        $pengguna2 = Akun::find($pengguna->id_akun);
        
        // Memeriksa apakah password lama sesuai
        if (!\Hash::check($request->input('pass_lama'), $pengguna2->password)) {
            Session::flash('error', 'Password Lama Tidak Valid');
            return redirect()->route('profile');
        }
        
        // Memperbarui password dengan password baru
        $pengguna2->password = bcrypt($request->input('pass_baru'));
        $pengguna2->save();
        
        Session::flash('success', 'Password berhasil diubah.');
        
        return redirect()->route('profile');
        
    }

}


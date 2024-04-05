<?php

namespace App\Http\Controllers;

use App\Models\pengekspor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;


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
}

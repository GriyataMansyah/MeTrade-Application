<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AkunController extends Controller
{
    // FUNCTION UNTUK LOG IN
    public function index()
    {
        return view('sesi.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->level === 'pengekspor') {
                return view('/pengekspor/dashboard');
            } elseif ($user->level === 'petugas') {
                return view('/petugas/dashboard');
            }
        }
    
        Session::flash('error', 'Login gagal. Pastikan username dan password Anda benar.');
        return redirect('/');
    }
    
    public function showName()
    {
        $userId = Auth::id();
        $akun = Akun::find($userId);
        $name = '';

        if ($akun) {
        switch ($akun->level) {
        case 'pengekspor':
            $pengekspor = Pengekspor::where('akun_id', $akun->id)->first();
            if ($pengekspor) {
                $name = "Nama pengekspor: " . $pengekspor->nama;
            } else {
                $name = "Data pengekspor tidak ditemukan.";
            }
            break;
        case 'petugas':
            $petugas = Petugas::where('akun_id', $akun->id)->first();
            if ($petugas) {
                $name = "Nama petugas: " . $petugas->nama;
            } else {
                $name = "Data petugas tidak ditemukan.";
            }
            break;
        default:
            $name = "Level akun tidak valid.";
            break;
    }
} else {
    $name = "Akun tidak ditemukan.";
}

$view1 = view('layout.popuplogout', compact('name'));
$view2 = view('layout.header', compact('name'));

return [$view1, $view2];

    }

    // FUNCTION UNTUK LOG OUT
    public function logout()
    {
    Auth::logout();
    return redirect('log');
    }
}

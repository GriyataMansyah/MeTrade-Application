<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\pengekspor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AkunController extends Controller
{
    // FUNCTION UNTUK LOG IN
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

    // FUNCTION UNTUK LOG OUT
    public function logout()
    {
    Auth::logout();
    return redirect('log');
    }

    public function index()
    {
        return view('sesi.login');
    }
}



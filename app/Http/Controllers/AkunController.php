<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AkunController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $infomasuk = $request->only('username', 'password');
    
        if (Auth::attempt($infomasuk)) {
            return redirect('/header');
        } else {
            Session::flash('error', 'Login gagal. Pastikan username dan password Anda benar.');
            return redirect('/login');
        }
    }
}

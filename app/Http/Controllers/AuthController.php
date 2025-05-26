<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'Admin') {
                return redirect('/dashboard')->with('success', 'Selamat Datang' . " " . $user->name);
            } elseif ($user->role === 'Pegawai') {
                return redirect('/dashboard')->with('success', 'Selamat Datang' . " " . $user->name);
            } else {
                Auth::logout();
                return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini');
            }
        }

        return redirect('/login')->with('error', 'Email atau Password Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout Berhasil');
    }
}

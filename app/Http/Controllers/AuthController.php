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
                return redirect('/dashboard')->with('success', 'Login Admin Berhasil');
            } elseif ($user->role === 'Pegawai') {
                return redirect('/dashboard')->with('success', 'Login Pegawai Berhasil');
            } else {
                Auth::logout();
                return redirect('/')->with('error', 'Role tidak dikenali');
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

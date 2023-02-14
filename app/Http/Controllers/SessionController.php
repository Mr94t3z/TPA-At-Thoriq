<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    // Fungsi Halaman Login
    function index()
    {
        return view('backend/login');
    }

    // Fungsi Auth Login
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi!',
            'password.required' => 'Password harus diisi!'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect('dashboad')->with('succcess', 'Berhasil Login!');
        } else {
            return redirect('login')->withErrors('Username dan Password Anda salah!');
        }
    }

    // Fungsi Registrasi
    function register()
    {
        return view('backend/register');
    }

    // Fungsi selanjutnya dari register
    function create()
    {
    }
}

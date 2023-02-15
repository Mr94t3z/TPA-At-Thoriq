<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Fungsi Halaman Register
    public function register()
    {
        return view('backend/register');
    }

    // Fungsi Create User dari Registrasi
    public function registerAction(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => 0,
        ]);
        $user->save();

        return redirect('login')->with('success', 'Registrasi berhasil!');
    }

    // Fungsi Halaman Login
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }
        return view('backend/login');
    }

    // Fungsi Auth Login
    public function authLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard')->with('success', 'Login berhasil!');
        }

        return redirect('login')->withErrors('password', 'Email atau Password Anda salah!');
    }

    // Fungsi Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

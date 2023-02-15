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

    // Fungsi View Users
    public function users(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_users'] = User::where('nama', 'like', '%' . $data['q'] . '%')->get();

        return view('backend/data-pengguna/users/index', $data);
    }

    // Fungsi Halaman Edit User
    public function editUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Data user tidak ditemukan!');
        }

        return view('backend/data-pengguna/users/edit', compact('user'));
    }

    // Fungsi Edit Users
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'roles' => 'required'
        ]);

        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];
        $user->roles = $validatedData['roles'];

        $user->save();

        return redirect()->route('users')->with('success', 'User berhasil diupdate!');
    }

    // Fungsi Delete User
    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'User berhasil dihapus!');
    }
}

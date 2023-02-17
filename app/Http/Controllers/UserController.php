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
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Format email anda salah!',
            'password.required' => 'Password harus diisi!',
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
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Format email anda salah!',
            'password.required' => 'Password harus diisi!',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['Email atau Password anda salah!']);
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
        $data['tbl_users'] = User::where('nama', 'like', '%' . $data['q'] . '%')->paginate(5);

        return view('backend/kelola-pengguna/users/index', $data);
    }

    // Fungsi Halaman Edit User
    public function editUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Data user tidak ditemukan!');
        }

        return view('backend/kelola-pengguna/users/edit', compact('user'));
    }

    // Fungsi Edit Users
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'roles' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Format email anda salah!',
            'roles.required' => 'Roles harus diisi!',
        ]);

        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];
        $user->roles = $validatedData['roles'];

        $user->save();

        return redirect()->route('users')->with('success', 'Data user berhasil diupdate!');
    }

    // Fungsi Delete User
    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Data user tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'Data user berhasil dihapus!');
    }
}

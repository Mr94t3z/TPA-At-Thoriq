<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
            'email' => 'required|email|unique:tbl_users,email',
            'password' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Format email anda salah!',
            'email.unique' => 'Email sudah digunakan!',
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

    // Fungsi View My Profile
    public function myProfile(Request $request)
    {
        $request->session()->regenerate();
        $user = auth()->user();
        $data['tbl_users'] = User::where('id', $user->id)->first();

        return view('backend/my-profile/index', $data);
    }

    // Fungsi Halaman Edit My Profile
    public function editMyProfile()
    {
        $user = auth()->user();
        $data['tbl_users'] = User::where('id', $user->id)->first();

        return view('backend/my-profile/edit', $data);
    }

    // Fungsi Edit My Profile
    public function updateMyProfile(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Format email anda salah!',
            'photo.image' => 'File yang anda upload bukan gambar!',
            'photo.mimes' => 'Format gambar yang anda upload salah!',
            'photo.max' => 'Ukuran gambar maksimal 1MB!',
        ]);

        $user = User::find(Auth::id());
        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];

        if ($request->file('photo') == "") {
            $user->photo = $user->photo;
        } else {
            Storage::disk('local')->delete('public/' . $user->photo);
            $user->photo = $request->file('photo')->store('photos');
        }

        $user->save();

        return redirect()->route('my-profile')->with('success', 'Data anda berhasil diupdate!');
    }

    // Fungsi Halaman Change Password
    public function changePassword()
    {
        $user = auth()->user();
        $data['tbl_users'] = User::where('id', $user->id)->first();

        return view('backend/my-profile/password', $data);
    }

    public function updatePassword(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ], [
            'old_password.required' => 'Password lama harus diisi!',
            'old_password.current_password' => 'Password lama anda salah!',
            'new_password.required' => 'Password baru harus diisi!',
            'confirm_password.required' => 'Konfirmasi password harus diisi!',
            'confirm_password.same' => 'Konfirmasi password tidak sama!',
        ]);

        $user = User::find(Auth::id());
        if (Hash::check($validatedData['old_password'], $user->password)) {
            $user->password = Hash::make($validatedData['new_password']);
            $user->save();

            return redirect()->route('my-profile')->with('success', 'Password anda berhasil diupdate!');
        } else {
            return redirect()->route('change-password')->with('error', 'Password anda salah!');
        }
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
            'password' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Format email anda salah!',
            'roles.required' => 'Roles harus diisi!',
            'password.required' => 'Password harus diisi!',
        ]);

        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];
        $user->roles = $validatedData['roles'];
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('users')->with('success', 'Data user berhasil diupdate!');
    }

    // Fungsi Delete User
    public function delete($id)
    {
        $user = User::find($id);

        if ($user->photo !== null) {
            Storage::delete($user->photo);
        } else if (!$user) {
            return redirect()->back()->with('error', 'Data user tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'Data user berhasil dihapus!');
    }
}

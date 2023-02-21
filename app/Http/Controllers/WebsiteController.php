<?php

namespace App\Http\Controllers;

use App\Models\IdentitasLembaga;
use App\Models\KepalaPendidikan;
use App\Models\LuasTanah;
use App\Models\Pendukung;
use App\Models\PenggunaanLahan;
use App\Models\Siswa;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // Fungsi Halaman Profile
    public function home()
    {
        $profileData = IdentitasLembaga::first();

        return view('frontend/website', compact('profileData'));
    }

    // Fungsi Halaman Profile
    public function profile()
    {
        $profileKepalaPendidikan = KepalaPendidikan::first();
        $profileData = IdentitasLembaga::first();

        // Data untuk Statistik pada My Area Chart
        $countByKelas = Siswa::selectRaw('kelas, count(*) as total')->groupBy('kelas')->get();

        return view('frontend/profile', compact('profileKepalaPendidikan', 'profileData', 'countByKelas'));
    }

    // Fungsi Halaman Berita
    public function berita()
    {
        $profileData = IdentitasLembaga::first();

        return view('frontend/berita', compact('profileData'));
    }

    // Fungsi Halaman Fasilitas
    public function fasilitas()
    {
        $fasilitasData = PenggunaanLahan::pluck('keterangan', 'milik');
        $profileData = IdentitasLembaga::first();

        // Data untuk Statistik pada Pie Chart
        $luasTanah = LuasTanah::count();
        $penggunaanLahan = PenggunaanLahan::count();
        $sarprasPendukung = Pendukung::count();

        $no = 1;

        return view('frontend/fasilitas', compact('fasilitasData', 'no', 'profileData', 'luasTanah', 'penggunaanLahan', 'sarprasPendukung'));
    }
}

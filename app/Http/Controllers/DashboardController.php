<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\LuasTanah;
use App\Models\Pendukung;
use App\Models\PenggunaanLahan;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function countData()
    {

        // Data untuk Statistik pada Card
        $totalUser = User::count();
        $totalGuru = Guru::count();
        $totalSiswa = Siswa::count();

        // Data untuk Statistik pada My Area Chart
        $countByKelas = Siswa::selectRaw('kelas, count(*) as total')->groupBy('kelas')->get();

        // Data untuk Statistik pada Pie Chart
        $luasTanah = LuasTanah::count();
        $penggunaanLahan = PenggunaanLahan::count();
        $sarprasPendukung = Pendukung::count();

        return view('backend/dashboard/index', compact('totalUser', 'totalGuru', 'totalSiswa', 'countByKelas', 'luasTanah', 'penggunaanLahan', 'sarprasPendukung'));
    }
}

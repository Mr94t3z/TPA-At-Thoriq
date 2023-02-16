<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function countData()
    {
        $totalUser = User::count();
        $totalGuru = Guru::count();
        $totalSiswa = Siswa::count();
        $countByKelas = Siswa::selectRaw('kelas, count(*) as total')->groupBy('kelas')->get();


        return view('backend/dashboard/index', compact('totalUser', 'totalGuru', 'totalSiswa', 'countByKelas'));
    }
}

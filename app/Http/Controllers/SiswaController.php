<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Fungsi Halaman Data Siswa
    public function siswa(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_siswa_aktif'] = Siswa::where('nama', 'like', '%' . $data['q'] . '%')->get();

        return view('backend/data-pengguna/siswa/index', $data);
    }

    // Fungsi Halaman Edit Siswa
    public function editSiswa($id)
    {
        $siswa = Siswa::find($id);
        return view('backend/data-pengguna/siswa/edit', compact('siswa'));
    }

    // Fungsi Edit Siswa
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required'
        ]);

        $siswa->nisn = $validatedData['nisn'];
        $siswa->nama = $validatedData['nama'];
        $siswa->jenis_kelamin = $validatedData['jenis_kelamin'];
        $siswa->kelas = $validatedData['kelas'];

        $siswa->save();

        return redirect()->route('siswa')->with('success', 'Siswa berhasil diupdate!');
    }

    // Fungsi Delete Siswa
    public function delete($id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return redirect()->back()->with('error', 'Siswa tidak ditemukan!');
        }

        $siswa->delete();

        return redirect()->back()->with('success', 'Siswa berhasil dihapus!');
    }
}

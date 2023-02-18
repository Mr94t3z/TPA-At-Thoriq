<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Fungsi Halaman Create Data Siswa
    public function create()
    {
        return view('backend/kelola-pengguna/siswa/create');
    }

    // Fungsi Create Data Siswa
    public function createAction(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required'
        ], [
            'nisn.required' => 'NISN harus diisi!',
            'nama.required' => 'Nama harus diisi!',
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi!',
            'kelas.required' => 'Kelas harus diisi!',
        ]);

        $siswa = new Siswa([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas,
        ]);
        $siswa->save();

        return redirect('siswa')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    // Fungsi Halaman Data Siswa
    public function siswa(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_siswa_aktif'] = Siswa::where('nama', 'like', '%' . $data['q'] . '%')->orderBy('created_at', 'DESC')->paginate(5);

        return view('backend/kelola-pengguna/siswa/index', $data);
    }


    // Fungsi Halaman Edit Siswa
    public function editSiswa($id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan!');
        }

        return view('backend/kelola-pengguna/siswa/edit', compact('siswa'));
    }

    // Fungsi Edit Siswa
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required'
        ], [
            'nisn.required' => 'NISN harus diisi!',
            'nama.required' => 'Nama harus diisi!',
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi!',
            'kelas.required' => 'Kelas harus diisi!',
        ]);

        $siswa->nisn = $validatedData['nisn'];
        $siswa->nama = $validatedData['nama'];
        $siswa->jenis_kelamin = $validatedData['jenis_kelamin'];
        $siswa->kelas = $validatedData['kelas'];

        $siswa->save();

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil diupdate!');
    }

    // Fungsi Delete Siswa
    public function delete($id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan!');
        }

        $siswa->delete();

        return redirect()->back()->with('success', 'Data siswa berhasil dihapus!');
    }
}

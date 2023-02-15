<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // Fungsi Halaman Create Data Guru
    public function create()
    {
        return view('backend/data-pengguna/guru/create');
    }

    // Fungsi Create Data Guru
    public function createAction(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenjang_pendidikan' => 'required',
        ]);

        $guru = new Guru([
            'nama' => $request->nama,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
        ]);
        $guru->save();

        return redirect('guru')->with('success', 'Data guru berhasil ditambahkan!');
    }

    // Fungsi Halaman Data Guru
    public function guru(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_guru'] = Guru::where('nama', 'like', '%' . $data['q'] . '%')->get();

        return view('backend/data-pengguna/guru/index', $data);
    }

    // Fungsi Halaman Edit Guru
    public function editGuru($id)
    {
        $guru = Guru::find($id);

        if (!$guru) {
            return redirect()->back()->with('error', 'Data guru tidak ditemukan!');
        }

        return view('backend/data-pengguna/guru/edit', compact('guru'));
    }


    // Fungsi Edit Guru
    public function update(Request $request, Guru $guru)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenjang_pendidikan' => 'required',
        ]);

        $guru->nama = $validatedData['nama'];
        $guru->jenjang_pendidikan = $validatedData['jenjang_pendidikan'];

        $guru->save();

        return redirect()->route('guru')->with('success', 'Data guru berhasil diupdate!');
    }

    // Fungsi Delete Guru
    public function delete($id)
    {
        $guru = Guru::find($id);

        if (!$guru) {
            return redirect()->back()->with('error', 'Data guru tidak ditemukan!');
        }

        $guru->delete();

        return redirect()->back()->with('success', 'Data guru berhasil dihapus!');
    }
}

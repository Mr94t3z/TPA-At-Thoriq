<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
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

        return redirect()->route('guru')->with('success', 'Guru berhasil diupdate!');
    }

    // Fungsi Delete Guru
    public function delete($id)
    {
        $guru = Guru::find($id);

        if (!$guru) {
            return redirect()->back()->with('error', 'Guru tidak ditemukan!');
        }

        $guru->delete();

        return redirect()->back()->with('success', 'Guru berhasil dihapus!');
    }
}

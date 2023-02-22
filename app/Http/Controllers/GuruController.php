<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    // Fungsi Halaman Create Data Guru
    public function create()
    {
        return view('backend/kelola-pengguna/guru/create');
    }

    // Fungsi Create Data Guru
    public function createAction(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenjang_pendidikan' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'jenjang_pendidikan.required' => 'Jenjang Pendidikan harus diisi!',
            'photo.image' => 'File yang anda upload bukan gambar!',
            'photo.mimes' => 'Format gambar yang anda upload salah!',
            'photo.max' => 'Ukuran gambar maksimal 1MB!',
        ]);

        $guru = new Guru([
            'nama' => $request->nama,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
        ]);

        if ($request->file('photo') == "") {
            $guru->photo = $guru->photo;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($guru->photo);

            // Store the new photo in the uplaods/guru directory
            $guru->photo = $request->file('photo')->store('guru', 'uploads');
        }

        $guru->save();

        return redirect('guru')->with('success', 'Data guru berhasil ditambahkan!');
    }

    // Fungsi Halaman Data Guru
    public function guru(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_guru'] = Guru::where('nama', 'like', '%' . $data['q'] . '%')->orderBy('updated_at', 'DESC')->paginate(5);

        return view('backend/kelola-pengguna/guru/index', $data);
    }

    // Fungsi Halaman Edit Guru
    public function editGuru($id)
    {
        $guru = Guru::find($id);

        if (!$guru) {
            return redirect()->back()->with('error', 'Data guru tidak ditemukan!');
        }

        return view('backend/kelola-pengguna/guru/edit', compact('guru'));
    }


    // Fungsi Edit Guru
    public function update(Request $request, Guru $guru)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenjang_pendidikan' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'jenjang_pendidikan.required' => 'Jenjang Pendidikan harus diisi!',
            'photo.image' => 'File yang anda upload bukan gambar!',
            'photo.mimes' => 'Format gambar yang anda upload salah!',
            'photo.max' => 'Ukuran gambar maksimal 1MB!',
        ]);

        $guru->nama = $validatedData['nama'];
        $guru->jenjang_pendidikan = $validatedData['jenjang_pendidikan'];

        if ($request->file('photo') == "") {
            $guru->photo = $guru->photo;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($guru->photo);

            // Store the new photo in the uplaods/guru directory
            $guru->photo = $request->file('photo')->store('guru', 'uploads');
        }

        $guru->save();

        return redirect()->route('guru')->with('success', 'Data guru berhasil diupdate!');
    }

    // Fungsi Delete Guru
    public function delete($id)
    {
        $guru = Guru::find($id);

        if ($guru->photo !== null) {
            Storage::disk('uploads')->delete($guru->photo);
        } else if (!$guru) {
            return redirect()->back()->with('error', 'Data guru tidak ditemukan!');
        }

        $guru->delete();

        return redirect()->back()->with('success', 'Data guru berhasil dihapus!');
    }
}

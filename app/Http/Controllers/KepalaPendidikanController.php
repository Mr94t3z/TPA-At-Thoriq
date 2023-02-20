<?php

namespace App\Http\Controllers;

use App\Models\KepalaPendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepalaPendidikanController extends Controller
{
    // Fungsi Halaman Kepala Pendidikan
    public function kepalaPendidikan(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_kepala_pendidikan'] = KepalaPendidikan::where('nama', 'like', '%' . $data['q'] . '%')->get();

        return view('backend/kelola-pengguna/kepala-pendidikan/index', $data);
    }

    // Fungsi Halaman Edit Kepala Pendidikan
    public function editKepalaPendidikan($id)
    {
        $kp = KepalaPendidikan::find($id);

        if (!$kp) {
            return redirect()->back()->with('error', 'Data kepala pendidikan tidak ditemukan!');
        }

        return view('backend/kelola-pengguna/kepala-pendidikan/edit', compact('kp'));
    }

    // Fungsi Edit Kepala Pendidikan
    public function update(Request $request, KepalaPendidikan $kp)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'status_kepegawaian' => 'required',
            'pendidikan_terakhir' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'status_kepegawaian.required' => 'Status Kepegawaian harus diisi!',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir harus diisi!',
            'photo.image' => 'File yang anda upload bukan gambar!',
            'photo.mimes' => 'Format gambar yang anda upload salah!',
            'photo.max' => 'Ukuran gambar maksimal 1MB!',
        ]);

        $kp->nama = $validatedData['nama'];
        $kp->status_kepegawaian = $validatedData['status_kepegawaian'];
        $kp->pendidikan_terakhir = $validatedData['pendidikan_terakhir'];

        if ($request->file('photo') == "") {
            $kp->photo = $kp->photo;
        } else {
            // Delete the old photo
            Storage::disk('uploads')->delete($kp->photo);

            // Store the new photo in the profile/photos directory
            $kp->photo = $request->file('photo')->store('kepala-pendidikan', 'uploads');
        }

        $kp->save();

        return redirect()->route('kepala-pendidikan')->with('success', 'Data kepala pendidikan berhasil diupdate!');
    }
}

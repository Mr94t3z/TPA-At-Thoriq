<?php

namespace App\Http\Controllers;

use App\Models\KepalaPendidikan;
use Illuminate\Http\Request;

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
            'pendidikan_terakhir' => 'required'
        ], [
            'nama.required' => 'Nama harus diisi!',
            'status_kepegawaian.required' => 'Status Kepegawaian harus diisi!',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir harus diisi!',
        ]);

        $kp->nama = $validatedData['nama'];
        $kp->status_kepegawaian = $validatedData['status_kepegawaian'];
        $kp->pendidikan_terakhir = $validatedData['pendidikan_terakhir'];

        $kp->save();

        return redirect()->route('kepala-pendidikan')->with('success', 'Data Kepala Pendidikan berhasil diupdate!');
    }
}

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

        return view('backend/data-pengguna/kepala-pendidikan/index', $data);
    }

    // Fungsi Halaman Edit Kepala Pendidikan
    public function editKepalaPendidikan($id)
    {
        $kp = KepalaPendidikan::find($id);
        return view('backend/data-pengguna/kepala-pendidikan/edit', compact('kp'));
    }

    // Fungsi Edit Kepala Pendidikan
    public function update(Request $request, KepalaPendidikan $kp)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'status_kepegawaian' => 'required',
            'pendidikan_terakhir' => 'required'
        ]);

        $kp->nama = $validatedData['nama'];
        $kp->status_kepegawaian = $validatedData['status_kepegawaian'];
        $kp->pendidikan_terakhir = $validatedData['pendidikan_terakhir'];

        $kp->save();

        return redirect()->route('kepala-pendidikan')->with('success', 'Kepala Pendidikan berhasil diupdate!');
    }
}

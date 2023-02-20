<?php

namespace App\Http\Controllers;

use App\Models\PenggunaanLahan;
use Illuminate\Http\Request;

class PenggunaanLahanController extends Controller
{
    // Fungsi Halaman Create Penggunaan Lahan
    public function create()
    {
        return view('backend/sarpras/penggunaan-lahan/create');
    }

    // Fungsi Create Data Penggunaan Lahan
    public function createAction(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'milik' => 'required|numeric',
            'penggunaan' => 'required|numeric',
            'bersertifikat' => 'required|numeric',
            'belum_sertifikat' => 'required|numeric',
        ], [
            'keterangan.required' => 'Keterangan harus diisi!',
            'milik.required' => 'Milik harus diisi!',
            'penggunaan.required' => 'Penggunaan harus diisi!',
            'bersertifikat.required' => 'Bersertifikat harus diisi!',
            'belum_sertifikat.required' => 'Belum Bersertifikat harus diisi!',
            'milik.numeric' => 'Milik harus berupa angka!',
            'penggunaan.numeric' => 'Penggunaan harus berupa angka!',
            'bersertifikat.numeric' => 'Bersertifikat harus berupa angka!',
            'belum_sertifikat.numeric' => 'Belum Bersertifikat harus berupa angka!',
        ]);

        $pl = new PenggunaanLahan([
            'keterangan' => $request->keterangan,
            'milik' => $request->milik,
            'penggunaan' => $request->penggunaan,
            'bersertifikat' => $request->bersertifikat,
            'belum_sertifikat' => $request->belum_sertifikat,
        ]);
        $pl->save();

        return redirect('penggunaan-lahan')->with('success', 'Data penggunaan lahan berhasil ditambahkan!');
    }


    // Fungsi Halaman Data Penggunaan Lahan
    public function penggunaanLahan(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_sarpras_penggunaan_lahan'] = PenggunaanLahan::where('keterangan', 'like', '%' . $data['q'] . '%')->paginate(5);

        return view('backend/sarpras/penggunaan-lahan/index', $data);
    }

    // Fungsi Halaman Edit Penggunaan Lahan
    public function editPenggunaanLahan($id)
    {
        $pl = PenggunaanLahan::find($id);

        if (!$pl) {
            return redirect()->back()->with('error', 'Data penggunaan lahan tidak ditemukan!');
        }

        return view('backend/sarpras/penggunaan-lahan/edit', compact('pl'));
    }

    // Fungsi Edit Penggunaan Lahan
    public function update(Request $request, PenggunaanLahan $pl)
    {
        $validatedData = $request->validate([
            'keterangan' => 'required',
            'milik' => 'required|numeric',
            'penggunaan' => 'required|numeric',
            'bersertifikat' => 'required|numeric',
            'belum_sertifikat' => 'required|numeric',
        ], [
            'keterangan.required' => 'Keterangan harus diisi!',
            'milik.required' => 'Milik harus diisi!',
            'penggunaan.required' => 'Penggunaan harus diisi!',
            'bersertifikat.required' => 'Bersertifikat harus diisi!',
            'belum_sertifikat.required' => 'Belum Bersertifikat harus diisi!',
            'milik.numeric' => 'Milik harus berupa angka!',
            'penggunaan.numeric' => 'Penggunaan harus berupa angka!',
            'bersertifikat.numeric' => 'Bersertifikat harus berupa angka!',
            'belum_sertifikat.numeric' => 'Belum Bersertifikat harus berupa angka!',
        ]);

        $pl->keterangan = $validatedData['keterangan'];
        $pl->milik = $validatedData['milik'];
        $pl->penggunaan = $validatedData['penggunaan'];
        $pl->bersertifikat = $validatedData['bersertifikat'];
        $pl->belum_sertifikat = $validatedData['belum_sertifikat'];

        $pl->save();

        return redirect()->route('penggunaan-lahan')->with('success', 'Data penggunaan lahan berhasil diupdate!');
    }

    // Fungsi Delete Penggunaan Lahan
    public function delete($id)
    {
        $pl = PenggunaanLahan::find($id);

        if (!$pl) {
            return redirect()->back()->with('error', 'Data penggunaan lahan tidak ditemukan!');
        }

        $pl->delete();

        return redirect()->back()->with('success', 'Data penggunaan lahan berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pendukung;
use Illuminate\Http\Request;

class PendukungController extends Controller
{
    // Fungsi Halaman Create Pendukung
    public function create()
    {
        return view('backend/sarpras/pendukung/create');
    }

    // Fungsi Create Data Pendukung
    public function createAction(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'milik' => 'required|numeric',
            'penggunaan' => 'required|numeric',
            'baik' => 'required|numeric',
            'rusak' => 'required|numeric',
        ], [
            'keterangan.required' => 'Keterangan harus diisi!',
            'milik.required' => 'Milik harus diisi!',
            'penggunaan.required' => 'Penggunaan harus diisi!',
            'baik.required' => 'Kondisi baik harus diisi!',
            'rusak.required' => 'Kondisi rusak harus diisi!',
            'milik.numeric' => 'Milik harus berupa angka!',
            'penggunaan.numeric' => 'Penggunaan harus berupa angka!',
            'baik.numeric' => 'Kondisi baik harus berupa angka!',
            'rusak.numeric' => 'Kondisi rusak harus berupa angka!',
        ]);

        $pendukung = new Pendukung([
            'keterangan' => $request->keterangan,
            'milik' => $request->milik,
            'penggunaan' => $request->penggunaan,
            'baik' => $request->baik,
            'rusak' => $request->rusak,
        ]);
        $pendukung->save();

        return redirect('pendukung')->with('success', 'Data sarana dan prasarana pendukung berhasil ditambahkan!');
    }


    // Fungsi Halaman Data Pendukung
    public function pendukung(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_sarpras_pendukung'] = Pendukung::where('keterangan', 'like', '%' . $data['q'] . '%')->paginate(5);

        return view('backend/sarpras/pendukung/index', $data);
    }

    // Fungsi Halaman Edit Pendukung
    public function editPendukung($id)
    {
        $pendukung = Pendukung::find($id);

        if (!$pendukung) {
            return redirect()->back()->with('error', 'Data sarana dan prasarana pendukung tidak ditemukan!');
        }

        return view('backend/sarpras/pendukung/edit', compact('pendukung'));
    }

    // Fungsi Edit Pendukung
    public function update(Request $request, Pendukung $pendukung)
    {
        $validatedData = $request->validate([
            'keterangan' => 'required',
            'milik' => 'required|numeric',
            'penggunaan' => 'required|numeric',
            'baik' => 'required|numeric',
            'rusak' => 'required|numeric',
        ], [
            'keterangan.required' => 'Keterangan harus diisi!',
            'milik.required' => 'Milik harus diisi!',
            'penggunaan.required' => 'Penggunaan harus diisi!',
            'baik.required' => 'Kondisi baik harus diisi!',
            'rusak.required' => 'Kondisi rusak harus diisi!',
            'milik.numeric' => 'Milik harus berupa angka!',
            'penggunaan.numeric' => 'Penggunaan harus berupa angka!',
            'baik.numeric' => 'Kondisi baik harus berupa angka!',
            'rusak.numeric' => 'Kondisi rusak harus berupa angka!',
        ]);

        $pendukung->keterangan = $validatedData['keterangan'];
        $pendukung->milik = $validatedData['milik'];
        $pendukung->penggunaan = $validatedData['penggunaan'];
        $pendukung->baik = $validatedData['baik'];
        $pendukung->rusak = $validatedData['rusak'];

        $pendukung->save();

        return redirect()->route('pendukung')->with('success', 'Data sarana dan prasarana pendukung berhasil diupdate!');
    }

    // Fungsi Delete Pendukung
    public function delete($id)
    {
        $pendukung = Pendukung::find($id);

        if (!$pendukung) {
            return redirect()->back()->with('error', 'Data sarana dan prasarana pendukung tidak ditemukan!');
        }

        $pendukung->delete();

        return redirect()->back()->with('success', 'Data sarana dan prasarana pendukung berhasil dihapus!');
    }
}

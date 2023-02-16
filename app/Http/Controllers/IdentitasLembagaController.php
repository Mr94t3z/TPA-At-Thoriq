<?php

namespace App\Http\Controllers;

use App\Models\IdentitasLembaga;
use Illuminate\Http\Request;

class IdentitasLembagaController extends Controller
{
    // Fungsi Halaman Identitas Lembaga
    public function lembaga(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_identitas_lembaga'] = IdentitasLembaga::where('jenis_lembaga', 'like', '%' . $data['q'] . '%')->get();

        return view('backend/identitas-lembaga/index', $data);
    }

    // Fungsi Halaman Edit Identitas Lembaga
    public function editLembaga($id)
    {
        $lembaga = IdentitasLembaga::find($id);

        if (!$lembaga) {
            return redirect()->back()->with('error', 'Data identitas lembaga tidak ditemukan!');
        }

        return view('backend/identitas-lembaga/edit', compact('lembaga'));
    }

    // Fungsi Edit Identitas Lembaga
    public function update(Request $request, IdentitasLembaga $lembaga)
    {
        $validatedData = $request->validate([
            'jenis_lembaga' => 'nullable',
            'nomor_statistik_lembaga' => 'nullable',
            'nama_lembaga' => 'nullable',
            'no_sk' => 'nullable',
            'tgl_sk' => 'nullable',
            'no_akta_pendirian' => 'nullable',
            'tgl_akta_pendirian' => 'nullable',
            'alamat' => 'nullable',
            'kecamatan' => 'nullable',
            'kabupaten' => 'nullable',
            'provinsi' => 'nullable',
            'kode_pos' => 'nullable',
            'no_telp' => 'nullable',
            'no_fax' => 'nullable',
            'email' => 'nullable',
            'website' => 'nullable',
            'titik_koordinat' => 'nullable',
            'akreditasi' => 'nullable',
        ]);

        $lembaga->jenis_lembaga = $validatedData['jenis_lembaga'];
        $lembaga->nomor_statistik_lembaga = $validatedData['nomor_statistik_lembaga'];
        $lembaga->nama_lembaga = $validatedData['nama_lembaga'];
        $lembaga->no_sk = $validatedData['no_sk'];
        $lembaga->tgl_sk = $validatedData['tgl_sk'];
        $lembaga->no_akta_pendirian = $validatedData['no_akta_pendirian'];
        $lembaga->tgl_akta_pendirian = $validatedData['tgl_akta_pendirian'];
        $lembaga->alamat = $validatedData['alamat'];
        $lembaga->kecamatan = $validatedData['kecamatan'];
        $lembaga->kabupaten = $validatedData['kabupaten'];
        $lembaga->provinsi = $validatedData['provinsi'];
        $lembaga->kode_pos = $validatedData['kode_pos'];
        $lembaga->no_telp = $validatedData['no_telp'];
        $lembaga->no_fax = $validatedData['no_fax'];
        $lembaga->email = $validatedData['email'];
        $lembaga->website = $validatedData['website'];
        $lembaga->titik_koordinat = $validatedData['titik_koordinat'];
        $lembaga->akreditasi = $validatedData['akreditasi'];

        $lembaga->save();

        return redirect()->route('lembaga')->with('success', 'Data identitas lembaga berhasil diupdate!');
    }
}

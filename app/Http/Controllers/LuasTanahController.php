<?php

namespace App\Http\Controllers;

use App\Models\LuasTanah;
use Illuminate\Http\Request;

class LuasTanahController extends Controller
{
    // Fungsi Halaman Create Luas Tanah
    public function create()
    {
        return view('backend/sarpras/luas-tanah/create');
    }

    // Fungsi Create Data Luas Tanah
    public function createAction(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'luas' => 'required',
        ], [
            'keterangan.required' => 'Keterangan harus diisi!',
            'luas.required' => 'Luas harus diisi!',
        ]);

        $lt = new LuasTanah([
            'keterangan' => $request->keterangan,
            'luas' => $request->luas,
        ]);
        $lt->save();

        return redirect('luas-tanah')->with('success', 'Data luas tanah berhasil ditambahkan!');
    }


    // Fungsi Halaman Data Luas Tanah
    public function luasTanah(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_sarpras_luas_tanah'] = LuasTanah::where('keterangan', 'like', '%' . $data['q'] . '%')->paginate(5);

        return view('backend/sarpras/luas-tanah/index', $data);
    }

    // Fungsi Halaman Edit Luas Tanah
    public function editLuasTanah($id)
    {
        $lt = LuasTanah::find($id);

        if (!$lt) {
            return redirect()->back()->with('error', 'Data luas tanah tidak ditemukan!');
        }

        return view('backend/sarpras/luas-tanah/edit', compact('lt'));
    }

    // Fungsi Edit Luas Tanah
    public function update(Request $request, LuasTanah $lt)
    {
        $validatedData = $request->validate([
            'keterangan' => 'required',
            'luas' => 'required',
        ], [
            'keterangan.required' => 'Keterangan harus diisi!',
            'luas.required' => 'Luas harus diisi!',
        ]);

        $lt->keterangan = $validatedData['keterangan'];
        $lt->luas = $validatedData['luas'];

        $lt->save();

        return redirect()->route('luas-tanah')->with('success', 'Data luas tanah berhasil diupdate!');
    }

    // Fungsi Delete Luas Tanah
    public function delete($id)
    {
        $lt = LuasTanah::find($id);

        if (!$lt) {
            return redirect()->back()->with('error', 'Data luas tanah tidak ditemukan!');
        }

        $lt->delete();

        return redirect()->back()->with('success', 'Data luas tanah berhasil dihapus!');
    }
}

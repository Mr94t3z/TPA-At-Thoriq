<?php

namespace App\Http\Controllers;

use App\Models\ListrikDanInternet;
use Illuminate\Http\Request;

class ListrikDanInternetController extends Controller
{

    // Fungsi Halaman Data Listrik & Internet
    public function listrikDanInternet(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['tbl_sarpras_listrik_dan_internet'] = ListrikDanInternet::where('listrik_daya', 'like', '%' . $data['q'] . '%')->get();

        return view('backend/sarpras/listrik-dan-internet/index', $data);
    }

    // Fungsi Halaman Edit Listrik & Internet
    public function editListrikDanInternet($id)
    {
        $lni = ListrikDanInternet::find($id);

        if (!$lni) {
            return redirect()->back()->with('error', 'Data listrik dan internet tidak ditemukan!');
        }

        return view('backend/sarpras/listrik-dan-internet/edit', compact('lni'));
    }

    // Fungsi Edit Listrik & Internet
    public function update(Request $request, ListrikDanInternet $lni)
    {
        $validatedData = $request->validate([
            'listrik_daya' => 'required',
            'listrik_sumber' => 'required',
            'internet_provider' => 'required',
            'internet_kualitas' => 'required',
        ], [
            'listrik_daya.required' => 'Daya Listrik harus diisi!',
            'listrik_sumber.required' => 'Sumber Listrik harus diisi!',
            'internet_provider.required' => 'Internet Provider harus diisi!',
            'internet_kualitas.required' => 'Kualitas Internet harus diisi!',
        ]);

        $lni->listrik_daya = $validatedData['listrik_daya'];
        $lni->listrik_sumber = $validatedData['listrik_sumber'];
        $lni->internet_provider = $validatedData['internet_provider'];
        $lni->internet_kualitas = $validatedData['internet_kualitas'];

        $lni->save();

        return redirect()->route('listrik-dan-internet')->with('success', 'Data listrik dan internet pendukung berhasil diupdate!');
    }
}

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

        return view('backend/lembaga', $data);
    }
}

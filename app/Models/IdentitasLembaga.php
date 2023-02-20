<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasLembaga extends Model
{
    use HasFactory;

    protected $table = 'tbl_identitas_lembaga';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jenis_lembaga', 'nomor_statistik_lembaga', 'nama_lembaga', 'no_sk', 'tgl_sk', 'no_akta_pendirian', 'tgl_akta_pendirian', 'alamat', 'kecamatan', 'kabupaten', 'provinsi', 'kode_pos', 'no_telp', 'no_fax', 'email', 'website', 'titik_koordinat', 'akreditasi'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaanLahan extends Model
{
    use HasFactory;

    protected $table = 'tbl_sarpras_penggunaan_lahan';
    protected $primaryKey = 'id';

    protected $fillable = ['keterangan', 'milik', 'penggunaan', 'bersertifikat', 'belum_sertifikat'];
}

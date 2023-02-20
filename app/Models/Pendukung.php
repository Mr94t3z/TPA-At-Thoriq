<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendukung extends Model
{
    use HasFactory;

    protected $table = 'tbl_sarpras_pendukung';
    protected $primaryKey = 'id';

    protected $fillable = ['keterangan', 'milik', 'penggunaan', 'baik', 'rusak'];
}

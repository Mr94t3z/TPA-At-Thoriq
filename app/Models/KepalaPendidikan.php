<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaPendidikan extends Model
{
    use HasFactory;

    protected $table = 'tbl_kepala_pendidikan';
    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'status_kepegawaian', 'pendidikan_terakhir'];
}

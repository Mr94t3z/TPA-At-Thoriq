<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'tbl_siswa_aktif';
    protected $primaryKey = 'id';

    protected $fillable = ['nisn', 'nama', 'jenis_kelamin', 'kelas'];
}

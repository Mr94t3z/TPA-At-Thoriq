<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuasTanah extends Model
{
    use HasFactory;

    protected $table = 'tbl_sarpras_luas_tanah';
    protected $primaryKey = 'id';

    protected $fillable = ['keterangan', 'luas'];
}

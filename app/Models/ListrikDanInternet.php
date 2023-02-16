<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListrikDanInternet extends Model
{
    use HasFactory;

    protected $table = 'tbl_sarpras_listrik_dan_internet';
    protected $primaryKey = 'id';

    protected $fillable = ['listrik_daya', 'listrik_sumber', 'internet_provider', 'internet_kualitas'];
}

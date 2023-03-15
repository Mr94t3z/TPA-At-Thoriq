<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $table = 'tbl_website';
    protected $primaryKey = 'id';

    protected $fillable = ['logo', 'link_pendaftaran', 'welcome_message', 'welcome_video', 'quote_message', 'quote_by', 'maps_latitude', 'maps_longitude', 'maps_video', 'visi', 'visi_video', 'misi', 'misi_video', 'fasilitas_image'];
}

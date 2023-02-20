<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;

    protected $table = 'tbl_users';
    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'email', 'password', 'roles'];
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert INTO tbl_users
        DB::table('tbl_users')->insert([
            'nama' => 'Muhamad Taopik',
            'email' => 'muhamadtaopik@gmail.com',
            'password' => Hash::make('1q2w3e4r')
        ]);
    }
}

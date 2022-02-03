<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'num_emp' => '9999999',
            'perfil' => 'A',
            'name' => 'ADMINISTRADOR DEL SISTEMA',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        DB::table('users')->insert([
            'num_emp' => '10002',
            'name' => 'PEREZ LOPEZ MARIA',
            'email' => 'u10002@gmail.com',
            'password' => Hash::make('u10002'),
        ]);
    }
}

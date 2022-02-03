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
            'password' => Hash::make('4dm1n'),
        ]);
        DB::table('users')->insert([
            'num_emp' => '26084',
            'name' => 'BURGOS FUENTES MARIA AZUCENA',
            'email' => 'u26084@gmail.com',
            'password' => Hash::make('u26084'),
        ]);
    }
}

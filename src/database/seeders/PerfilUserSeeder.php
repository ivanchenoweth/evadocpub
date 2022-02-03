<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilUserSeeder extends Seeder
{    
    public function run()
    {
        DB::table('perfil_user')->insert([
            'cve_perfil_usuario' => 'U',
            'descripcion' => 'Uusario Evaluador',
        ]);
        DB::table('perfil_user')->insert([
            'cve_perfil_usuario' => 'A',
            'descripcion' => 'Administrador',
        ]);
    }
}
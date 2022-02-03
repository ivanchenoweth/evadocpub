<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolaridadSeeder extends Seeder
{    
    public function run()
    {
        DB::table('escolaridad')->insert([
            'cve_escolaridad' => '298',
            'descripcion' => 'Primaria',
        ]);
        DB::table('escolaridad')->insert([
            'cve_escolaridad' => '299',
            'descripcion' => 'Secundaria',
        ]);
        DB::table('escolaridad')->insert([  
            'cve_escolaridad' => '300',
            'descripcion' => 'Preparatoria',
        ]);
        DB::table('escolaridad')->insert([  
            'cve_escolaridad' => '301',
            'descripcion' => 'Técnica',
        ]);
        DB::table('escolaridad')->insert([  
            'cve_escolaridad' => '302',
            'descripcion' => 'Profesional',
        ]);
        DB::table('escolaridad')->insert([  
            'cve_escolaridad' => '303',
            'descripcion' => 'Especialización',
        ]);
        DB::table('escolaridad')->insert([  
            'cve_escolaridad' => '304',
            'descripcion' => 'Maestría',
        ]);
        DB::table('escolaridad')->insert([  
            'cve_escolaridad' => '305',
            'descripcion' => 'Doctorado',
        ]);
    }
}
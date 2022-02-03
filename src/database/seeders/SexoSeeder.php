<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexoSeeder extends Seeder
{    
    public function run()
    {
        DB::table('sexo')->insert([  
            'cve_sexo' => '296',
            'descripcion' => 'Masculino',
        ]);
        DB::table('sexo')->insert([            
            'cve_sexo' => '297',
            'descripcion' => 'Femenino',
        ]);
    }
}
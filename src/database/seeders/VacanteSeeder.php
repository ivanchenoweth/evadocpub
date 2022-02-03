<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacanteSeeder extends Seeder
{    
    public function run()
    {
        DB::table('vacante')->insert([  
            'cve_vacante' => '341',
            'descripcion' => 'Si',
        ]);
        DB::table('vacante')->insert([  
            'cve_vacante' => '342',
            'descripcion' => 'No',
        ]);
    }
}
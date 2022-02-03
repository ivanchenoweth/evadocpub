<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlazasSeeder extends Seeder
{    
    public function run()
    {
        DB::table('plazas')->insert([  
            'cve_plaza' => '001',
            'descripcion' => 'BASE',
        ]);
        DB::table('plazas')->insert([  
            'cve_plaza' => '002',
            'descripcion' => 'CONFIANZA',
        ]);
        DB::table('plazas')->insert([  
            'cve_plaza' => '003',
            'descripcion' => 'TEMPORAL',
        ]);        
    }
}
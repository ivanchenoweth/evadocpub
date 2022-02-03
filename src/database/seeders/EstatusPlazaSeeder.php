<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusPlazaSeeder extends Seeder
{    
    public function run()
    {
        DB::table('estatus_plaza')->insert([  
            'cve_estatus_plaza' => '339',
            'descripcion' => 'Activa',
        ]);
        DB::table('estatus_plaza')->insert([  
            'cve_estatus_plaza' => '340',
            'descripcion' => 'Inactiva',
        ]); 
    }
}
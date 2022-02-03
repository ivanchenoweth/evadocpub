<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SindicalizadoSeeder extends Seeder
{    
    public function run()
    {
        DB::table('sindicalizado')->insert([  
            'cve_sindicalizado' => '317',
            'descripcion' => 'Si',
        ]);
        DB::table('sindicalizado')->insert([  
            'cve_sindicalizado' => '318',
            'descripcion' => 'No',
        ]);
    }
}
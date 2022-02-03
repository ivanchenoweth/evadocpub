<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipodependenciasSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipo_dependencia')->insert([  
            'cve_tipo_dependencia' => 'D',
            'descripcion' => 'DEPENDENCIA',
        ]);
        DB::table('tipo_dependencia')->insert([            
            'cve_tipo_dependencia' => 'E',
            'descripcion' => 'ENTIDAD',
        ]);
    }
}

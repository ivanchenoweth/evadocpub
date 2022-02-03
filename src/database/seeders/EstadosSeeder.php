<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{    
    public function run()
    {
        // pendiente los demás estados, clasificación federal
        DB::table('estados')->insert([
            'cve_estado' => '26',
            'descripcion' => 'Sonora',
        ]);
    }
}


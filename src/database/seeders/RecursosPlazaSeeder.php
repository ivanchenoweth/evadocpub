<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecursosPlazaSeeder extends Seeder
{    
    public function run()
    {
        DB::table('recursos_plaza')->insert([  
            'cve_recursos_plaza' => '319',
            'descripcion' => 'Estatal',
        ]);
        DB::table('recursos_plaza')->insert([  
            'cve_recursos_plaza' => '320',
            'descripcion' => 'Federal',
        ]);
        DB::table('recursos_plaza')->insert([  
            'cve_recursos_plaza' => '321',
            'descripcion' => 'Mixto',
        ]);
        DB::table('recursos_plaza')->insert([  
            'cve_recursos_plaza' => '322',
            'descripcion' => 'Propios',
        ]);
    }
}
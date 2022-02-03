<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPlazaSeeder extends Seeder
{    
    public function run()
    {
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '001',
            'descripcion' => 'ACTIVO',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '002',
            'descripcion' => 'ACTIVO - PREJUBILACION',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '003',
            'descripcion' => 'Lic. Sin Goce de Sueldo',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '004',
            'descripcion' => 'PROCESO ADMON',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '005',
            'descripcion' => 'PROCESO PENAL',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '006',
            'descripcion' => 'SUSPENDIDO ART 100',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '007',
            'descripcion' => 'SUSPENDIDO ART 99',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '008',
            'descripcion' => 'SUSPENSION DE CHEQUE',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '009',
            'descripcion' => 'SUSPENSION POR INCAPACIDAD TOTAL PERMANENTE PROVISIONAL',
        ]);
        DB::table('tipo_plaza')->insert([  
            'cve_tipo_plaza' => '010',
            'descripcion' => 'SUSPENSION POR INVALIDEZ PROVISIONAL',
        ]);
    }
}
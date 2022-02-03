<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEmpleadoSeeder extends Seeder
{    
    public function run()
    {
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '306',
            'descripcion' => 'Base',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '307',
            'descripcion' => 'Base Interino',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '308',
            'descripcion' => 'Becario',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '309',
            'descripcion' => 'Confianza',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '310',
            'descripcion' => 'Eventual',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '311',
            'descripcion' => 'Honorarios',
        ]);        
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '312',
            'descripcion' => 'Interino',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '313',
            'descripcion' => 'Obra Determinada',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '314',
            'descripcion' => 'Suplente Fijo',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '315',
            'descripcion' => 'Suplente Variable',
        ]);
        DB::table('tipo_empleado')->insert([  
            'cve_tipo_empleado' => '316',
            'descripcion' => 'Temporal',
        ]);
    }
}
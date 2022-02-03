<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuestoOficialSeeder extends Seeder
{    
    public function run()
    {
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '323',
            'descripcion' => 'Oficial Administrativo o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '324',
            'descripcion' => 'Coordinador Administrativo o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '325',
            'descripcion' => 'Jefe de Área o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '326',
            'descripcion' => 'Jefe de Sección o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '327',
            'descripcion' => 'Analista Técnico o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '328',
            'descripcion' => 'Coordinador Técnico o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '329',
            'descripcion' => 'Coordinador de Área o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '330',
            'descripcion' => 'Profesionista Especializado o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '331',
            'descripcion' => 'Administrador de Proyectos o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '332',
            'descripcion' => 'Jefe de Departamento o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '333',
            'descripcion' => 'Subdirector General  o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '334',
            'descripcion' => 'Director de Área o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '335',
            'descripcion' => 'Director General  o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '336',
            'descripcion' => 'Subsecretario o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '337',
            'descripcion' => 'Secretario o Puesto Homólogo',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '338',
            'descripcion' => 'Gobernador',
        ]);
        DB::table('puesto_oficial')->insert([  
            'cve_puesto_oficial' => '343',
            'descripcion' => 'Federal',
        ]);
    }
}
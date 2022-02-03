<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert([            
            'cve_periodo' => '211',
            'descripcion' => 'PRIMER PERIODO DEL 2021',
            'fecha_ini' => '20210101',
            'fecha_fin' => '20210630',
        ]);
        DB::table('periodos')->insert([            
            'cve_periodo' => '212',
            'descripcion' => 'SEGUNDO PERIODO DEL 2021',
            'fecha_ini' => '20210701',
            'fecha_fin' => '20211231',
        ]);
    }
}


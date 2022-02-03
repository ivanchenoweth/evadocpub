<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluadores')->insert([
            'ne_jefe' => '26084',
            'tot_evaluar' => '6', 
            'tot_evaluado' => '0', 
            'pen_evaluar' => '6', 
            'fk_cve_area' => '052403',
            'puesto' => 'SUBSECRETARIO DE RECURSOS HUMANOS',             
        ]);

    }
}
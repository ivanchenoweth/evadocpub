<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantillaRHSeeder extends Seeder
{ 
    public function run()
    {               
        DB::table('plantillaRH')->insert([
            'fk_num_emp' => '27264', // WILY EDGAR ARIAS PARRA
            'fk_cve_dependencia' => '05', // SEC. HACIENDA
            'fk_cve_unidad' => '0507', // SIIAF
            'fk_cve_area' => '050701', // SIIAF
            'fk_cve_plaza' => '001', // Base
            'fk_cve_tipo_plaza' => '001', // Activo
        ]);
        DB::table('plantillaRH')->insert([
            'fk_num_emp' => '27264', // CARLOS CORDOVA NAVARRO
            'fk_cve_dependencia' => '05', // SEC. HACIENDA
            'fk_cve_unidad' => '0507', // SIIAF
            'fk_cve_area' => '050701', // SIIAF
            'fk_cve_plaza' => '001', // Base
            'fk_cve_tipo_plaza' => '001', // Activo
        ]);
    }
}
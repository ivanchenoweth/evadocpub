<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormatoDAPSeeder extends Seeder
{ 
    public function run()
    {        
        DB::table('formatoDAP')->insert([
            'fk_num_emp' => '27264', // CARLOS CORDOVA NAVARRO
            'profesion' => 'Maestría en CIencias Computacionales', 
            'tel_oficina'=> '217-5295 Y 07 EXT. 4404, 1084000, 1084090', 
            'cod_postal'=> '83100', 
            'ta1_inicio_mesanio'=> '012014', 
            'ta1_fin_mesanio'=> '', 
            'ta1_cargo'=> 'Director de Informatica', 
            'ta1_campoexperiencia'=> 'Lider de Tecnología de Proyecto de Implementación y Soporte de SAP.', 
            'ta1_empresa'=> 'Dirección General del Sistema de Información Financiera de la Secretaría de Hacienda del Gobierno del Estado de Sonora', 
            'ta2_inicio_mesanio'=> '012009', 
            'ta2_fin_mesanio'=> '122013', 
            'ta2_cargo'=> 'Director de Innovación', 
            'ta2_campoexperiencia'=> 'Diseño y Desarrollo de Soluciones de Tecnologias de Información. Entre otros Desarrollos, Desarrollo de Expediente Electrónico para el Centro de Control y Confinaza, Semaforo Delictivo. Y Arquitectura del Sistema de Consulta Operativa Policiaca.', 
            'ta2_empresa'=> 'Secretaría de Seguridad Publica del Gobierno del Estado de Sonora', 
            'ta3_inicio_mesanio'=> '012007', 
            'ta3_fin_mesanio'=> '012009', 
            'ta3_cargo'=> 'Desarrollador de Sistemas', 
            'ta3_campoexperiencia'=> 'Diseño y Desarrollo de Soluciones de Tecnologías de la Información.', 
            'ta3_empresa'=> 'SDI MEXICO SA DE CV', 
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 6 empleados debe evaluar fk_ne_jefe 26084 
        // BURGOS FUENTES MARIA AZUCENA
        // area: 
        DB::table('evaluados')->insert([
            'num_emp' => '37441',
            'nombre' => 'ROMO ASTIAZARAN CRISTINA',
            'puesto' => 'DIRECTOR',
            'puesto_funcional' => 'DIRECTOR JURIDICO',
            'nivel' => '11I',
            'fk_ne_jefe' => '26084',
            'fk_cve_area' => '052403',
            'r1' => '5',
            'r2' => '5',
            'r3' => '5',
            'r4' => '5',
            'r5' => '5',
            'r6' => '5',
            'r7' => '5',
            'r8' => '5',
            'r9' => '5',
            'r10' => '5',
            'r11' => '5',
            'r12' => '5',
            'r13' => '5',
            'r14' => '5',
            'r15' => '5',
            'r16' => '5',
            'r17' => '5',
            'r18' => '5',
            'r19' => '5',
            'r20' => '5',
            'r21' => '5',
            'r22' => '5',
            'r23' => '5',
            'r24' => '5',
            'r25' => '5',
            'r26' => '5',
            'r27' => '5',
            'r28' => '5',
            'r29' => '5',
            'r30' => '4',
            'suma' => '149',
            'promedio' => '4.966',
            'areas_opor'  => ' ',
        ]);
        DB::table('evaluados')->insert([
            'num_emp' => '41668',
            'nombre' => 'LEAL NAVA BRENDA YOLANDA',
            'puesto' => 'ANALISTA TECNICO',
            'puesto_funcional' => 'ASISTENTE',
            'nivel' => '7B',
            'fk_ne_jefe' => '26084',
            'fk_cve_area' => '052403',  
            'areas_opor'  => ' ',          
        ]);
        DB::table('evaluados')->insert([
            'num_emp' => '31024',
            'nombre' => 'ZARAGOZA DIAZ ANA MARIA',
            'puesto' => 'DIRECTOR',
            'puesto_funcional' => 'DIRECTOR ADMINISTRATIVO',
            'nivel' => '11I',
            'fk_ne_jefe' => '26084',
            'fk_cve_area' => '052403', 
            'areas_opor'  => ' ',           
        ]);
        DB::table('evaluados')->insert([
            'num_emp' => '23281',
            'nombre' => 'BRISEÑO MENDOZA DORA ARMIDA',
            'puesto' => 'DIRECTOR',
            'puesto_funcional' => 'DIRECTOR DE ADMNINISTRACION Y OPERACIÓN DE NOMINA',
            'nivel' => '11I',
            'fk_ne_jefe' => '26084',
            'fk_cve_area' => '052403', 
            'areas_opor'  => ' ',          
        ]);
        DB::table('evaluados')->insert([
            'num_emp' => '18318',
            'nombre' => 'ROMERO BARANZINI LUIS CARLOS',
            'puesto' => 'DIRECTOR GENERAL',
            'puesto_funcional' => 'DIRECTOR DE ADMINISTRACION DE RECURSOS HUMANOS',
            'nivel' => '12I',
            'fk_ne_jefe' => '26084',
            'fk_cve_area' => '052403',  
            'areas_opor'  => ' ',         
        ]);
        DB::table('evaluados')->insert([
            'num_emp' => '29570',
            'nombre' => 'BARRIOS MORENO LEONEL',
            'puesto' => 'DIRECTOR GENERAL',
            'puesto_funcional' => 'DIRECTOR GENERAL DE SISTEMAS Y PROCESOS DE NOMINA',
            'nivel' => '12I',
            'fk_ne_jefe' => '26084',
            'fk_cve_area' => '052403',  
            'areas_opor'  => ' ',          
        ]);
    }
}


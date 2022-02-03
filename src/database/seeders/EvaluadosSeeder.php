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
        // 1 empleados debe evaluar fk_ne_jefe 10001 
        // MARIA PEREZ LOPEZ
        // area: 
        DB::table('evaluados')->insert([
            'num_emp' => '10003',
            'nombre' => 'JOSE LOPEZ LOPEZ',
            'puesto' => 'DIRECTOR',
            'puesto_funcional' => 'DIRECTOR JURIDICO',
            'nivel' => '11I',
            'fk_ne_jefe' => '10002',
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
    }
}
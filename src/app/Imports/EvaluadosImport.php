<?php

namespace App\Imports;

use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Evaluados;

class EvaluadosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new evaluados([
            'num_emp'  => $row['num_emp'],
            'nombre'  => $row['nombre'],
            'puesto'  => $row['puesto'],
            'nivel'  => $row['nivel'],
            'fk_ne_jefe'  => $row['fk_ne_jefe'],
            'evaluado'  => $row['evaluado'],
            'nom_repr'  => $row['nom_repr'],
            'impreso'  => $row['impreso'],
            'r1'  => $row['r1'],
            'r2'  => $row['r2'],
            'r3'  => $row['r3'],
            'r4'  => $row['r4'],
            'r5'  => $row['r5'],
            'r6'  => $row['r6'],
            'r7'  => $row['r7'],
            'r8'  => $row['r8'],
            'r9'  => $row['r9'],
            'r10'  => $row['r10'],
            'r11'  => $row['r11'],
            'r12'  => $row['r12'],
            'r13'  => $row['r13'],
            'r14'  => $row['r14'],
            'r15'  => $row['r15'],
            'r16'  => $row['r16'],
            'r17'  => $row['r17'],
            'r18'  => $row['r18'],
            'r19'  => $row['r19'],
            'r20'  => $row['r20'],
            'r21'  => $row['r21'],
            'r22'  => $row['r22'],
            'r23'  => $row['r23'],
            'r24'  => $row['r24'],
            'r25'  => $row['r25'],
            'r26'  => $row['r26'],
            'r27'  => $row['r27'],
            'r28'  => $row['r28'],
            'r29'  => $row['r29'],
            'r30'  => $row['r30'],
            'suma'  => $row['suma'],
            'promedio'  => $row['promedio'],
            'areas_opor'  => $row['areas_opor'],
            'correo'  => $row['correo'],
            'grado_dominio'  => $row['grado_dominio'],
            'dependencia'  => $row['dependencia'],            
            'unidad_admva'  => $row['unidad_admva'],
            'area'  => $row['area'],
        ]);
    }
}
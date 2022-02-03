<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Evaluados;

class EvaluadosExport implements FromCollection, WithHeadings
{
    
    public function collection()
    {
        //
        //dd(Evaluados::all());
        return Evaluados::all();
    }
    
    public function headings(): array
    {
        //				
        return [
            "id",
            "periodo", 
            "num_emp",
            "nombre",
            "puesto",
            "puesto_funcional",
            "nivel",
            "fk_ne_jefe",
            "evaluado", 
            "nom_repr",
            "impreso",
            "r1","r2","r3","r4","r5","r6","r7","r8","r9","r10","r11","r12","r13","r14",
            "r15","r16","r17","r18","r19","r20","r21","r22","r23","r24","r25","r26","r27","r28",
            "r29","r30",
            "suma",
            "promedio",
            "areas_opor",
            "correo",
            "grado_dominio",
            "fk_cve_area",
            "fecha_eva",
            "fecha_imp",
            "fecha_val",
            "validado",
            "fecha_rec",
            "recibido",
            "observaciones",
            "creado",
            "actualizado"
            ];
    }
}

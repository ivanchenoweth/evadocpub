<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Evaluadores;

class EvaluadoresExport implements FromCollection, WithHeadings
{
    
    public function collection()
    {
        return evaluadores::all();
    }
    public function headings(): array
    {
        //				
        return [
            "id",
            "ult_periodo",
            "ne_jefe",
            "tot_evaluar",
            "tot_evaluado",
            "pen_evaluar",
            "fk_cve_area",
            "puesto",
            "creado",
            "actualizado"
            ];
    }
}

<?php

namespace App\Imports;

use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Evaluadores;

class EvaluadoresImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Evaluadores([
            'fk_cve_periodo_ultimo'  => $row['periodo'],
            'ne_jefe'  => $row['ne_jefe'],
            'tot_evaluar'  => $row['tot_evaluar'],
            'tot_evaluado'  => $row['tot_evaluado'],
            'pen_evaluar'  => $row['pen_evaluar'],
            'fk_cve_area'  => $row['cve_area'],
            'puesto'  => $row['puesto'],            
        ]);
    }
}
<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    
    public function collection()
    {
        return User::all();
    }
    
    public function headings(): array
    {
        return ["id","num_emp","perfil","nombre","correo","fecha_verif_correo",
            "creado","actualizado"
            ];
    }    
}

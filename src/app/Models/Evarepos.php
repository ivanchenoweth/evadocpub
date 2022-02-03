<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evarepos extends Model
{
    use HasFactory; 
    use SoftDeletes;   
    protected $fillable = [
        'num_emp',
        'periodo',
        'nombre',
        'puesto',
        'nivel',
        'fk_ne_jefe',
        'evaluado',        
        'nom_repr',        
        'impreso',
        'r1',
        'r2',
        'r3',
        'r4',
        'r5',
        'r6',
        'r7',
        'r8',
        'r9',
        'r10',
        'r11',
        'r12',
        'r13',
        'r14',
        'r15',
        'r16',
        'r17',
        'r18',
        'r19',
        'r20',
        'r21',
        'r22',
        'r23',
        'r24',
        'r25',
        'r26',
        'r27',
        'r28',
        'r29',
        'r30',
        'suma',
        'promedio',
        'areas_opor',
        'correo',
        'grado_dominio',
        'dependencia',        
        'unidad_admva',
        'area',     
    ];
    protected $table = 'evaluados';
}
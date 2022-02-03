<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluados extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'num_emp',
        'fk_cve_periodo',
        'nombre',
        'puesto',
        'puesto_funcional',
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
        'fk_cve_area',
        'areas_opor',
        'correo',
        'grado_dominio', 
        'validado', 
        'fecha_eva',       
        'fecha_imp',
        'fecha_val',
        'validado',
        'fecha_rec',
        'recibido',
        'observaciones',        
    ];
    public function periodos () {
        return $this->hasMany(Periodos::Class);
    }    
    public function evaluadores () {
        return $this->hasMany(Evaluadores::Class);
    }    
    public function areas() {
        return $this->hasMany(Areas::Class);
    }
    public function unidades() {
        return $this->hasMany(Unidades::Class);
    }
    public function dependencias() {
        return $this->hasMany(Dependencias::Class);
    }    
    public function users () {
        return $this->hasMany(User::Class);
    }
}
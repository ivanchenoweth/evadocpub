<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluadores extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'fk_cve_periodo_ultimo',
        'ne_jefe',
        'tot_evaluar',
        'tot_evaluado',
        'pen_evaluar',
        'fk_cve_area',
        'puesto',
    ];
    public function evaluados() {
        return $this->hasMany(Evaluados::Class);
    }
    public function periodos() {
        return $this->hasMany(Periodos::Class);
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
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dependencias extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'fk_cve_tipo_dependencia',        
        'cve_dependencia',
        'descripcion',
    ];
    //protected $table = 'unidades';
    public function tipoDependencia () {
        return $this->hasMany(TipoDependencias::Class);
    }
}

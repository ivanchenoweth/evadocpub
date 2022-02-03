<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_cve_dependencia',
        'cve_unidad',
        'descripcion',
    ];
    //protected $table = 'dependencias';
    public function dependencias () {
        return $this->hasMany(Dependencias::Class);
    }
}

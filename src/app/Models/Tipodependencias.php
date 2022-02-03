<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDependencias extends Model
{
    use HasFactory;
    protected $fillable = [
        'cve_tipo_dependencia',
        'descripcion',
    ];
    protected $table = 'tipo_dependencia';
}

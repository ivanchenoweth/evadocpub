<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion',
        'fecha_ini',
        'fecha_fin',
    ];
}

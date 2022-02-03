<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Areas extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'fk_cve_unidad',
        'cve_area',
        'descripcion',
    ];
    public function unidades () {
        return $this->hasMany(Unidades::Class);
    }
}

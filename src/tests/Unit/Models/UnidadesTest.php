<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Unidades;

class UnidadesTest extends TestCase
{
    public function test_a_unidad_has_many_dependencias()
    {
        $unidad = new Unidades;
        $this->assertInstanceOf(Collection::class, $unidad->dependencias);
    }
}
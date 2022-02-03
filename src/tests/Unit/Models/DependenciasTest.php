<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Dependencias;

class DependenciasTest extends TestCase
{
    public function test_a_dependencia_has_many_tipo_dependencia()
    {
        $dependencia = new Dependencias;
        $this->assertInstanceOf(Collection::class, $dependencia->tipodependencia);
    }
}
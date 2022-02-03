<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Evaluados;

class EvaluadoTest extends TestCase
{
    public function test_a_evaluado_has_many_periodos()
    {
        $evaluado = new Evaluados;
        $this->assertInstanceOf(Collection::class, $evaluado->periodos);
    }
    public function test_a_evaluado_has_many_areas()
    {
        $evaluado = new Evaluados;
        $this->assertInstanceOf(Collection::class, $evaluado->areas);
    }
    public function test_a_evaluado_has_many_unidades()
    {
        $evaluado = new Evaluados;
        $this->assertInstanceOf(Collection::class, $evaluado->unidades);
    }
    public function test_a_evaluado_has_many_dependencias()
    {
        $evaluado = new Evaluados;
        $this->assertInstanceOf(Collection::class, $evaluado->dependencias);
    }
    public function test_a_evaluado_has_many_evaluadores()
    {
        $evaluado = new Evaluados;
        $this->assertInstanceOf(Collection::class, $evaluado->evaluadores);
    }
}
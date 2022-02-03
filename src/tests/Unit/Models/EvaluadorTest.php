<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Evaluadores;

class EvaluadorTest extends TestCase
{
    public function test_a_evaluador_has_many_evaluados()
    {
        $evaluador = new Evaluadores;
        $this->assertInstanceOf(Collection::class, $evaluador->evaluados);
    }
    public function test_a_evaluador_has_many_periodos()
    {
        $evaluador = new Evaluadores;
        $this->assertInstanceOf(Collection::class, $evaluador->periodos);
    }
    public function test_a_evaluador_has_many_areas()
    {
        $evaluador = new Evaluadores;
        $this->assertInstanceOf(Collection::class, $evaluador->areas);
    }
    public function test_a_evaluador_has_many_unidades()
    {
        $evaluador = new Evaluadores;
        $this->assertInstanceOf(Collection::class, $evaluador->unidades);
    }
    public function test_a_evaluador_has_many_dependencias()
    {
        $evaluador = new Evaluadores;
        $this->assertInstanceOf(Collection::class, $evaluador->dependencias);
    }
    public function test_a_evaluador_has_many_users()
    {
        $evaluador = new Evaluadores;
        $this->assertInstanceOf(Collection::class, $evaluador->users);
    }  
}
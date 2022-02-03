<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Areas;

class AreasTest extends TestCase
{
    public function test_a_area_has_many_unidades()
    {
        $area = new Areas;
        $this->assertInstanceOf(Collection::class, $area->unidades);
    }
}
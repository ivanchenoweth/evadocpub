<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoEmpleadoTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_empleado', function (Blueprint $table) {
            $table->id();
            $table->string('cve_tipo_empleado',3)->unique()->default("306");
            $table->string('descripcion',40);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tipo_empleado');
    }
}

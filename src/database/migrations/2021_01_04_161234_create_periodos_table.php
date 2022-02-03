<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->string('cve_periodo',3)->default("211")->unique();
            $table->string('descripcion',120)->default("PRIMER PERIODO DEL 2021");
            $table->boolean('activo')->default(true);
            $table->timestamp('fecha_ini')->default("20210101")->nullable();
            $table->timestamp('fecha_fin')->default("20210630")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodos');
    }
}

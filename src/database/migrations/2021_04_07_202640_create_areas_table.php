<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('fk_cve_unidad',4)->default("0524");
            $table->string('cve_area',6)->unique()->default("052408");
            $table->string('descripcion',170);
            $table->boolean('activa')->default(true);
            $table->timestamps();
            $table->foreign('fk_cve_unidad')->references('cve_unidad')->
                on('unidades')->onDelete('cascade');
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}

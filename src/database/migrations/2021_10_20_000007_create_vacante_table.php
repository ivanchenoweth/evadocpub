<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanteTable extends Migration
{
    public function up()
    {
        Schema::create('vacante', function (Blueprint $table) {
            $table->id();
            $table->string('cve_vacante',3)->unique()->default("341");
            $table->string('descripcion',40);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('vacante');
    }
}
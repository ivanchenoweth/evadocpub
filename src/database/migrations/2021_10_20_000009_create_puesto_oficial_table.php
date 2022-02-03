<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuestoOficialTable extends Migration
{
    public function up()
    {
        Schema::create('puesto_oficial', function (Blueprint $table) {
            $table->id();
            $table->string('cve_puesto_oficial',3)->unique()->default("332");
            $table->string('descripcion',50);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('puesto_oficial');
    }
}
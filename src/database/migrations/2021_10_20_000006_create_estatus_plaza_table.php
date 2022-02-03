<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatusPlazaTable extends Migration
{
    public function up()
    {
        Schema::create('estatus_plaza', function (Blueprint $table) {
            $table->id();
            $table->string('cve_estatus_plaza',3)->unique()->default("339");
            $table->string('descripcion',40);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('estatus_plaza');
    }
}
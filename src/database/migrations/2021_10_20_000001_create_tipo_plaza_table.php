<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoPlazaTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_plaza', function (Blueprint $table) {
            $table->id();
            $table->string('cve_tipo_plaza',3)->unique()->default("001");
            $table->string('descripcion',60);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tipo_plaza');
    }
}
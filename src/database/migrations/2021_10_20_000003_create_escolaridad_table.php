<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaridadTable extends Migration
{
    public function up()
    {
        Schema::create('escolaridad', function (Blueprint $table) {
            $table->id();
            $table->string('cve_escolaridad',3)->unique()->default("298");
            $table->string('descripcion',40);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('escolaridad');
    }
}

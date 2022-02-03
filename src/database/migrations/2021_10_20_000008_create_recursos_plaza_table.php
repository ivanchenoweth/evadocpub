<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursosPlazaTable extends Migration
{
    public function up()
    {
        Schema::create('recursos_plaza', function (Blueprint $table) {
            $table->id();
            $table->string('cve_recursos_plaza',3)->unique()->default("319");
            $table->string('descripcion',40);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('recursos_plaza');
    }
}
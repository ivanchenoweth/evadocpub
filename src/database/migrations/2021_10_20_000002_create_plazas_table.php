<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlazasTable extends Migration
{
    public function up()
    {
        Schema::create('plazas', function (Blueprint $table) {
            $table->id();
            $table->string('cve_plaza',3)->unique()->default("001");
            $table->string('descripcion',20);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('plazas');
    }
}
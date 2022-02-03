<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSexoTable extends Migration
{
    public function up()
    {
        Schema::create('sexo', function (Blueprint $table) {
            $table->id();
            $table->string('cve_sexo',3)->unique()->default("296");
            $table->string('descripcion',20);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('sexo');
    }
}

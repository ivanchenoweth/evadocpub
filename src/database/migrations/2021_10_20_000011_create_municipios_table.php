<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('fk_cve_estado',2)->default("26");
            $table->string('cve_municipio',5)->unique()->default("26176");
            $table->string('descripcion',120);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_cve_estado')->references('cve_estado')->on('estados')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
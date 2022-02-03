<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->id();
            $table->string('fk_cve_tipo_dependencia',1);
            $table->string('cve_dependencia',2)->unique()->default("05");
            $table->string('descripcion',120);
            $table->boolean('activa')->default(true);
            $table->timestamps();
            $table->foreign('fk_cve_tipo_dependencia')->references('cve_tipo_dependencia')->
                on('tipo_dependencia')->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependencias');
    }
}

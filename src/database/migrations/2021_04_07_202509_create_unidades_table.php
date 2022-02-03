<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('fk_cve_dependencia',2)->default("05");
            $table->string('cve_unidad',4)->unique()->default("0524");
            $table->string('descripcion',170);
            $table->boolean('activa')->default(true);
            $table->timestamps();
            $table->foreign('fk_cve_dependencia')->references('cve_dependencia')->
                on('dependencias')->onDelete('cascade');
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
        Schema::dropIfExists('unidades');
    }
}

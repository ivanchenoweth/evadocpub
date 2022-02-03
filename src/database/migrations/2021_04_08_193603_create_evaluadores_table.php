<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluadores', function (Blueprint $table) {
            $table->id();
            $table->string('fk_cve_periodo_ultimo',3)->default("211");
            $table->bigInteger('ne_jefe')->unique();
            $table->integer('tot_evaluar');
            $table->integer('tot_evaluado');
            $table->integer('pen_evaluar');          
            $table->string('fk_cve_area',6)->default('052406');
            $table->string('puesto',120);
            $table->timestamps();
            $table->foreign('fk_cve_periodo_ultimo')->references('cve_periodo')->on('periodos')
                ->onDelete('cascade');
            $table->foreign('fk_cve_area')->references('cve_area')->on('areas')
                ->onDelete('cascade');
            $table->foreign('ne_jefe')->references('num_emp')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('evaluadores');
    }
}

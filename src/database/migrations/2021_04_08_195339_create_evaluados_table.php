<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluados', function (Blueprint $table) {
            $table->id();
            $table->string('fk_cve_periodo',3)->default("211");            
            $table->bigInteger('num_emp');
            $table->string('nombre',80);
            $table->string('puesto',120);
            $table->string('puesto_funcional',120);
            $table->string('nivel',5);
            $table->bigInteger('fk_ne_jefe');
            $table->string('evaluado',2)->default("NO");
            $table->string('nom_repr',80)->nullable();
            $table->string('impreso',2)->default("NO");
            $table->tinyInteger('r1')->default("0");
            $table->tinyInteger('r2')->default("0");
            $table->tinyInteger('r3')->default("0");
            $table->tinyInteger('r4')->default("0");
            $table->tinyInteger('r5')->default("0");
            $table->tinyInteger('r6')->default("0");
            $table->tinyInteger('r7')->default("0");
            $table->tinyInteger('r8')->default("0");
            $table->tinyInteger('r9')->default("0");
            $table->tinyInteger('r10')->default("0");
            $table->tinyInteger('r11')->default("0");
            $table->tinyInteger('r12')->default("0");
            $table->tinyInteger('r13')->default("0");
            $table->tinyInteger('r14')->default("0");
            $table->tinyInteger('r15')->default("0");
            $table->tinyInteger('r16')->default("0");
            $table->tinyInteger('r17')->default("0");
            $table->tinyInteger('r18')->default("0");
            $table->tinyInteger('r19')->default("0");
            $table->tinyInteger('r20')->default("0");
            $table->tinyInteger('r21')->default("0");
            $table->tinyInteger('r22')->default("0");
            $table->tinyInteger('r23')->default("0");
            $table->tinyInteger('r24')->default("0");
            $table->tinyInteger('r25')->default("0");
            $table->tinyInteger('r26')->default("0");
            $table->tinyInteger('r27')->default("0");
            $table->tinyInteger('r28')->default("0");
            $table->tinyInteger('r29')->default("0");
            $table->tinyInteger('r30')->default("0");
            $table->smallInteger('suma')->default("0");
            $table->float('promedio',8,3)->default("0");
            $table->longText('areas_opor')->nullable(true);
            $table->string('correo',80)->default("dfcc70@gmail.com");
            $table->string('grado_dominio',20)->default("DEFICIENTE");
            $table->string('fk_cve_area',6)->default("052406");
            $table->timestamp('fecha_eva')->nullable();
            $table->timestamp('fecha_imp')->nullable();
            $table->timestamp('fecha_val')->nullable();
            $table->string('validado',2)->default("NO");
            $table->timestamp('fecha_rec')->nullable();
            $table->string('recibido',2)->default("NO");
            $table->string('observaciones',120)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_ne_jefe')->references('ne_jefe')->on('evaluadores')->onDelete('cascade');
            $table->foreign('fk_cve_periodo')->references('cve_periodo')->on('periodos')->onDelete('cascade');
            $table->foreign('fk_cve_area')->references('cve_area')->on('areas')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluados');
    }
}

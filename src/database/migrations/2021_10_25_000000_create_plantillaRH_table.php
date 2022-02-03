<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantillaRHTable extends Migration
{    
    public function up()
    {
        Schema::create('plantillaRH', function (Blueprint $table) {
            $table->id();
            /* aqui es CECAP plantilla Lily Del Cid RH
                # EMPL. FK
                NOMBRE COMPLETO  FK
                SEXO FK
                NIV-OPCION FK
                DEPENDENCIA FK
                UNIDAD/ADMTIVA FK.
                AREA FK  // agregado
                PUESTO FK
                PLAZA FK
                TIP/PZA. FK
            */
            $table->bigInteger('fk_num_emp')->default("0");
            $table->string('fk_cve_dependencia',2)->default("05");
            $table->string('fk_cve_unidad',4)->default("0524");
            $table->string('fk_cve_area',6)->default("052408");
            $table->string('fk_cve_plaza',3)->default("001");
            $table->string('fk_cve_tipo_plaza',3)->default("001");
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_num_emp')->references('num_emp')->on('empleados')->onDelete('cascade');
            $table->foreign('fk_cve_dependencia')->references('cve_dependencia')->on('dependencias')->onDelete('cascade');
            $table->foreign('fk_cve_unidad')->references('cve_unidad')->on('unidades')->onDelete('cascade');
            $table->foreign('fk_cve_area')->references('cve_area')->on('areas')->onDelete('cascade');
            $table->foreign('fk_cve_plaza')->references('cve_plaza')->on('plazas')->onDelete('cascade');
            $table->foreign('fk_cve_tipo_plaza')->references('cve_tipo_plaza')->on('tipo_plaza')->onDelete('cascade');        
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('plantillaRH');
    }
}
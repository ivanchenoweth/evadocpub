<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatoDAPTable extends Migration
{    
    public function up()
    {
        Schema::create('formatoDAP', function (Blueprint $table) {
            $table->id();            
            /* aqui es formato DAP
                NUMERO DE EMPLADO : FK  agregado
                APELLIDO PATERNO : FK
                APELLIDO MATERNO : FK
                NOMBRE(S) : FK
                NIVEL: FK
                PROFESION : 
                PUESTO FUNCIONAL COMPLETO (1) : FK
                DOMICILIO COMPLETO DE OFICINA (2) :
                TELEFONOS Y EXTENSION DE SU OFICINA (3) :
                CODIGO POSTAL :
                CORREO ELECTRONICO PERSONAL (OFICIAL) : FK
                Inicio mes/ año_1.
                Conclusión mes/año_1.
                Cargo o puesto desempeño_1.
                Campo de experiencia_1.
                Denominación de la Institución o empresa_1.
                Inicio mes/ año_2.
                Conclusión mes/año_2.
                Cargo o puesto desempeño_2.
                Campo de experiencia_2.
                Denominación de la Institución o empresa_2.
                Inicio mes/ año_3.
                Conclusión mes/año_3.
                Cargo o puesto desempeño_3.
                Campo de experiencia_3.
                Denominación de la Institución o empresa_3.
            */
            $table->bigInteger('fk_num_emp')->default("0");            
            $table->string('profesion',80)->default("");
            $table->string('tel_oficina',60)->default("");
            $table->string('cod_postal',5)->default("");
            $table->string('ta1_inicio_mesanio',6)->default("");
            $table->string('ta1_fin_mesanio',6)->default("");
            $table->string('ta1_cargo',40)->default("");
            $table->text('ta1_campoexperiencia')->default("");
            $table->string('ta1_empresa',240)->default("");
            $table->string('ta2_inicio_mesanio',6)->default("");
            $table->string('ta2_fin_mesanio',6)->default("");
            $table->string('ta2_cargo',40)->default("");
            $table->text('ta2_campoexperiencia')->default("");
            $table->string('ta2_empresa',80)->default("");
            $table->string('ta3_inicio_mesanio',6)->default("");
            $table->string('ta3_fin_mesanio',6)->default("");
            $table->string('ta3_cargo',40)->default("");
            $table->text('ta3_campoexperiencia')->default("");
            $table->string('ta3_empresa',80)->default("");
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_num_emp')->references('num_emp')->on('empleados')->onDelete('cascade');            
        });
    }   
    public function down()
    {
        Schema::dropIfExists('formatoDAP');
    }
}
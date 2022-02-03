<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{    
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            /* aqui es plantilla Jose Pinillos
                No. Empleado
                No. Pensión
                Nombre(s)
                Apellido Paterno
                Apellido Materno
                CURP
                RFC
                Sexo (FK)
                Escolaridad (FK)
                Fecha de Nacimiento
                Correo Electrónico Institucional
                Correo Electrónico Secundario
                Tipo de Empleado (FK)
                Sindicalizada (FK)
                Estatus de la Plaza (FK)
                Vacante (FK)
                Recurso de la Plaza (FK)
                No. Plaza
                Clave Presupuestal
                Fecha de Ingreso
                Nivel
                Puesto Oficial (FK)
                Puesto Funcional (FK)
                Dirección de lugar de trabajo
                Estado (FK) *NO estaba originalmente
                Municipio (FK)
                Sueldo Base
                Quinquenio
                Compensación
                Otras Prestaciones
                Sueldo Total (Bruto)
                Comentarios
            */
            $table->bigInteger('num_emp')->unique()->default("0");
            $table->bigInteger('num_pension')->unique()->default("0");
            $table->string('apaterno',30)->default("");
            $table->string('amaterno',30)->default("");
            $table->string('nombres',40)->default("");
            $table->string('nombre_x_nom',120)->default("");
            $table->string('nombre_x_ap',120)->default("");
            $table->string('curp',18)->default("");
            $table->string('rfc',13)->default("");
            $table->string('fk_cve_sexo',3)->default("296");
            $table->string('fk_cve_escolaridad',3)->default("298");
            $table->timestamp('fecha_nacimiento')->nullable();
            $table->string('correo_oficial',80)->default("");
            $table->string('correo_alterno',80)->default("");
            $table->string('fk_cve_tipo_empleado',3)->default("306");
            $table->string('fk_cve_sindicalizado',3)->default("316");
            $table->string('fk_cve_estatus_plaza',3)->default("339");
            $table->string('fk_cve_vacante',3)->default("342");
            $table->string('fk_cve_recursos_plaza',3)->default("319");
            $table->bigInteger('num_plaza')->default("0");
            $table->string('clave_presupuestal',40)->default("10500034001502E505M00094A165A013");
            $table->timestamp('fecha_ingreso')->nullable();
            $table->string('nivel',5)->default("");
            $table->string('fk_cve_puesto_oficial',3)->default("332");
            $table->string('fk_cve_puesto_funcional',3)->default("332");            
            $table->string('dom_oficina',180)->default("");
            $table->string('fk_cve_estado',2)->default("26");
            $table->string('fk_cve_municipio',5)->default("26176");
            $table->float('sueldo_base', 11, 2)->default("0");
            $table->float('quinquenio', 11, 2)->default("0");
            $table->float('compensacion', 11, 2)->default("0");
            $table->float('otras_prestaciones', 11, 2)->default("0");
            $table->float('sueldo_total_bruto', 11, 2)->default("0");
            $table->string('comentarios', 80)->default("Jose Pinillos 22/01/2019");            
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fk_cve_sexo')->references('cve_sexo')->on('sexo')->onDelete('cascade');
            $table->foreign('fk_cve_escolaridad')->references('cve_escolaridad')->on('escolaridad')->onDelete('cascade');
            $table->foreign('fk_cve_tipo_empleado')->references('cve_tipo_empleado')->on('tipo_empleado')->onDelete('cascade');
            $table->foreign('fk_cve_sindicalizado')->references('cve_sindicalizado')->on('sindicalizado')->onDelete('cascade');
            $table->foreign('fk_cve_estatus_plaza')->references('cve_estatus_plaza')->on('estatus_plaza')->onDelete('cascade');
            $table->foreign('fk_cve_vacante')->references('cve_vacante')->on('vacante')->onDelete('cascade');            
            $table->foreign('fk_cve_recursos_plaza')->references('cve_recursos_plaza')->on('recursos_plaza')->onDelete('cascade');
            $table->foreign('fk_cve_puesto_oficial')->references('cve_puesto_oficial')->on('puesto_oficial')->onDelete('cascade');
            $table->foreign('fk_cve_puesto_funcional')->references('cve_puesto_oficial')->on('puesto_oficial')->onDelete('cascade');
            $table->foreign('fk_cve_estado')->references('cve_estado')->on('estados')->onDelete('cascade');
            $table->foreign('fk_cve_municipio')->references('cve_municipio')->on('municipios')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
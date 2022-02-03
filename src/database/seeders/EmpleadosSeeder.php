<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{ 
    public function run()
    {            
        // 
        DB::table('empleados')->insert([
            'num_emp' => '27264',
            'num_pension' => '131551',
            'apaterno' => 'ARIAS',
            'amaterno' => 'PARRA',
            'nombres' => 'WILY EDGAR',
            'nombre_x_nom' => 'WILY EDGAR ARIAS PARRA',
            'nombre_x_ap' => 'ARIAS PARRA WILY EDGAR',            
            'curp' => 'AIPW780709HSRRRL01', 
            'rfc' => 'AIPW780709LF5', 
            'fk_cve_sexo' => '296', // Masculino
            'fk_cve_escolaridad' => '302', // Maestria
            'fecha_nacimiento' => '19780709', 
            'correo_oficial' => 'willy.arias@haciendasonora.gob.mx', 
            'correo_alterno' => 'no tiene',             
            'fk_cve_tipo_empleado' => '306', // Base
            'fk_cve_sindicalizado' => '317', // Si
            'fk_cve_estatus_plaza' => '339', // Activa
            'fk_cve_vacante' => '342', // No
            'fk_cve_recursos_plaza' => '319', // Estatal
            'num_plaza' => '5371', 
            'clave_presupuestal' => '10500034001502E505M00094A165A013', 
            'fecha_ingreso' => '20030316', 
            'nivel' => '09A', 
            'fk_cve_puesto_oficial' => '332', // Jefe de Departamento o Puesto Homólogo
            'fk_cve_puesto_funcional' => '332', // Jefe de Departamento o Puesto Homólogo
            'dom_oficina' => 'Centro de Gobierno, Edificio Sonora, Ala Sur, Primer Nivel, Ave. De la Cultura y Comonfort, Colonia Villa de Series, C.P. 83100', 
            'fk_cve_estado' => '26', // agregado
            'fk_cve_municipio' => '26176', // ampliado
            'sueldo_base' => '22334.23', 
            'quinquenio' => '3350.11', 
            'compensacion' => '0', 
            'otras_prestaciones' => '11210.13', 
            'sueldo_total_bruto' => '36894.47', 
            'comentarios' => 'Jose Pinillos 22/01/2019',             
        ]);
        
        DB::table('empleados')->insert([
            'num_emp' => '33998',
            'num_pension' => '136290',
            'apaterno' => 'CORDOVA',
            'amaterno' => 'NAVARRO',
            'nombres' => 'CARLOS',
            'nombre_x_nom' => 'CARLOS CORDOVA NAVARRO',
            'nombre_x_ap' => 'CORDOVA NAVARRO CARLOS',
            'curp' => 'CONC800506HSRRVR01', 
            'rfc' => 'CONC8005063L6', 
            'fk_cve_sexo' => '296', // Masculino
            'fk_cve_escolaridad' => '304', // 
            'fecha_nacimiento' => '19800506', 
            'correo_oficial' => 'carlos.cordova@sonora.gob.mx', 
            'correo_alterno' => 'no tiene',                         
            'fk_cve_tipo_empleado' => '309', // Confianza
            'fk_cve_sindicalizado' => '318', // No
            'fk_cve_estatus_plaza' => '339', // Activa
            'fk_cve_vacante' => '342', // No
            'fk_cve_recursos_plaza' => '319', // Estatal
            'num_plaza' => '3137', 
            'clave_presupuestal' => '10500034001502E505M00094A165A013', 
            'fecha_ingreso' => '20101201', 
            'nivel' => '11I', 
            'fk_cve_puesto_oficial' => '334', // Director o Puesto Homologo
            'fk_cve_puesto_funcional' => '334', // Director o Puesto Homologo
            'dom_oficina' => 'Centro de Gobierno, Edificio Sonora, Ala Sur, Primer Nivel, Ave. De la Cultura y Comonfort, Colonia Villa de Series, C.P. 83100', 
            'fk_cve_estado' => '26', // Sonora
            'fk_cve_municipio' => '26176', // Hermosillo
            'sueldo_base' => '26664.74', 
            'quinquenio' => '1333.26', 
            'compensacion' => '0', 
            'otras_prestaciones' => '0', 
            'sueldo_total_bruto' => '27998', 
            'comentarios' => 'Jose Pinillos 22/01/2019',             
        ]);
    }
}
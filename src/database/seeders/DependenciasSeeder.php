<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DependenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dependencias')->insert([
            'cve_dependencia' => '01', 
            'descripcion' => 'H. CONGRESO DEL ESTADO',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '02', 
            'descripcion' => 'SUPREMO TRIBUNAL DE JUSTICIA',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '03', 
            'descripcion' => 'EJECUTIVO DEL ESTADO',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '04', 
            'descripcion' => 'SECRETARIA DE GOBIERNO',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '05', 
            'descripcion' => 'SECRETARIA DE HACIENDA',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '06', 
            'descripcion' => 'SECRETARIA DE LA CONTRALORIA GENERAL',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '07', 
            'descripcion' => 'SECRETARIA DE DESARROLLO SOCIAL',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
       
        DB::table('dependencias')->insert([
            'cve_dependencia' => '09', 
            'descripcion' => 'SECRETARIA DE SALUD PUBLICA',
            'fk_cve_tipo_dependencia' => 'D',
        ]);        
        DB::table('dependencias')->insert([
            'cve_dependencia' => '10', 
            'descripcion' => 'SECRETARIA DE INFRAESTRUCTURA Y DESARROLLO URBANO',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '11', 
            'descripcion' => 'SECRETARIA DE ECONOMIA',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '12', 
            'descripcion' => 'SECRETARIA DE AGRICULTURA, GANADERIA, RECURSOS HIDRAULICOS, PESCA Y ACUACULTURA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        
        
        DB::table('dependencias')->insert([
            'cve_dependencia' => '15', 
            'descripcion' => 'TRIBUNAL DE LO CONTENCIOSO ADMINISTRATIVO',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '16', 
            'descripcion' => 'SECRETARIA DEL TRABAJO',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '17', 
            'descripcion' => 'INSTITUTO SUPERIOR DE AUDITORIA Y FISCALIZACION',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '18', 
            'descripcion' => 'FISCALIA GENERAL DE JUSTICIA DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '19', 
            'descripcion' => 'SECRETARIA DE LA CONSEJERIA JURIDICA DEL GOBIERNO DEL ESTADO',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '20', 
            'descripcion' => 'SECRETARIA TECNICA Y DE ATENCION CIUDADANA',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '21', 
            'descripcion' => 'SECRETARIO EJECUTIVO DE SEGURIDAD PUBLICA DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'D',
        ]);
        
        DB::table('dependencias')->insert([
            'cve_dependencia' => '30', 
            'descripcion' => 'CONSEJO ESTATAL DE CONCERTACION DE OBRA PUBLICA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '31', 
            'descripcion' => 'CENTRO ESTATAL DE TRASPLANTES',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        
        DB::table('dependencias')->insert([
            'cve_dependencia' => '32', 
            'descripcion' => 'INSTITUTO DE ACUACULTURA DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '33', 
            'descripcion' => 'COMISION DE FOMENTO AL TURISMO DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '34', 
            'descripcion' => 'COMISION ESTATAL PARA EL DESARROLLO DE LOS PUEBLOS Y COMUNIDADES INDÍGENAS',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '35', 
            'descripcion' => 'COMISION ESTATAL DEL AGUA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '36', 
            'descripcion' => 'INSTITUTO DE BECAS Y CREDITO EDUCATIVO DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '37', 
            'descripcion' => 'COMISION DE ECOLOGIA Y DESARROLLO SUSTENTABLE DEL ESTADO',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '38', 
            'descripcion' => 'COMISION DE VIVIENDA DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '39', 
            'descripcion' => 'COMISION DEL DEPORTE DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '40', 
            'descripcion' => 'COMISION ESTATAL DE CIENCIA Y TECNOLOGIA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '41', 
            'descripcion' => 'FIDEICOMISO FONDO REVOLVENTE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '42', 
            'descripcion' => 'FINANCIERA PARA EL DESARROLLO ECONOMICO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '43', 
            'descripcion' => 'FONDO DE OPERACION DE OBRAS SONORA SI',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '44', 
            'descripcion' => 'FONDO ESTATAL PARA LA MODERNIZACION DEL TRANSPORTE',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '45', 
            'descripcion' => 'HOSPITAL INFANTIL DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '46', 
            'descripcion' => 'INSTITUTO SONORENSE DE CULTURA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '47', 
            'descripcion' => 'INSTITUTO SONORENSE DE INFRAESTRUCTURA EDUCATIVA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '48', 
            'descripcion' => 'INSTITUTO SONORENSE DE LA JUVENTUD',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '49', 
            'descripcion' => 'INSTITUTO SONORENSE DE LA MUJER',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '50', 
            'descripcion' => 'INSTITUTO SUPERIOR DE SEGURIDAD PUBLICA DEL ESTADO',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '51', 
            'descripcion' => 'JUNTA DE CAMINOS',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '52', 
            'descripcion' => 'OPERADORA DE PROYECTOS ESTRATEGICOS DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '53', 
            'descripcion' => 'PROCURADURIA AMBIENTAL DEL ESTADO DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '54', 
            'descripcion' => 'PROSONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '55', 
            'descripcion' => 'RADIO SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);
        DB::table('dependencias')->insert([
            'cve_dependencia' => '56', 
            'descripcion' => 'SERVICIO DE ADMON Y ENAJENACION DE BIENES',
            'fk_cve_tipo_dependencia' => 'E',
        ]);        
        DB::table('dependencias')->insert([
            'cve_dependencia' => '57', 
            'descripcion' => 'SISTEMA PARA EL DESARROLLO INTEGRAL DE LA FAMILIA EN EL ESTADO',
            'fk_cve_tipo_dependencia' => 'E',
        ]);        
        DB::table('dependencias')->insert([
            'cve_dependencia' => '58', 
            'descripcion' => 'TELEFONIA RURAL DE SONORA',
            'fk_cve_tipo_dependencia' => 'E',
        ]);        
        
        
    }
}


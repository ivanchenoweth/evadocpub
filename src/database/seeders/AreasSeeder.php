<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // 01 H. CONGRESO DEL ESTADO 
         // 0101 CAMARA DE DIPUTADOS
         DB::table('areas')->insert([
            'fk_cve_unidad' => '0101',
            'cve_area' => '010101',
            'descripcion' => 'CAMARA DE DIPUTADOS',
        ]);
         // 0102 CENTRO DE INVESTIGACIONES PARLAMENTARIAS DEL ESTADO DE SONORA AL H. CONGRESO DEL ESTADO
         DB::table('areas')->insert([
            'fk_cve_unidad' => '0102',
            'cve_area' => '010201',
            'descripcion' => 'CENTRO DE INVESTIGACIONES PARLAMENTARIAS DEL ESTADO DE SONORA AL H. CONGRESO DEL ESTADO',
        ]);
        // 0103 CONTRALORIA INTERNA
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '0103',
            'cve_area' => '010301',
            'descripcion' => 'CONTRALORIA INTERNA',
        ]);
        // 0104 OFICIALIA MAYOR
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '0104',
            'cve_area' => '010401',
            'descripcion' => 'OFICIALIA MAYOR',
        ]);
        // 03 EJECUTIVO DEL ESTADO
        // 0301 COORDINACION EJECUTIVA DE ADMINISTRACION
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '0301',
            'cve_area' => '030101',
            'descripcion' => 'COORDINACION EJECUTIVA DE ADMINISTRACION',
        ]);
        // 0302 COORDINACION EJECUTIVA DE ADMINISTRACION
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '0302',
            'cve_area' => '030201',
            'descripcion' => 'OFICINA DE LA REPRESENTACION DE SONORA EN EL D.F.',
        ]);
        // 0303 OFICINA DEL EJECUTIVO ESTATAL
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '0303',
            'cve_area' => '030301',
            'descripcion' => 'OFICINA DEL EJECUTIVO ESTATAL',
        ]);
        // 0304 SECRETARIA PARTICULAR
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '0304',
            'cve_area' => '030401',
            'descripcion' => 'SECRETARIA PARTICULAR',
        ]);
        // 18 FISCALIA GENERAL DE JUSTICIA DEL ESTADO DE SONORA
        // 1801 SECRETARIA PARTICULAR
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1801',
            'cve_area' => '180101',
            'descripcion' => 'AGENCIA MINISTERIAL DE INVESTIGACION CRIMINAL',
        ]);
        // 1802 CENTRO DE JUSTICIA PARA LA MUJER
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1802',
            'cve_area' => '180201',
            'descripcion' => 'CENTRO DE JUSTICIA PARA LA MUJER',
        ]);
        // 1803 DELEGACION REGIONAL EN CABORCA
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1803',
            'cve_area' => '180301',
            'descripcion' => 'DELEGACION REGIONAL EN CABORCA',
        ]);
        // 1804 DELEGACION REGIONAL EN CIUDAD OBREGON
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1804',
            'cve_area' => '180401',
            'descripcion' => 'DELEGACION REGIONAL EN CIUDAD OBREGON',
        ]);
        // 1805 DELEGACION REGIONAL EN NOGALES
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1805',
            'cve_area' => '180501',
            'descripcion' => 'DELEGACION REGIONAL EN NOGALES',
        ]);
        // 1806 DIRECCION GENERAL DE ASUNTOS JURIDICOS
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1806',
            'cve_area' => '180601',
            'descripcion' => 'DIRECCION GENERAL DE ASUNTOS JURIDICOS',
        ]);
        // 1807 DIRECCION GENERAL DE ATENCION A VICTIMAS Y ASESORIA JURIDICA
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1807',
            'cve_area' => '180701',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION A VICTIMAS Y ASESORIA JURIDICA',
        ]);
        // 1808 DIRECCION GENERAL DE ATENCION TEMPRANA Y JUSTICIA ALTERNATIVA
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1808',
            'cve_area' => '180801',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION TEMPRANA Y JUSTICIA ALTERNATIVA',
        ]);
        // 1809 DIRECCION GENERAL DE BODEGA DE INDICIOS
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1809',
            'cve_area' => '180901',
            'descripcion' => 'DIRECCION GENERAL DE BODEGA DE INDICIOS',
        ]);
        // 1810 DIRECCION GENERAL DE CAPACITACION, EVALUACION Y CERTIFICACION
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1810',
            'cve_area' => '181001',
            'descripcion' => 'DIRECCION GENERAL DE CAPACITACION, EVALUACION Y CERTIFICACION',
        ]);
        // 1811 DIRECCION GENERAL DE CONTROL DE PROCESOS
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1811',
            'cve_area' => '181101',
            'descripcion' => 'DIRECCION GENERAL DE CONTROL DE PROCESOS',
        ]);
        // 1812 DIRECCION GENERAL DE INVESTIGACION
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1812',
            'cve_area' => '181201',
            'descripcion' => 'DIRECCION GENERAL DE INVESTIGACION',
        ]);
        // 1813 DIRECCION GENERAL DE TECNOLOGIAS DE INFORMACION Y COMUNICACIONES
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1813',
            'cve_area' => '181301',
            'descripcion' => 'DIRECCION GENERAL DE TECNOLOGIAS DE INFORMACION Y COMUNICACIONES',
        ]);
        // 1814 FISCAL GENERAL
        DB::table('areas')->insert([            
            'fk_cve_unidad' => '1814',
            'cve_area' => '181401',
            'descripcion' => 'FISCAL GENERAL',
        ]);
        // 1815 FISCALIA ANTICORRUPCION DEL ESTADO DE SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1815',
            'cve_area' => '181501',
            'descripcion' => 'FISCALIA ANTICORRUPCION DEL ESTADO DE SONORA',
        ]);
        // 1816 FISCALIA ESPECIALIZADA EN MATERIA DE DELITOS ELECTORALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1816',
            'cve_area' => '181601',
            'descripcion' => 'FISCALIA ESPECIALIZADA EN MATERIA DE DELITOS ELECTORALES',
        ]);
        // 1817 FISCALIA ESPECIALIZADA EN PROCURACION DE JUSTICIA PARA ADOLESCENTES Y CORRUPCION DE MENORES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1817',
            'cve_area' => '181701',
            'descripcion' => 'FISCALIA ESPECIALIZADA EN PROCURACION DE JUSTICIA PARA ADOLESCENTES Y CORRUPCION DE MENORES',
        ]);
        // 1818 OFICIALIA MAYOR
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1818',
            'cve_area' => '181801',
            'descripcion' => 'OFICIALIA MAYOR',
        ]);
        // 1819 ORGANO INTERNO DE CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1819',
            'cve_area' => '181901',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        // 1820 SERVICIOS PERICIALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1820',
            'cve_area' => '182001',
            'descripcion' => 'SERVICIOS PERICIALES',
        ]);
        // 1821 UNIDAD ESPECIALIZADA EN INTELIGENCIA PATRIMONIAL Y FINANCIERA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1821',
            'cve_area' => '182101',
            'descripcion' => 'UNIDAD ESPECIALIZADA EN INTELIGENCIA PATRIMONIAL Y FINANCIERA',
        ]);
        // 1822 VICEFISCALIA DE CONTROL DE PROCESOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1822',
            'cve_area' => '182201',
            'descripcion' => 'VICEFISCALIA DE CONTROL DE PROCESOS',
        ]);
        // 1823 VICEFISCALIA DE FEMINICIDIOS Y DELITOS POR RAZONES DE GENERO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1823',
            'cve_area' => '182301',
            'descripcion' => 'VICEFISCALIA DE FEMINICIDIOS Y DELITOS POR RAZONES DE GENERO',
        ]);
        // 1824 VICEFISCALIA DE INVESTIGACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1824',
            'cve_area' => '182401',
            'descripcion' => 'VICEFISCALIA DE INVESTIGACION',
        ]);
        // 1825 VICEFISCALIA DE INVESTIGACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1825',
            'cve_area' => '182501',
            'descripcion' => 'VICEFISCALIA DE INVESTIGACION',
        ]);
        // 17 INSTITUTO SUPERIOR DE AUDITORIA Y FISCALIZACION
        // 1701 VICEFISCALIA DE INVESTIGACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1701',
            'cve_area' => '170101',
            'descripcion' => 'INSTITUTO SUPERIOR DE AUDITORIA Y FISCALIZACION',
        ]);
        // 1702 ORGANO DE CONTROL INTERNO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1702',
            'cve_area' => '170201',
            'descripcion' => 'ORGANO DE CONTROL INTERNO',
        ]);
        // 12 SECRETARIA DE AGRICULTURA, GANADERIA, RECURSOS HIDRAULICOS, PESCA Y ACUACULTURA
        // 1201 COORDINACION PLAN MAESTRO DE DESARROLLO RURAL INTEGRAL SUR DE SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1201',
            'cve_area' => '120101',
            'descripcion' => 'COORDINACION PLAN MAESTRO DE DESARROLLO RURAL INTEGRAL SUR DE SONORA',
        ]);
        // 1202 COORDINACION PLAN MAESTRO DE DESARROLLO RURAL INTEGRAL SUR DE SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1202',
            'cve_area' => '120201',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO AGRICOLA',
        ]);
        // 1203 DIRECCION GENERAL DE DESARROLLO GANADERO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1203',
            'cve_area' => '120301',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO GANADERO',
        ]);
        // 1204 DIRECCION GENERAL DE DESARROLLO RURAL Y CAPITALIZACION AL CAMPO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1204',
            'cve_area' => '120401',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO RURAL Y CAPITALIZACION AL CAMPO',
        ]);
        // 1205 DIRECCION GENERAL DE PESCA Y ACUACULTURA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1205',
            'cve_area' => '120501',
            'descripcion' => 'DIRECCION GENERAL DE PESCA Y ACUACULTURA',
        ]);
        // 1206 DIRECCION GENERAL DE PLANEACION ADMINISTRACION Y EVALUACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1206',
            'cve_area' => '120601',
            'descripcion' => 'DIRECCION GENERAL DE PLANEACION ADMINISTRACION Y EVALUACION',
        ]);
        // 1207 DIRECCION GENERAL DE SERVICIOS GANADEROS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1207',
            'cve_area' => '120701',
            'descripcion' => 'DIRECCION GENERAL DE SERVICIOS GANADEROS',
        ]);
        // 1208 DIRECCION GENERAL FORESTAL Y FAUNA DE INTERES CINEGETICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1208',
            'cve_area' => '120801',
            'descripcion' => 'DIRECCION GENERAL FORESTAL Y FAUNA DE INTERES CINEGETICO',
        ]);
        // 1209 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1209',
            'cve_area' => '120901',
            'descripcion' => 'SECRETARIA',
        ]);
        // 1210 SUBSECRETARIA DE AGRICULTURA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1210',
            'cve_area' => '121001',
            'descripcion' => 'SUBSECRETARIA DE AGRICULTURA',
        ]);
        // 1211 SUBSECRETARIA DE GANADERIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1211',
            'cve_area' => '121101',
            'descripcion' => 'SUBSECRETARIA DE GANADERIA',
        ]);
        // 1212 SUBSECRETARIA DE PESCA Y ACUACULTURA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1212',
            'cve_area' => '121201',
            'descripcion' => 'SUBSECRETARIA DE PESCA Y ACUACULTURA',
        ]);
        // 07 SECRETARIA DE DESARROLLO SOCIAL
        // 0701 DIRECCION GENERAL DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0701',
            'cve_area' => '070101',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        // 0702 DIRECCION GENERAL DE ATENCION CIUDADANA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0702',
            'cve_area' => '070201',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION CIUDADANA',
        ]);
        // 0703 DIRECCION GENERAL DE DESARROLLO REGIONAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0703',
            'cve_area' => '070301',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO REGIONAL',
        ]);
        // 0704 DIRECCION GENERAL DE PARTICIPACION SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0704',
            'cve_area' => '070401',
            'descripcion' => 'DIRECCION GENERAL DE PARTICIPACION SOCIAL',
        ]);
        // 0705 DIRECCION GENERAL DE PLANEACION Y SEGUIMIENTO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0705',
            'cve_area' => '070501',
            'descripcion' => 'DIRECCION GENERAL DE PLANEACION Y SEGUIMIENTO',
        ]);
        // 0706 DIRECCION GENERAL DE PLANEACION Y SEGUIMIENTO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0706',
            'cve_area' => '070601',
            'descripcion' => 'DIRECCION GENERAL DE PROGRAMACION Y CONTROL DE GASTO DE INVERSION',
        ]);
        // 0707 DIRECCION GENERAL DE PROGRAMAS SOCIALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0707',
            'cve_area' => '070701',
            'descripcion' => 'DIRECCION GENERAL DE PROGRAMAS SOCIALES',
        ]);
        // 0708 DIRECCION GENERAL DE PROYECTOS DE INFRAESTRUCTURA BASICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0708',
            'cve_area' => '070801',
            'descripcion' => 'DIRECCION GENERAL DE PROYECTOS DE INFRAESTRUCTURA BASICA',
        ]);
        // 0709 DIRECCION GENERAL JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0709',
            'cve_area' => '070901',
            'descripcion' => 'DIRECCION GENERAL JURIDICA',
        ]);
        // 0710 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0710',
            'cve_area' => '071001',
            'descripcion' => 'SECRETARIA',
        ]);
        // 0711 SUBSECRETARIA DE INCLUSION SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0711',
            'cve_area' => '071101',
            'descripcion' => 'SUBSECRETARIA DE INCLUSION SOCIAL',
        ]);
        // 0712 SUBSECRETARIA DE INFRAESTRUCTURA SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0712',
            'cve_area' => '071201',
            'descripcion' => 'SUBSECRETARIA DE INFRAESTRUCTURA SOCIAL',
        ]);
        // 0713 UNIDAD DE TRANSPARENCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0713',
            'cve_area' => '071301',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA',
        ]);
        // 11 SECRETARIA DE ECONOMIA
        // 1101 COMISION DE MEJORA REGULATORIA DE SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1101',
            'cve_area' => '110101',
            'descripcion' => 'COMISION DE MEJORA REGULATORIA DE SONORA',
        ]);
        // 1102 DIRECCION GENERAL DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1102',
            'cve_area' => '110201',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        // 1103 DIRECCION GENERAL DE ATENCION A PROGRAMA EMPRESARIALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1103',
            'cve_area' => '110301',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION A PROGRAMA EMPRESARIALES',
        ]);
        // 1104 DIRECCION GENERAL DE ATENCION A PROGRAMA EMPRESARIALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1104',
            'cve_area' => '110401',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION A PROGRAMA EMPRESARIALES',
        ]);
        // 1105 DIRECCION GENERAL DE DESARROLLO EMPRESARIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1105',
            'cve_area' => '110501',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO EMPRESARIAL',
        ]);
        // 1106 DIRECCION GENERAL DE ENERGIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1106',
            'cve_area' => '110601',
            'descripcion' => 'DIRECCION GENERAL DE ENERGIA',
        ]);
        // 1107 DIRECCION GENERAL DE MINERIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1107',
            'cve_area' => '110701',
            'descripcion' => 'DIRECCION GENERAL DE MINERIA',
        ]);
        // 1108 DIRECCION GENERAL DE SECTORES TECNOLOGICOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1108',
            'cve_area' => '110801',
            'descripcion' => 'DIRECCION GENERAL DE SECTORES TECNOLOGICOS',
        ]);
        // 1109 DIRECCION GENERAL DE VINCULACION E INDUSTRIA MANUFACTURERA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1109',
            'cve_area' => '110901',
            'descripcion' => 'DIRECCION GENERAL DE VINCULACION E INDUSTRIA MANUFACTURERA',
        ]);
        // 1110 DIRECCION GENERAL JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1110',
            'cve_area' => '111001',
            'descripcion' => 'DIRECCION GENERAL JURIDICA',
        ]);
        // 1111 OFICINA DEL TITULAR DE LA SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1111',
            'cve_area' => '111101',
            'descripcion' => 'OFICINA DEL TITULAR DE LA SECRETARIA',
        ]);
        // 1112 SUBSECRETARIA DE DESARROLLO ECONOMICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1112',
            'cve_area' => '111201',
            'descripcion' => 'SUBSECRETARIA DE DESARROLLO ECONOMICO',
        ]);
        // 1113 SUBSECRETARIA DE IMPULSO A LA COMERCIALIZACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1113',
            'cve_area' => '111301',
            'descripcion' => 'SUBSECRETARIA DE IMPULSO A LA COMERCIALIZACION',
        ]);
        // 1114 UNIDAD DE TRANSPARENCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1114',
            'cve_area' => '111401',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA',
        ]);
        // 04 SECRETARIA DE GOBIERNO
        // 0401 CENTRO ESTATAL DE DESARROLLO MUNICIPAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0401',
            'cve_area' => '040101',
            'descripcion' => 'CENTRO ESTATAL DE DESARROLLO MUNICIPAL',
        ]);
        // 0402 CONSEJO ESTATAL DE POBLACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0402',
            'cve_area' => '040201',
            'descripcion' => 'CONSEJO ESTATAL DE POBLACION',
        ]);
        // 0403 COORDINACION EJECUTIVA DE RELACIONES PUBLICAS Y EVENTOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0403',
            'cve_area' => '040301',
            'descripcion' => 'COORDINACION EJECUTIVA DE RELACIONES PUBLICAS Y EVENTOS',
        ]);
        // 0404 COORDINACION ESTATAL DE PROTECCION CIVIL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0404',
            'cve_area' => '040401',
            'descripcion' => 'COORDINACION ESTATAL DE PROTECCION CIVIL',
        ]);
        // 0405 COORDINACION GENERAL DE ADMINISTRACION Y CONTROL PRESUPUESTAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0405',
            'cve_area' => '040501',
            'descripcion' => 'COORDINACION GENERAL DE ADMINISTRACION Y CONTROL PRESUPUESTAL',
        ]);
        // 0406 DIRECCION GENERAL DE ASUNTOS JURIDICOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0406',
            'cve_area' => '040601',
            'descripcion' => 'DIRECCION GENERAL DE ASUNTOS JURIDICOS',
        ]);
        // 0407 DIRECCION GENERAL DE ATENCION A GRUPOS PRIORITARIOS Y MIGRANTES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0407',
            'cve_area' => '040701',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION A GRUPOS PRIORITARIOS Y MIGRANTES',
        ]);
        // 0408 DIRECCION GENERAL DE CONCERTACION AGRARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0408',
            'cve_area' => '040801',
            'descripcion' => 'DIRECCION GENERAL DE CONCERTACION AGRARIA',
        ]);
        // 0409 DIRECCION GENERAL DE CONCERTACION AGRARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0409',
            'cve_area' => '040901',
            'descripcion' => 'DIRECCION GENERAL DE GOBIERNO',
        ]);
        // 0410 DIRECCION GENERAL DE NOTARIAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0410',
            'cve_area' => '041001',
            'descripcion' => 'DIRECCION GENERAL DE NOTARIAS',
        ]);
        // 0411 DIRECCION GENERAL DE REGISTRO CIVIL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0411',
            'cve_area' => '041101',
            'descripcion' => 'DIRECCION GENERAL DE REGISTRO CIVIL',
        ]);
        // 0412 DIRECCION GRAL. DEL BOLETIN OFICIAL Y ARCHIVO DEL ESTADO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0412',
            'cve_area' => '041201',
            'descripcion' => 'DIRECCION GRAL. DEL BOLETIN OFICIAL Y ARCHIVO DEL ESTADO',
        ]);
        // 0413 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0413',
            'cve_area' => '041301',
            'descripcion' => 'SECRETARIA',
        ]);
        // 0414 SUBSECRETARIA DE CONCERTACION SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0414',
            'cve_area' => '041401',
            'descripcion' => 'SUBSECRETARIA DE CONCERTACION SOCIAL',
        ]);
        // 0415 SUBSECRETARIA DE DESARROLLO POLITICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0415',
            'cve_area' => '041501',
            'descripcion' => 'SUBSECRETARIA DE DESARROLLO POLITICO',
        ]);
        // 0416 SUBSECRETARIA DE SERVICIOS DE GOBIERNO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0416',
            'cve_area' => '041601',
            'descripcion' => 'SUBSECRETARIA DE SERVICIOS DE GOBIERNO',
        ]);        
        
        // 05 SECRETARIA DE HACIENDA
        // 0501 CENTRO DE DESARROLLO INFANTIL I
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0501',
            'cve_area' => '050101',
            'descripcion' => 'CENDI I',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0501',
            'cve_area' => '050103',
            'descripcion' => 'DIRECCION ADMINISTRATIVA',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0501',
            'cve_area' => '050104',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION DE RECURSOS HUMANOS',
        ]);
        // 0502 CENTRO DE DESARROLLO INFANTIL II
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0502',
            'cve_area' => '050201',
            'descripcion' => 'CENDI II',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0502',
            'cve_area' => '050203',
            'descripcion' => 'DIRECCION ADMINISTRATIVA',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0502',
            'cve_area' => '050204',
            'descripcion' => 'DIRECCION DE DESARROLLO ORGANIZACIONAL',
        ]);
        // 0503 CENTRO DE DESARROLLO INFANTIL III
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0503',
            'cve_area' => '050301',
            'descripcion' => 'CENDI CAJEME',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0503',
            'cve_area' => '050302',
            'descripcion' => 'DIRECCION ADMINISTRATIVA',
        ]);
        // 0504 COMISION ESTATAL DE BIENES Y CONCESIONES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0504',
            'cve_area' => '050401',
            'descripcion' => 'COMISION ESTATAL DE BIENES Y CONCESIONES',
        ]);
        // 0505 COORDINACION EJECUTIVA DE AUDITORÍA FISCAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0505',
            'cve_area' => '050501',
            'descripcion' => 'COORDINACION EJECUTIVA DE AUDITORÍA FISCAL',
        ]);
        // 0506 COORDINACION EJECUTIVA DE VERIFICACION AL COMERCIO EXTERIOR
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0506',
            'cve_area' => '050601',
            'descripcion' => 'COORDINACION EJECUTIVA DE VERIFICACION AL COMERCIO EXTERIOR',
        ]);
        // 0507 COORDINACION GENERAL DEL SISTEMA INTEGRAL DE INFORMACION Y ADMINISTRACION FINANCIERA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0507',
            'cve_area' => '050701',
            'descripcion' => 'COORDINACION GENERAL DEL SISTEMA INTEGRAL DE INFORMACION Y ADMINISTRACION FINANCIERA',
        ]);
        // 0508 DIRECCION GENERAL DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0508',
            'cve_area' => '050801',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        // 0509 DIRECCION GENERAL DE BEBIDAS ALCOHOLICAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0509',
            'cve_area' => '050901',
            'descripcion' => 'DIRECCION GENERAL DE BEBIDAS ALCOHOLICAS',
        ]);
        // 0510 DIRECCION GENERAL DE CONTABILIDAD GUBERNAMENTAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0510',
            'cve_area' => '051001',
            'descripcion' => 'DIRECCION GENERAL DE CONTABILIDAD GUBERNAMENTAL',
        ]);
        // 0511 DIRECCION GENERAL DE CONTROL DE FONDOS Y PAGADURIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0511',
            'cve_area' => '051101',
            'descripcion' => 'DIRECCION GENERAL DE CONTROL DE FONDOS Y PAGADURIA',
        ]);
        // 0512 DIRECCION GENERAL DE CRÉDITO PUBLICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0512',
            'cve_area' => '051201',
            'descripcion' => 'DIRECCION GENERAL DE CRÉDITO PUBLICO',
        ]);
        // 0513 DIRECCION GENERAL DE PLANEACION Y EVALUACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0513',
            'cve_area' => '051301',
            'descripcion' => 'DIRECCION GENERAL DE PLANEACION Y EVALUACION',
        ]);
        // 0514 DIRECCION GENERAL DE INVERSIONES PUBLICAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0514',
            'cve_area' => '051401',
            'descripcion' => 'DIRECCION GENERAL DE INVERSIONES PUBLICAS',
        ]);
        // 0515 DIRECCION GENERAL DE ORIENTACION Y ASISTENCIA AL CONTRIBUYENTE
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0515',
            'cve_area' => '051501',
            'descripcion' => 'DIRECCION GENERAL DE ORIENTACION Y ASISTENCIA AL CONTRIBUYENTE',
        ]);
        // 0516 DIRECCION GENERAL DE POLITICA Y CONTROL PRESUPUESTAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0516',
            'cve_area' => '051601',
            'descripcion' => 'DIRECCION GENERAL DE POLITICA Y CONTROL PRESUPUESTAL',
        ]);
        // 0517 DIRECCION GENERAL DE RECAUDACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0517',
            'cve_area' => '051701',
            'descripcion' => 'DIRECCION GENERAL DE RECAUDACION',
        ]);
        // 0518 DIRECCION GENERAL DE UNIDAD DE TRANSPARENCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0518',
            'cve_area' => '051801',
            'descripcion' => 'DIRECCION GENERAL DE UNIDAD DE TRANSPARENCIA',
        ]);
        // 0519 INSTITUTO CATASTRAL Y REGISTRAL DEL ESTADO DE SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0519',
            'cve_area' => '051901',
            'descripcion' => 'INSTITUTO CATASTRAL Y REGISTRAL DEL ESTADO DE SONORA',
        ]);
        // 0520 PROCURADURIA FISCAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0520',
            'cve_area' => '052001',
            'descripcion' => 'PROCURADURIA FISCAL',
        ]);
        // 0521 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0521',
            'cve_area' => '052101',
            'descripcion' => 'SECRETARIA',
        ]);
        // 0522 SUBSECRETARIA DE INGRESOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0522',
            'cve_area' => '052201',
            'descripcion' => 'SUBSECRETARIA DE INGRESOS',
        ]);
        // 0523 SUBSECRETARIA DE PLANEACION DEL DESARROLLO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0523',
            'cve_area' => '052301',
            'descripcion' => 'SUBSECRETARIA DE PLANEACION DEL DESARROLLO',
        ]);
        // 0524 SUBSECRETARIA DE RECURSOS HUMANOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0524',
            'cve_area' => '052401',
            'descripcion' => 'SUBSECRETARIA DE RECURSOS HUMANOS',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0524',
            'cve_area' => '052402',
            'descripcion' => 'CENDI II',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0524',
            'cve_area' => '052403',
            'descripcion' => 'DESPACHO DEL SUBSECRETARIO',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0524',
            'cve_area' => '052404',
            'descripcion' => 'DIRECCION ADMINISTRATIVA',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0524',
            'cve_area' => '052405',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y OPERACION DE NOMINA',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0524',
            'cve_area' => '052406',
            'descripcion' => 'DIRECCION DE DESARROLLO ORGANIZACIONAL',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0524',
            'cve_area' => '052407',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION DE RECURSOS HUMANOS',
        ]);
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0524',
            'cve_area' => '052408',
            'descripcion' => 'DIRECCION GENERAL DE SISTEMAS Y PROCESOS DE NOMINA',
        ]);
        // 0525 TESORERIA GENERAL DEL ESTADO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0525',
            'cve_area' => '052501',
            'descripcion' => 'TESORERIA GENERAL DEL ESTADO',
        ]);
        
        // 10 SECRETARIA DE INFRAESTRUCTURA Y DESARROLLO URBANO
        // 1001 DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1001',
            'cve_area' => '100101',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS',
        ]);
        // 1002 DIRECCION GENERAL DE COSTOS LICITACIONES Y CONTRATOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1002',
            'cve_area' => '100201',
            'descripcion' => 'DIRECCION GENERAL DE COSTOS LICITACIONES Y CONTRATOS',
        ]);
        // 1003 DIRECCION GENERAL DE EJECUCION DE OBRAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1003',
            'cve_area' => '100301',
            'descripcion' => 'DIRECCION GENERAL DE EJECUCION DE OBRAS',
        ]);
        // 1004 DIRECCION GENERAL DE PLANEACION Y ORDENAMIENTO TERRITORIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1004',
            'cve_area' => '100401',
            'descripcion' => 'DIRECCION GENERAL DE PLANEACION Y ORDENAMIENTO TERRITORIAL',
        ]);
        // 1005 DIRECCION GENERAL DE PROGRAMACION Y EVALUACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1005',
            'cve_area' => '100501',
            'descripcion' => 'DIRECCION GENERAL DE PROGRAMACION Y EVALUACION',
        ]);
        // 1006 DIRECCION GENERAL DE PROYECTOS E INGENIERIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1006',
            'cve_area' => '100601',
            'descripcion' => 'DIRECCION GENERAL DE PROYECTOS E INGENIERIA',
        ]);
        // 1007 DIRECCION GENERAL DE TRANSPORTE
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1007',
            'cve_area' => '100701',
            'descripcion' => 'DIRECCION GENERAL DE TRANSPORTE',
        ]);
        // 1008 DIRECCION JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1008',
            'cve_area' => '100801',
            'descripcion' => 'DIRECCION JURIDICA',
        ]);
        // 1009 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1009',
            'cve_area' => '100901',
            'descripcion' => 'SECRETARIA',
        ]);
        // 1010 SUBSECRETARIA DE DESARROLLO URBANO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1010',
            'cve_area' => '101001',
            'descripcion' => 'SUBSECRETARIA DE DESARROLLO URBANO',
        ]);
        // 1011 SUBSECRETARIA DE OBRAS PUBLICAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1011',
            'cve_area' => '101101',
            'descripcion' => 'SUBSECRETARIA DE OBRAS PUBLICAS',
        ]);
        // 19 SECRETARIA DE LA CONSEJERIA JURIDICA DEL GOBIERNO DEL ESTADO
        // 1901 CONSEJERIA JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1901',
            'cve_area' => '190101',
            'descripcion' => 'CONSEJERIA JURIDICA',
        ]);
        // 1902 CONSEJERIA JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1902',
            'cve_area' => '190201',
            'descripcion' => 'DEFENSORIA PUBLICA',
        ]);
        //06 SECRETARIA DE LA CONTRALORIA GENERAL
        //0601 COORDINACION EJECUTIVA DE INVESTIGACION DE FALTAS ADMINISTRATIVAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0601',
            'cve_area' => '060101',
            'descripcion' => 'COORDINACION EJECUTIVA DE INVESTIGACION DE FALTAS ADMINISTRATIVAS',
        ]);
        //0602 COORDINACION EJECUTIVA DE SUSTANCIACION Y RESOLUCION DE RESPONSABILIDADES Y SITUACION PATRIMONIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0602',
            'cve_area' => '060201',
            'descripcion' => 'COORDINACION EJECUTIVA DE SUSTANCIACION Y RESOLUCION DE RESPONSABILIDADES Y SITUACION PATRIMONIAL',
        ]);
        //0603 COORDINACION GENERAL DE ORGANOS INTERNOS DE CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0603',
            'cve_area' => '060301',
            'descripcion' => 'COORDINACION GENERAL DE ORGANOS INTERNOS DE CONTROL',
        ]);
        //0604 DIRECCION GENERAL DE ADMINISTRACION Y CONTROL PRESUPUESTAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0604',
            'cve_area' => '060401',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y CONTROL PRESUPUESTAL',
        ]);
        //0605 DIRECCION GENERAL DE AUDITORIA GUBERNAMENTAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0605',
            'cve_area' => '060501',
            'descripcion' => 'DIRECCION GENERAL DE AUDITORIA GUBERNAMENTAL',
        ]);
        //0606 DIRECCION GENERAL DE CONTRALORIA SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0606',
            'cve_area' => '060601',
            'descripcion' => 'DIRECCION GENERAL DE CONTRALORIA SOCIAL',
        ]);
        //0607 DIRECCION GENERAL DE EVALUACION Y CONTROL DE OBRA PUBLICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0607',
            'cve_area' => '060701',
            'descripcion' => 'DIRECCION GENERAL DE EVALUACION Y CONTROL DE OBRA PUBLICA',
        ]);
        //0608 DIRECCION GENERAL DE LICITACIONES Y CONTRATOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0608',
            'cve_area' => '060801',
            'descripcion' => 'DIRECCION GENERAL DE LICITACIONES Y CONTRATOS',
        ]);
        //0609 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0609',
            'cve_area' => '060901',
            'descripcion' => 'SECRETARIA',
        ]);
        //0610 SUBSECRETARIA DE DESARROLLO ADMINISTRATIVO Y TECNOLOGICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0610',
            'cve_area' => '061001',
            'descripcion' => 'SUBSECRETARIA DE DESARROLLO ADMINISTRATIVO Y TECNOLOGICO',
        ]);
        //0611 UNIDAD DE TRANSPARENCIA, ACCESO A LA INFORMACION Y PROTECCION DE DATOS PERSONALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0611',
            'cve_area' => '061101',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA, ACCESO A LA INFORMACION Y PROTECCION DE DATOS PERSONALES',
        ]);
        // 09 SECRETARIA DE SALUD PUBLICA
        // 0901 COM. EST. DE PROTECCION CONTRA RIESGOS SANITARIOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0901',
            'cve_area' => '090101',
            'descripcion' => 'COM. EST. DE PROTECCION CONTRA RIESGOS SANITARIOS',
        ]);
        // 0902 JUNTA DE ASISTENCIA PRIVADA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0902',
            'cve_area' => '090201',
            'descripcion' => 'JUNTA DE ASISTENCIA PRIVADA',
        ]);
        // 0903 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0903',
            'cve_area' => '090301',
            'descripcion' => 'SECRETARIA',
        ]);
        // 0904 SUBSECRETARIA DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0904',
            'cve_area' => '090401',
            'descripcion' => 'SUBSECRETARIA DE ADMINISTRACION Y FINANZAS',
        ]);
        // 0905 SUBSECRETARIA DE SERVICIOS DE SALUD
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0905',
            'cve_area' => '090501',
            'descripcion' => 'SUBSECRETARIA DE SERVICIOS DE SALUD',
        ]);
        // 16 SECRETARIA DEL TRABAJO
        // 1601 DIRECCION GENERAL DEL TRABAJO Y PREVISION SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1601',
            'cve_area' => '160101',
            'descripcion' => 'DIRECCION GENERAL DEL TRABAJO Y PREVISION SOCIAL',
        ]);
        // 1602 DIRECCION GENERAL OPERATIVA DEL SERVICIO ESTATAL DEL EMPLEO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1602',
            'cve_area' => '160201',
            'descripcion' => 'DIRECCION GENERAL OPERATIVA DEL SERVICIO ESTATAL DEL EMPLEO',
        ]);
        // 1603 JUNTAS DE CONCILIACION Y ARBITRAJE DEL ESTADO DE SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1603',
            'cve_area' => '160301',
            'descripcion' => 'JUNTAS DE CONCILIACION Y ARBITRAJE DEL ESTADO DE SONORA',
        ]);
        // 1604 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1604',
            'cve_area' => '160401',
            'descripcion' => 'SECRETARIA',
        ]);
        // 1605 SUBSECRETARIA DE PROMOCION DEL EMPLEO Y PRODUCTIVIDAD
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1605',
            'cve_area' => '160501',
            'descripcion' => 'SUBSECRETARIA DE PROMOCION DEL EMPLEO Y PRODUCTIVIDAD',
        ]);
        // 1606 SUBSECRETARIA DEL TRABAJO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1606',
            'cve_area' => '160601',
            'descripcion' => 'SUBSECRETARIA DEL TRABAJO',
        ]);
        // 20 SECRETARIA TECNICA Y DE ATENCION CIUDADANA
        // 2001 COORDINACION EJECUTIVA DE COMUNICACION SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2001',
            'cve_area' => '200101',
            'descripcion' => 'COORDINACION EJECUTIVA DE COMUNICACION SOCIAL',
        ]);
        // 2002 DIRECCION GENERAL DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2002',
            'cve_area' => '200201',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        // 2003 DIRECCION GENERAL DE ESTUDIOS Y PROYECTOS ESTRATEGICOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2003',
            'cve_area' => '200301',
            'descripcion' => 'DIRECCION GENERAL DE ESTUDIOS Y PROYECTOS ESTRATEGICOS',
        ]);
        // 21 SECRETARIO EJECUTIVO DE SEGURIDAD PUBLICA DEL ESTADO DE SONORA
        // 2101 CENTRO DE COMANDO, COMUNICACION, COMPUTO Y COORDINACION DE INTELIGENCIA (C5I)
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2101',
            'cve_area' => '210101',
            'descripcion' => 'CENTRO DE COMANDO, COMUNICACION, COMPUTO Y COORDINACION DE INTELIGENCIA (C5I)',
        ]);
        // 2102 COORDINACION ESTATAL DE TECNOLOGIA Y ESTUDIOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2102',
            'cve_area' => '210201',
            'descripcion' => 'COORDINACION ESTATAL DE TECNOLOGIA Y ESTUDIOS',
        ]);
        // 2103 COORDINACION ESTATAL DE VINCULACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2103',
            'cve_area' => '210301',
            'descripcion' => 'COORDINACION ESTATAL DE VINCULACION',
        ]);
        // 2104 COORDINACION GENERAL DE AYUDANTIA Y LOGISTICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2104',
            'cve_area' => '210401',
            'descripcion' => 'COORDINACION GENERAL DE AYUDANTIA Y LOGISTICA',
        ]);
        // 2105 COORDINACION GRAL. DEL SISTEMA ESTATAL DE INFORMACION SOBRE SEGURIDAD PUBLICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2105',
            'cve_area' => '210501',
            'descripcion' => 'COORDINACION GRAL. DEL SISTEMA ESTATAL DE INFORMACION SOBRE SEGURIDAD PUBLICA',
        ]);
        // 2106 DIR. GRAL. DEL INST. DE TRATAMIENTO Y DE APLICACION DE MEDIDAS PARA ADOLESCENTES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2106',
            'cve_area' => '210601',
            'descripcion' => 'DIR. GRAL. DEL INST. DE TRATAMIENTO Y DE APLICACION DE MEDIDAS PARA ADOLESCENTES',
        ]);
        // 2107 DIRECCION GENERAL DE ADMINISTRACION, EVALUACION Y CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2107',
            'cve_area' => '210701',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION, EVALUACION Y CONTROL',
        ]);
        // 2108 DIRECCION GENERAL DE EJECUCION DE PENAS, MEDIDAS DE SEGURIDAD, SUPERVISION DE MEDIDAS CAUTELARES, DE LA SUSPENSION CONDICIONAL DEL PROCESO Y EVALUACION DE RIESGO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2108',
            'cve_area' => '210801',
            'descripcion' => 'DIRECCION GENERAL DE EJECUCION DE PENAS, MEDIDAS DE SEGURIDAD, SUPERVISION DE MEDIDAS CAUTELARES, DE LA SUSPENSION CONDICIONAL DEL PROCESO Y EVALUACION DE RIESGO',
        ]);
        // 2109 DIRECCION GENERAL DE EJECUCION DE PENAS, MEDIDAS DE SEGURIDAD, SUPERVISION DE MEDIDAS CAUTELARES, DE LA SUSPENSION CONDICIONAL DEL PROCESO Y EVALUACION DE RIESGO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2109',
            'cve_area' => '210901',
            'descripcion' => 'DIRECCION GENERAL DE LA POLICIA ESTATAL DE SEGURIDAD PUBLICA',
        ]);
        // 2110 DIRECCION GENERAL DEL SISTEMA ESTATAL PENITENCIARIO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2110',
            'cve_area' => '211001',
            'descripcion' => 'DIRECCION GENERAL DEL SISTEMA ESTATAL PENITENCIARIO',
        ]);
        // 2111 SECRETARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '2111',
            'cve_area' => '211101',
            'descripcion' => 'SECRETARIA',
        ]);
        // 02 SUPREMO TRIBUNAL DE JUSTICIA
        // 0201 ARCHIVO GENERAL DEL PODER JUDICIAL DEL ESTADO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0201',
            'cve_area' => '020101',
            'descripcion' => 'ARCHIVO GENERAL DEL PODER JUDICIAL DEL ESTADO',
        ]);
        // 0202 CENTRALES DE ACTUARIOS EJECUTORES Y NOTIFICADORES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0202',
            'cve_area' => '020201',
            'descripcion' => 'CENTRALES DE ACTUARIOS EJECUTORES Y NOTIFICADORES',
        ]);
        // 0203 CENTROS DE JUSTICIA ALTERNATIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0203',
            'cve_area' => '020301',
            'descripcion' => 'CENTROS DE JUSTICIA ALTERNATIVA',
        ]);
        // 0204 INSTITUTO DE LA JUDICATURA SONORENSE
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0204',
            'cve_area' => '020401',
            'descripcion' => 'INSTITUTO DE LA JUDICATURA SONORENSE',
        ]);
        // 0205 JUZGADOS DE PRIMERA INSTANCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0205',
            'cve_area' => '020501',
            'descripcion' => 'JUZGADOS DE PRIMERA INSTANCIA',
        ]);
        // 0206 OFICIALIA MAYOR
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0206',
            'cve_area' => '020601',
            'descripcion' => 'OFICIALIA MAYOR',
        ]);
        // 0207 PRESIDENCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0207',
            'cve_area' => '020701',
            'descripcion' => 'PRESIDENCIA',
        ]);
        // 0208 SALAS MIXTAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0208',
            'cve_area' => '020801',
            'descripcion' => 'SALAS MIXTAS',
        ]);
        // 0209 SECRETARIA GENERAL DE ACUERDOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0209',
            'cve_area' => '020901',
            'descripcion' => 'SECRETARIA GENERAL DE ACUERDOS',
        ]);
        // 0210 TRIBUNALES REGIONALES DE CIRCUITO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0210',
            'cve_area' => '021001',
            'descripcion' => 'TRIBUNALES REGIONALES DE CIRCUITO',
        ]);
        // 0211 VISITADURIA JUDICIAL Y CONTRALORIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '0211',
            'cve_area' => '021101',
            'descripcion' => 'VISITADURIA JUDICIAL Y CONTRALORIA',
        ]);
        
        // 15 TRIBUNAL DE LO CONTENCIOSO ADMINISTRATIVO
        // 1501 VISITADURIA JUDICIAL Y CONTRALORIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1501',
            'cve_area' => '150101',
            'descripcion' => 'SALA ESPECIALIZADA EN MATERIA DE ANTICORRUPCION Y RESPONSABILIDADES ADMINISTRATIVAS',
        ]);
        // 1502 TRIBUNAL DE LO CONTENCIOSO ADMINISTRATIVO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '1502',
            'cve_area' => '150201',
            'descripcion' => 'TRIBUNAL DE LO CONTENCIOSO ADMINISTRATIVO',
        ]);        
        // 31 CENTRO ESTATAL DE TRASPLANTES
        // 3101 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3101',
            'cve_area' => '310101',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 37 COMISION DE ECOLOGIA Y DESARROLLO SUSTENTABLE DEL ESTADO
        // 3701 COMISION EJECUTIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3701',
            'cve_area' => '370101',
            'descripcion' => 'COMISION EJECUTIVA',
        ]);        
        // 3702 DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3702',
            'cve_area' => '370201',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS',
        ]);
        // 3703 DIRECCION GENERAL DE CAMBIO CLIMATICO Y CULTURA AMBIENTAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3703',
            'cve_area' => '370301',
            'descripcion' => 'DIRECCION GENERAL DE CAMBIO CLIMATICO Y CULTURA AMBIENTAL',
        ]);
        // 3704 DIRECCION GENERAL DE CONSERVACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3704',
            'cve_area' => '370401',
            'descripcion' => 'DIRECCION GENERAL DE CONSERVACION',
        ]);
        // 3705 DIRECCION GENERAL DE GESTION Y POLITICA AMBIENTAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3705',
            'cve_area' => '370501',
            'descripcion' => 'DIRECCION GENERAL DE GESTION Y POLITICA AMBIENTAL',
        ]);
        // 3706 DIRECCION GENERAL DE RECURSOS HUMANOS E INFORMATICOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3706',
            'cve_area' => '370601',
            'descripcion' => 'DIRECCION GENERAL DE RECURSOS HUMANOS E INFORMATICOS',
        ]);
        // 3707 DIRECCION GENERAL DEL CENTRO ECOLOGICO DE SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3707',
            'cve_area' => '370701',
            'descripcion' => 'DIRECCION GENERAL DEL CENTRO ECOLOGICO DE SONORA',
        ]);
        // 3708 DIRECCION GENERAL DEL DELFINARIO SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3708',
            'cve_area' => '370801',
            'descripcion' => 'DIRECCION GENERAL DEL DELFINARIO SONORA',
        ]);
        // 3709 DIRECCION GENERAL JURIDICA Y UNIDAD DE ENLACE
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3709',
            'cve_area' => '370901',
            'descripcion' => 'DIRECCION GENERAL JURIDICA Y UNIDAD DE ENLACE',
        ]);
        // 3710 ORGANO INTERNO DE CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3710',
            'cve_area' => '371001',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);        
        // 33 COMISION DE FOMENTO AL TURISMO DEL ESTADO DE SONORA
        // 3301 COORDINACION ADMINISTRATIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3301',
            'cve_area' => '330101',
            'descripcion' => 'COORDINACION ADMINISTRATIVA',
        ]);
        // 3302 COORDINACION ADMINISTRATIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3302',
            'cve_area' => '330201',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        // 3303 DIRECCION DE ASUNTOS JURIDICOS Y NORMATIVIDAD
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3303',
            'cve_area' => '330301',
            'descripcion' => 'DIRECCION DE ASUNTOS JURIDICOS Y NORMATIVIDAD',
        ]);
        // 3304 DIRECCION DE PLANEACION Y SEGUIMIENTO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3304',
            'cve_area' => '330401',
            'descripcion' => 'DIRECCION DE PLANEACION Y SEGUIMIENTO',
        ]);
        // 3305 DIRECCION DE PROMOCION Y EVENTOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3305',
            'cve_area' => '330501',
            'descripcion' => 'DIRECCION DE PROMOCION Y EVENTOS',
        ]);
        // 3306 SUBCOORDINACION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3306',
            'cve_area' => '330601',
            'descripcion' => 'SUBCOORDINACION GENERAL',
        ]);
        // 38 COMISION DE VIVIENDA DEL ESTADO DE SONORA
        // 3801 DIRECCION DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3801',
            'cve_area' => '380101',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        // 3802 DIRECCION DE PROMOCION Y PROGRAMAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3802',
            'cve_area' => '380201',
            'descripcion' => 'DIRECCION DE PROMOCION Y PROGRAMAS',
        ]);
        // 3803 DIRECCION DE RESERVAS TERRITORIALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3803',
            'cve_area' => '380301',
            'descripcion' => 'DIRECCION DE RESERVAS TERRITORIALES',
        ]);
        // 3804 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3804',
            'cve_area' => '380401',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 3805 DIRECCION TECNICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3805',
            'cve_area' => '380501',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        // 39 COMISION DEL DEPORTE DEL ESTADO DE SONORA
        // 3901 DIRECCION DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3901',
            'cve_area' => '390101',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        // 3902 DIRECCION DE INFRAESTRUCTURA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3902',
            'cve_area' => '390201',
            'descripcion' => 'DIRECCION DE INFRAESTRUCTURA',
        ]);
        // 3903 DIRECCION DEL DEPORTE
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3903',
            'cve_area' => '390301',
            'descripcion' => 'DIRECCION DEL DEPORTE',
        ]);
        // 3904 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3904',
            'cve_area' => '390401',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 3905 DIRECCION JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3905',
            'cve_area' => '390501',
            'descripcion' => 'DIRECCION JURIDICA',
        ]);
        // 40 COMISION ESTATAL DE CIENCIA Y TECNOLOGIA
        // 4001 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4001',
            'cve_area' => '400101',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 35 COMISION ESTATAL DEL AGUA
        // 3501 DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3501',
            'cve_area' => '350101',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS',
        ]);
        // 3502 DIRECCION GENERAL DE COSTOS, CONCURSOS Y CONTRATOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3502',
            'cve_area' => '350201',
            'descripcion' => 'DIRECCION GENERAL DE COSTOS, CONCURSOS Y CONTRATOS',
        ]);
        // 3503 DIRECCION GENERAL DE DESARROLLO Y FORTALECIMIENTO INSTITUCIONAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3503',
            'cve_area' => '350301',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO Y FORTALECIMIENTO INSTITUCIONAL',
        ]);
        // 3504 DIRECCION GENERAL DE INFRAESTRUCTURA HIDRÁULICA URBANA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3504',
            'cve_area' => '350401',
            'descripcion' => 'DIRECCION GENERAL DE INFRAESTRUCTURA HIDRÁULICA URBANA',
        ]);
        // 3505 DIRECCION GENERAL DE INFRAESTRUCTURA HIDROAGRÍCOLA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3505',
            'cve_area' => '350501',
            'descripcion' => 'DIRECCION GENERAL DE INFRAESTRUCTURA HIDROAGRÍCOLA',
        ]);
        // 3506 UNIDAD DE ASUNTOS JURIDICOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3506',
            'cve_area' => '350601',
            'descripcion' => 'UNIDAD DE ASUNTOS JURIDICOS',
        ]);        
        // 3507 VOCALIA EJECUTIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3507',
            'cve_area' => '350701',
            'descripcion' => 'VOCALIA EJECUTIVA',
        ]);
        // 34 COMISION ESTATAL DEL AGUA
        // 3401 COORDINACION GENERAL DE CEDIS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3401',
            'cve_area' => '340101',
            'descripcion' => 'COORDINACION GENERAL DE CEDIS',
        ]);
        // 3402 DIRECCION DE PLANEACION DEL DESARROLLO INDIGENA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3402',
            'cve_area' => '340201',
            'descripcion' => 'DIRECCION DE PLANEACION DEL DESARROLLO INDIGENA',
        ]);
        // 3403 DIRECCION GENERAL DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3403',
            'cve_area' => '340301',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        // 3404 DIRECCION GENERAL DE OPERACION DE PROGRAMAS INSTITUCIONALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3404',
            'cve_area' => '340401',
            'descripcion' => 'DIRECCION GENERAL DE OPERACION DE PROGRAMAS INSTITUCIONALES',
        ]);
        // 30 CONSEJO ESTATAL DE CONCERTACION PARA LA OBRA PUBLICA
        // 3001 COORDINACION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3001',
            'cve_area' => '300101',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        // 3002 DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3002',
            'cve_area' => '300201',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS',
        ]);
        // 3003 DIRECCION GENERAL DE CONCERTACION Y APOYO TECNICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3003',
            'cve_area' => '300301',
            'descripcion' => 'DIRECCION GENERAL DE CONCERTACION Y APOYO TECNICO',
        ]);
        // 3004 DIRECCION GENERAL DE ORGANIZACION SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3004',
            'cve_area' => '300401',
            'descripcion' => 'DIRECCION GENERAL DE ORGANIZACION SOCIAL',
        ]);        
        // 41 FIDEICOMISO FONDO REVOLVENTE SONORA
        // 4101 COORDINACION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4101',
            'cve_area' => '410101',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        // 4102 DIRECCION DE ADMINISTRACION, FINANZAS Y OPERACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4102',
            'cve_area' => '410201',
            'descripcion' => 'DIRECCION DE ADMINISTRACION, FINANZAS Y OPERACION',
        ]);
        // 4103 DIRECCION DE PROMOCION Y CREDITO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4103',
            'cve_area' => '410301',
            'descripcion' => 'DIRECCION DE PROMOCION Y CREDITO',
        ]);
        // 4104 DIRECCION TECNICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4104',
            'cve_area' => '410401',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        // 43 FONDO DE OPERACION DE OBRAS SONORA SI
        // 4301 COORDINACION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4301',
            'cve_area' => '430101',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        // 4302 DIRECCION GENERAL DE OPERACION DEL ACUEDUCTO INDEPENDENCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4302',
            'cve_area' => '430201',
            'descripcion' => 'DIRECCION GENERAL DE OPERACION DEL ACUEDUCTO INDEPENDENCIA',
        ]);
        // 42 FINANCIERA PARA EL DESARROLLO ECONOMICO DE SONORA
        // 4201 DESPACHO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4201',
            'cve_area' => '420101',
            'descripcion' => 'DESPACHO',
        ]);
        // 4202 DIRECCION GENERAL DE ADMINISTRACION, FINANZAS Y OPERACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4202',
            'cve_area' => '420201',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION, FINANZAS Y OPERACION',
        ]);
        // 4203 DIRECCION GENERAL DE NORMATIVIDAD Y CARTERA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4203',
            'cve_area' => '420301',
            'descripcion' => 'DIRECCION GENERAL DE NORMATIVIDAD Y CARTERA',
        ]);
        // 4204 DIRECCION GENERAL DE PROMOCION, FINANCIAMIENTOS Y SUPERVISION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4204',
            'cve_area' => '420401',
            'descripcion' => 'DIRECCION GENERAL DE PROMOCION, FINANCIAMIENTOS Y SUPERVISION',
        ]);
        // 44 FONDO ESTATAL PARA LA MODERNIZACION DEL TRANSPORTE
        // 4401 DIRECCION DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4401',
            'cve_area' => '440101',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        // 4402 DIRECCION DE MONITOREO, SUPERVISION Y CONCILIACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4402',
            'cve_area' => '440201',
            'descripcion' => 'DIRECCION DE MONITOREO, SUPERVISION Y CONCILIACION',
        ]);
        // 4403 DIRECCION DE PLANEACION, PROYECTOS Y EVALUACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4403',
            'cve_area' => '440301',
            'descripcion' => 'DIRECCION DE PLANEACION, PROYECTOS Y EVALUACION',
        ]);
        // 4404 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4404',
            'cve_area' => '440401',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 45 HOSPITAL INFANTIL DEL ESTADO DE SONORA
        // 4501 ASISTENCIA SOCIAL HIES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4501',
            'cve_area' => '450101',
            'descripcion' => 'ASISTENCIA SOCIAL HIES',
        ]);
        // 4502 DIRECCION ADMINISTRATIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4502',
            'cve_area' => '450201',
            'descripcion' => 'ASISTENCIA SOCIAL HIES',
        ]);
        // 4503 DIRECCION DE DIVISION DE APOYO HOSPITALARIO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4503',
            'cve_area' => '450301',
            'descripcion' => 'DIRECCION DE DIVISION DE APOYO HOSPITALARIO',
        ]);
        // 4504 DIRECCION DE ENSEÑANZA, INVESTIGACION Y CALIDAD
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4504',
            'cve_area' => '450401',
            'descripcion' => 'DIRECCION DE ENSEÑANZA, INVESTIGACION Y CALIDAD',
        ]);
        // 4505 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4505',
            'cve_area' => '450501',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 4506 DIRECCION MEDICA DE PEDIATRIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4506',
            'cve_area' => '450601',
            'descripcion' => 'DIRECCION MEDICA DE PEDIATRIA',
        ]);
        // 4507 ENFERMERIA PEDIATRICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4507',
            'cve_area' => '450701',
            'descripcion' => 'ENFERMERIA PEDIATRICA',
        ]);
        // 4508 JURIDICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4508',
            'cve_area' => '450801',
            'descripcion' => 'JURIDICO',
        ]);
        // 4509 UNIDAD DE SUPERVISION Y DESARROLLO ADMINISTATIVO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4509',
            'cve_area' => '450901',
            'descripcion' => 'UNIDAD DE SUPERVISION Y DESARROLLO ADMINISTATIVO',
        ]);
        // 32 INSTITUTO DE ACUACULTURA DEL ESTADO DE SONORA
        // 3201 DIRECCION DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3201',
            'cve_area' => '320101',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        // 3202 DIRECCION DE PROMOCION Y CAPACITACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3202',
            'cve_area' => '320201',
            'descripcion' => 'DIRECCION DE PROMOCION Y CAPACITACION',
        ]);
        // 3203 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3203',
            'cve_area' => '320301',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 3204 DIRECCION TECNICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3204',
            'cve_area' => '320401',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        // 36 INSTITUTO DE BECAS Y CREDITO EDUCATIVO DEL ESTADO DE SONORA
        // 3601 COORDINACION DE EXTENSION NOGALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3601',
            'cve_area' => '360101',
            'descripcion' => 'COORDINACION DE EXTENSION NOGALES',
        ]);
        // 3602 DIRECCION DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3602',
            'cve_area' => '360201',
            'descripcion' => 'DIRECCION DE ADMINISTRACION',
        ]);
        // 3603 DIRECCION DE BECAS Y CREDITO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3603',
            'cve_area' => '360301',
            'descripcion' => 'DIRECCION DE BECAS Y CREDITO',
        ]);
        // 3604 DIRECCION DE GESTION FINANCIERA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3604',
            'cve_area' => '360401',
            'descripcion' => 'DIRECCION DE GESTION FINANCIERA',
        ]);
        // 3605 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3605',
            'cve_area' => '360501',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 3606 ORGANO INTERNO DE CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3606',
            'cve_area' => '360601',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        // 3607 SUBDIRECCION DE CARTERA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3607',
            'cve_area' => '360701',
            'descripcion' => 'SUBDIRECCION DE CARTERA',
        ]);
        // 3608 SUBDIRECCION DE CONTABILIDAD Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3608',
            'cve_area' => '360801',
            'descripcion' => 'SUBDIRECCION DE CONTABILIDAD Y FINANZAS',
        ]);
        // 3609 SUBDIRECCION DE DESARROLLO ORGANIZACIONAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3609',
            'cve_area' => '360901',
            'descripcion' => 'SUBDIRECCION DE DESARROLLO ORGANIZACIONAL',
        ]);
        // 3610 SUBDIRECCION DE EVALUACION Y ASIGNACION DE BENEFICIARIOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3610',
            'cve_area' => '361001',
            'descripcion' => 'SUBDIRECCION DE EVALUACION Y ASIGNACION DE BENEFICIARIOS',
        ]);
        // 3611 SUBDIRECCION DE INFRAESTRUCTURA Y TECNOLOGIAS DE LA INFORMACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3611',
            'cve_area' => '361101',
            'descripcion' => 'SUBDIRECCION DE INFRAESTRUCTURA Y TECNOLOGIAS DE LA INFORMACION',
        ]);
        // 3612 SUBDIRECCION DE INTEGRACION DE PAGOS A BENEFICIARIOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3612',
            'cve_area' => '361201',
            'descripcion' => 'SUBDIRECCION DE INTEGRACION DE PAGOS A BENEFICIARIOS',
        ]);
        // 3613 SUBDIRECCION DE OPERACIONES Y VINCULACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3613',
            'cve_area' => '361301',
            'descripcion' => 'SUBDIRECCION DE OPERACIONES Y VINCULACION',
        ]);
        // 3614 SUBDIRECCION DE PLANEACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3614',
            'cve_area' => '361401',
            'descripcion' => 'SUBDIRECCION DE PLANEACION',
        ]);
        // 3615 UNIDAD DE TRANSPARENCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '3615',
            'cve_area' => '361501',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA',
        ]);
        // 46 INSTITUTO SONORENSE DE CULTURA
        // 4601 BIBLIOTECA PUBLICA JESUS CORRAL RUIZ
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4601',
            'cve_area' => '460101',
            'descripcion' => 'BIBLIOTECA PUBLICA JESUS CORRAL RUIZ',
        ]);
        // 4602 COORDINACION DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4602',
            'cve_area' => '460201',
            'descripcion' => 'COORDINACION DE ADMINISTRACION',
        ]);
        // 4603 COORDINACION DE ARTES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4603',
            'cve_area' => '460301',
            'descripcion' => 'COORDINACION DE ARTES',
        ]);
        // 4604 COORDINACION DE CASA DE LA CULTURA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4604',
            'cve_area' => '460401',
            'descripcion' => 'COORDINACION DE CASA DE LA CULTURA',
        ]);
        // 4605 COORDINACION DE PATRIMONIO CULTURAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4605',
            'cve_area' => '460501',
            'descripcion' => 'COORDINACION DE PATRIMONIO CULTURAL',
        ]);
        // 4606 COORDINACION DE VINCULACION CULTURAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4606',
            'cve_area' => '460601',
            'descripcion' => 'COORDINACION DE VINCULACION CULTURAL',
        ]);
         // 4607 DEPARTAMENTO DE FONDO DE APOYO A LA CULTURA
         DB::table('areas')->insert([
            'fk_cve_unidad' => '4607',
            'cve_area' => '460701',
            'descripcion' => 'DEPARTAMENTO DE FONDO DE APOYO A LA CULTURA',
        ]);
        // 4608 DEPARTAMENTO DE INFORMACION Y DIFUSION CULTURAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4608',
            'cve_area' => '460801',
            'descripcion' => 'DEPARTAMENTO DE INFORMACION Y DIFUSION CULTURAL',
        ]);
        // 4609 DEPARTAMENTO DE LITERATURA Y BIBLIOTECAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4609',
            'cve_area' => '460901',
            'descripcion' => 'DEPARTAMENTO DE LITERATURA Y BIBLIOTECAS',
        ]);
        // 4610 DEPARTAMENTO DE MUSICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4610',
            'cve_area' => '461001',
            'descripcion' => 'DEPARTAMENTO DE MUSICA',
        ]);
        // 4611 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4611',
            'cve_area' => '461101',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 4612 MUSEO DEL CENTRO CULTURAL MUSAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4612',
            'cve_area' => '461201',
            'descripcion' => 'MUSEO DEL CENTRO CULTURAL MUSAS',
        ]);
        // 4613 MUSEO SONORA EN LA REVOLUCION MUSOR
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4613',
            'cve_area' => '461301',
            'descripcion' => 'MUSEO SONORA EN LA REVOLUCION MUSOR',
        ]);
        // 47 INSTITUTO SONORENSE DE INFRAESTRUCTURA EDUCATIVA
        // 4701 DESPACHO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4701',
            'cve_area' => '470101',
            'descripcion' => 'DESPACHO',
        ]);
        // 4702 DIRECCION GENERAL DE FINANZAS Y ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4702',
            'cve_area' => '470201',
            'descripcion' => 'DIRECCION GENERAL DE FINANZAS Y ADMINISTRACION',
        ]);
        // 4703 DIRECCION GENERAL DE INNOVACION Y SISTEMAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4703',
            'cve_area' => '470301',
            'descripcion' => 'DIRECCION GENERAL DE INNOVACION Y SISTEMAS',
        ]);
        // 4704 DIRECCION GENERAL DE INNOVACION Y SISTEMAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4704',
            'cve_area' => '470401',
            'descripcion' => 'DIRECCION GENERAL DE INNOVACION Y SISTEMAS',
        ]);
        // 4705 DIRECCION GENERAL TECNICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4705',
            'cve_area' => '470501',
            'descripcion' => 'DIRECCION GENERAL TECNICO',
        ]);
        // 4706 ORGANO INTERNO DE CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4706',
            'cve_area' => '470601',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        // 48 INSTITUTO SONORENSE DE LA JUVENTUD
        // 4801 ORGANO INTERNO DE CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4801',
            'cve_area' => '480101',
            'descripcion' => 'DIRECCION DE ESTUDIOS Y PROYECTOS',
        ]);
        // 4802 DIRECCION DE PLANEACION Y ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4802',
            'cve_area' => '480201',
            'descripcion' => 'DIRECCION DE PLANEACION Y ADMINISTRACION',
        ]);
        // 4803 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4803',
            'cve_area' => '480301',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 4804 DIRECCION OPERATIVA Y ENLACE MUNICIPAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4804',
            'cve_area' => '480401',
            'descripcion' => 'DIRECCION OPERATIVA Y ENLACE MUNICIPAL',
        ]);
        // 49 INSTITUTO SONORENSE DE LAS MUJERES
        // 4901 COORDINACION EJECUTIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4901',
            'cve_area' => '490101',
            'descripcion' => 'COORDINACION EJECUTIVA',
        ]);
        // 4902 DIRECCION DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4902',
            'cve_area' => '490201',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        // 4903 DIRECCION DE ATENCION CIUDADANA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4903',
            'cve_area' => '490301',
            'descripcion' => 'DIRECCION DE ATENCION CIUDADANA',
        ]);
        // 4904 DIRECCION DE COMUNICACION E IMAGEN
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4904',
            'cve_area' => '490401',
            'descripcion' => 'DIRECCION DE COMUNICACION E IMAGEN',
        ]);
        // 4905 DIRECCION DE DERECHOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4905',
            'cve_area' => '490501',
            'descripcion' => 'DIRECCION DE DERECHOS',
        ]);
        // 4906 DIRECCION DE EVALUACION Y SEGUIMIENTOS TECNICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4906',
            'cve_area' => '490601',
            'descripcion' => 'DIRECCION DE EVALUACION Y SEGUIMIENTOS TECNICO',
        ]);
        // 4907 DIRECCION DE PROGRAMAS SOCIALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4907',
            'cve_area' => '490701',
            'descripcion' => 'DIRECCION DE PROGRAMAS SOCIALES',
        ]);
        // 4908 UNIDAD DE TRANSPARENCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '4908',
            'cve_area' => '490801',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA',
        ]);
        // 50 INSTITUTO SUPERIOR DE SEGURIDAD PUBLICA DEL ESTADO
        // 5001 COMANDANCIA DE INSTRUCCION Y DISCIPLINA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5001',
            'cve_area' => '500101',
            'descripcion' => 'COMANDANCIA DE INSTRUCCION Y DISCIPLINA',
        ]);
        // 5002 DIRECCION DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5002',
            'cve_area' => '500201',
            'descripcion' => 'DIRECCION DE ADMINISTRACION',
        ]);
        // 5003 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5003',
            'cve_area' => '500301',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 5004 DIRECCION GENERAL DE INVESTIGACION Y DESARROLLO ACADEMICO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5004',
            'cve_area' => '500401',
            'descripcion' => 'DIRECCION GENERAL DE INVESTIGACION Y DESARROLLO ACADEMICO',
        ]);
        // 5005 DIRECCION JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5005',
            'cve_area' => '500501',
            'descripcion' => 'DIRECCION JURIDICA',
        ]);
        // 51 JUNTA DE CAMINOS
        // 5101 AREA DE SEGUIMIENTOS DE AUDITORIAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5101',
            'cve_area' => '510101',
            'descripcion' => 'AREA DE SEGUIMIENTOS DE AUDITORIAS',
        ]);
        // 5102 CONTABILIDAD Y PRESUPUESTO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5102',
            'cve_area' => '510201',
            'descripcion' => 'CONTABILIDAD Y PRESUPUESTO',
        ]);
        // 5103 COORDINACION DE EJECUCION DE OBRAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5103',
            'cve_area' => '510301',
            'descripcion' => 'COORDINACION DE EJECUCION DE OBRAS',
        ]);
        // 5104 COORDINACION DE RECURSOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5104',
            'cve_area' => '510401',
            'descripcion' => 'COORDINACION DE RECURSOS',
        ]);
        // 5105 COORDINACION Y SUPERINTENDENCIA DE MAQUINARIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5105',
            'cve_area' => '510501',
            'descripcion' => 'COORDINACION Y SUPERINTENDENCIA DE MAQUINARIA',
        ]);
        // 5106 DIRECCION DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5106',
            'cve_area' => '510601',
            'descripcion' => 'DIRECCION DE ADMINISTRACION',
        ]);
        // 5107 DIRECCION DE OBRAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5107',
            'cve_area' => '510701',
            'descripcion' => 'DIRECCION DE OBRAS',
        ]);
        // 5108 DIRECCION DE SUPERVISION Y CONTROL DE CALIDAD
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5108',
            'cve_area' => '510801',
            'descripcion' => 'DIRECCION DE SUPERVISION Y CONTROL DE CALIDAD',
        ]);
        // 5109 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5109',
            'cve_area' => '510901',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 5110 DIRECCION TECNICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5110',
            'cve_area' => '511001',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        // 5111 ORGANO INTERNO DE CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5111',
            'cve_area' => '511101',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        // 5112 SERVICIOS GENERALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5112',
            'cve_area' => '511201',
            'descripcion' => 'SERVICIOS GENERALES',
        ]);
        // 5113 UNIDAD DE LICITACIONES Y CONTRATOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5113',
            'cve_area' => '511301',
            'descripcion' => 'UNIDAD DE LICITACIONES Y CONTRATOS',
        ]);
        // 5114 UNIDAD DE LICITACIONES Y CONTRATOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5114',
            'cve_area' => '511401',
            'descripcion' => 'UNIDAD DE LICITACIONES Y CONTRATOS',
        ]);
        // 5115 UNIDAD JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5115',
            'cve_area' => '511501',
            'descripcion' => 'UNIDAD JURIDICA',
        ]);
        // 52 OPERADORA DEL  PROYECTOS ESTRATEGICOS DEL ESTADO DE SONORA
        // 5201 DIRECCION DE ADMINISTRACION Y FINANZAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5201',
            'cve_area' => '520101',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        // 5202 DIRECCION DE ANALISIS Y GESTION FINANCIERA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5202',
            'cve_area' => '520201',
            'descripcion' => 'DIRECCION DE ANALISIS Y GESTION FINANCIERA',
        ]);
        // 5203 DIRECCION DE PROMOCION DE PRODUCTOS INMOBILIARIOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5203',
            'cve_area' => '520301',
            'descripcion' => 'DIRECCION DE PROMOCION DE PRODUCTOS INMOBILIARIOS',
        ]);
        // 5204 DIRECCION DE PROYECTOS REGIONALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5204',
            'cve_area' => '520401',
            'descripcion' => 'DIRECCION DE PROYECTOS REGIONALES',
        ]);
        // 5205 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5205',
            'cve_area' => '520501',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 53 PROCURADURIA  AMBIENTAL DEL ESTADO DE SONORA
        // 5301 DIRECCION GENERAL 
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5301',
            'cve_area' => '530101',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 5302 DIRECCION GENERAL DE INSPECCION Y VIGILANCIA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5302',
            'cve_area' => '530201',
            'descripcion' => 'DIRECCION GENERAL DE INSPECCION Y VIGILANCIA',
        ]);
        // 5303 DIRECCION GENERAL DE RECURSOS NATURALES Y FOMENTO AMBIENTAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5303',
            'cve_area' => '530301',
            'descripcion' => 'DIRECCION GENERAL DE RECURSOS NATURALES Y FOMENTO AMBIENTAL',
        ]);
        // 5304 UNIDAD DE TRANSPARENCIA Y ASUNTOS JURIDICOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5304',
            'cve_area' => '530401',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA Y ASUNTOS JURIDICOS',
        ]);
        // 54 PROSONORA
        // 5401 DIRECCION ADMINISTRATIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5401',
            'cve_area' => '540101',
            'descripcion' => 'DIRECCION ADMINISTRATIVA',
        ]);
        // 5402 DIRECCION DE ATENCION A INVERSIONISTAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5402',
            'cve_area' => '540201',
            'descripcion' => 'DIRECCION DE ATENCION A INVERSIONISTAS',
        ]);
        // 5403 DIRECCION DE ATENCION A INVERSIONISTAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5403',
            'cve_area' => '540301',
            'descripcion' => 'DIRECCION DE ATENCION A INVERSIONISTAS',
        ]);
        // 5404 DIRECCION DE RELACIONES INTERNACIONALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5404',
            'cve_area' => '540401',
            'descripcion' => 'DIRECCION DE RELACIONES INTERNACIONALES',
        ]);
        // 5405 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5405',
            'cve_area' => '540501',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 5406 DIRECCION JURIDICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5406',
            'cve_area' => '540601',
            'descripcion' => 'DIRECCION JURIDICA',
        ]);
        // 5407 DIRECCION OPERATIVA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5407',
            'cve_area' => '540701',
            'descripcion' => 'DIRECCION OPERATIVA',
        ]);
        // 55 RADIO SONORA
        // 5501 DIRECCION DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5501',
            'cve_area' => '550101',
            'descripcion' => 'DIRECCION DE ADMINISTRACION',
        ]);
        // 5502 DIRECCION DE NOTICIAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5502',
            'cve_area' => '550201',
            'descripcion' => 'DIRECCION DE NOTICIAS',
        ]);
        // 5503 DIRECCION DE OPERACIONES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5503',
            'cve_area' => '550301',
            'descripcion' => 'DIRECCION DE OPERACIONES',
        ]);
        // 5504 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5504',
            'cve_area' => '550401',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 5505 DIRECCION TECNICA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5505',
            'cve_area' => '550501',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        // 56 SERVICIO DE ADMON Y ENAJENACION DE BIENES
        // 5601 COORDINACION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5601',
            'cve_area' => '560101',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        // 57 SISTEMA PARA EL DESARROLLO INTEGRAL DE LA FAMILIA EN EL ESTADO
        // 5701 COORDINACION GENERAL DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5701',
            'cve_area' => '570101',
            'descripcion' => 'COORDINACION GENERAL DE ADMINISTRACION',
        ]);
        // 5702 COORDINACION GENERAL DE ADMINISTRACION
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5702',
            'cve_area' => '570201',
            'descripcion' => 'DIRECCION DE ATENCION A PERSONAS CON DISCAPACIDAD',
        ]);
        // 5703 DIRECCION DE ATENCION A POBLACION VULNERABLE
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5703',
            'cve_area' => '570301',
            'descripcion' => 'DIRECCION DE ATENCION A POBLACION VULNERABLE',
        ]);
        // 5704 DIRECCION DE PROGRAMAS ALIMENTARIOS Y DESARROLLO COMUNITARIO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5704',
            'cve_area' => '570401',
            'descripcion' => 'DIRECCION DE PROGRAMAS ALIMENTARIOS Y DESARROLLO COMUNITARIO',
        ]);
        // 5705 DIRECCION DE VINCULACION CON ORGANISMOS E INSTITUCIONES ASISTENCIALES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5705',
            'cve_area' => '570501',
            'descripcion' => 'DIRECCION DE VINCULACION CON ORGANISMOS E INSTITUCIONES ASISTENCIALES',
        ]);
        // 5706 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5706',
            'cve_area' => '570601',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 5707 ORGANO INTERNO DE CONTROL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5707',
            'cve_area' => '570701',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        // 5708 PROCURADURIA DE LA DEFENSA DEL ADULTO MAYOR
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5708',
            'cve_area' => '570801',
            'descripcion' => 'PROCURADURIA DE LA DEFENSA DEL ADULTO MAYOR',
        ]);
        // 5709 PROCURADURIA DE PROTECCION DE NIÑAS Y NIÑOS ADOLESCENTES DEL ESTADO DE SONORA
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5709',
            'cve_area' => '570901',
            'descripcion' => 'PROCURADURIA DE PROTECCION DE NIÑAS Y NIÑOS ADOLESCENTES DEL ESTADO DE SONORA',
        ]);
        // 5710 UNIDAD DE ASUNTOS JURIDICOS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5710',
            'cve_area' => '571001',
            'descripcion' => 'UNIDAD DE ASUNTOS JURIDICOS',
        ]);
        // 5711 UNIDAD DE COMUNICACION SOCIAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5711',
            'cve_area' => '571101',
            'descripcion' => 'UNIDAD DE COMUNICACION SOCIAL',
        ]);
        // 5712 UNIDAD DE EVENTOS ESPECIALES Y RELACIONES PUBLICAS
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5712',
            'cve_area' => '571201',
            'descripcion' => 'UNIDAD DE EVENTOS ESPECIALES Y RELACIONES PUBLICAS',
        ]);
        // 5713 UNIDAD DE TRANSPARENCIA Y COORDINACION GENERAL DE ARCHIVO DIF SONORA Y FES
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5713',
            'cve_area' => '571301',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA Y COORDINACION GENERAL DE ARCHIVO DIF SONORA Y FES',
        ]);
        // 5714 UNIDAD DE VOLUNTARIADO
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5714',
            'cve_area' => '571401',
            'descripcion' => 'UNIDAD DE VOLUNTARIADO',
        ]);
        // 58 TELEFONIA RURAL DE SONORA
        // 5801 DIRECCION GENERAL
        DB::table('areas')->insert([
            'fk_cve_unidad' => '5801',
            'cve_area' => '580101',
            'descripcion' => 'DIRECCION GENERAL',
        ]);       
    }
}
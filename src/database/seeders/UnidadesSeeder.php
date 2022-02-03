<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 01 H. CONGRESO DEL ESTADO       
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '01',
            'cve_unidad' => '0101',
            'descripcion' => 'CAMARA DE DIPUTADOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '01',
            'cve_unidad' => '0102',
            'descripcion' => 'CENTRO DE INVESTIGACIONES PARLAMENTARIAS DEL ESTADO DE SONORA AL H. CONGRESO DEL ESTADO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '01',
            'cve_unidad' => '0103',
            'descripcion' => 'CONTRALORIA INTERNA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '01',
            'cve_unidad' => '0104',
            'descripcion' => 'OFICIALIA MAYOR',
        ]);
        // 03 EJECUTIVO DEL ESTADO
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '03',
            'cve_unidad' => '0301',
            'descripcion' => 'COORDINACION EJECUTIVA DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '03',
            'cve_unidad' => '0302',
            'descripcion' => 'OFICINA DE LA REPRESENTACION DE SONORA EN EL D.F.',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '03',
            'cve_unidad' => '0303',
            'descripcion' => 'OFICINA DEL EJECUTIVO ESTATAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '03',
            'cve_unidad' => '0304',
            'descripcion' => 'SECRETARIA PARTICULAR',
        ]);
        // 18 FISCALIA GENERAL DE JUSTICIA DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1801',
            'descripcion' => 'AGENCIA MINISTERIAL DE INVESTIGACION CRIMINAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1802',
            'descripcion' => 'CENTRO DE JUSTICIA PARA LA MUJER',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1803',
            'descripcion' => 'DELEGACION REGIONAL EN CABORCA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1804',
            'descripcion' => 'DELEGACION REGIONAL EN CIUDAD OBREGON',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1805',
            'descripcion' => 'DELEGACION REGIONAL EN NOGALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1806',
            'descripcion' => 'DIRECCION GENERAL DE ASUNTOS JURIDICOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1807',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION A VICTIMAS Y ASESORIA JURIDICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1808',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION TEMPRANA Y JUSTICIA ALTERNATIVA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1809',
            'descripcion' => 'DIRECCION GENERAL DE BODEGA DE INDICIOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1810',
            'descripcion' => 'DIRECCION GENERAL DE CAPACITACION, EVALUACION Y CERTIFICACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1811',
            'descripcion' => 'DIRECCION GENERAL DE CONTROL DE PROCESOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1812',
            'descripcion' => 'DIRECCION GENERAL DE INVESTIGACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1813',
            'descripcion' => 'DIRECCION GENERAL DE TECNOLOGIAS DE INFORMACION Y COMUNICACIONES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1814',
            'descripcion' => 'FISCAL GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1815',
            'descripcion' => 'FISCALIA ANTICORRUPCION DEL ESTADO DE SONORA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1816',
            'descripcion' => 'FISCALIA ESPECIALIZADA EN MATERIA DE DELITOS ELECTORALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1817',
            'descripcion' => 'FISCALIA ESPECIALIZADA EN PROCURACION DE JUSTICIA PARA ADOLESCENTES Y CORRUPCION DE MENORES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1818',
            'descripcion' => 'OFICIALIA MAYOR',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1819',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1820',
            'descripcion' => 'SERVICIOS PERICIALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1821',
            'descripcion' => 'UNIDAD ESPECIALIZADA EN INTELIGENCIA PATRIMONIAL Y FINANCIERA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1822',
            'descripcion' => 'VICEFISCALIA DE CONTROL DE PROCESOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1823',
            'descripcion' => 'VICEFISCALIA DE FEMINICIDIOS Y DELITOS POR RAZONES DE GENERO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1824',
            'descripcion' => 'VICEFISCALIA DE INVESTIGACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '18',
            'cve_unidad' => '1825',
            'descripcion' => 'VISITADURIA',
        ]);
        // 17 INSTITUTO SUPERIOR DE AUDITORIA Y FISCALIZACION
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '17',
            'cve_unidad' => '1701',
            'descripcion' => 'INSTITUTO SUPERIOR DE AUDITORIA Y FISCALIZACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '17',
            'cve_unidad' => '1702',
            'descripcion' => 'ORGANO DE CONTROL INTERNO',
        ]);
        
        //12 SECRETARIA DE AGRICULTURA, GANADERIA, RECURSOS HIDRAULICOS, PESCA Y ACUACULTURA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1201',
            'descripcion' => 'COORDINACION PLAN MAESTRO DE DESARROLLO RURAL INTEGRAL SUR DE SONORA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1202',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO AGRICOLA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1203',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO GANADERO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1204',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO RURAL Y CAPITALIZACION AL CAMPO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1205',
            'descripcion' => 'DIRECCION GENERAL DE PESCA Y ACUACULTURA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1206',
            'descripcion' => 'DIRECCION GENERAL DE PLANEACION ADMINISTRACION Y EVALUACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1207',
            'descripcion' => 'DIRECCION GENERAL DE SERVICIOS GANADEROS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1208',
            'descripcion' => 'DIRECCION GENERAL FORESTAL Y FAUNA DE INTERES CINEGETICO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1209',
            'descripcion' => 'SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1210',
            'descripcion' => 'SUBSECRETARIA DE AGRICULTURA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1211',
            'descripcion' => 'SUBSECRETARIA DE GANADERIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '12',
            'cve_unidad' => '1212',
            'descripcion' => 'SUBSECRETARIA DE PESCA Y ACUACULTURA',
        ]);
        //07 SECRETARIA DE DESARROLLO SOCIAL
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0701',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0702',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION CIUDADANA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0703',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO REGIONAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0704',
            'descripcion' => 'DIRECCION GENERAL DE PARTICIPACION SOCIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0705',
            'descripcion' => 'DIRECCION GENERAL DE PLANEACION Y SEGUIMIENTO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0706',
            'descripcion' => 'DIRECCION GENERAL DE PROGRAMACION Y CONTROL DE GASTO DE INVERSION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0707',
            'descripcion' => 'DIRECCION GENERAL DE PROGRAMAS SOCIALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0708',
            'descripcion' => 'DIRECCION GENERAL DE PROYECTOS DE INFRAESTRUCTURA BASICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0709',
            'descripcion' => 'DIRECCION GENERAL JURIDICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0710',
            'descripcion' => 'SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0711',
            'descripcion' => 'SUBSECRETARIA DE INCLUSION SOCIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0712',
            'descripcion' => 'SUBSECRETARIA DE INFRAESTRUCTURA SOCIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '07',
            'cve_unidad' => '0713',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA',
        ]);
        // 11 SECRETARIA DE ECONOMIA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1101',
            'descripcion' => 'COMISION DE MEJORA REGULATORIA DE SONORA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1102',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1103',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION A PROGRAMA EMPRESARIALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1104',
            'descripcion' => 'DIRECCION GENERAL DE COMERCIALIZACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1105',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO EMPRESARIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1106',
            'descripcion' => 'DIRECCION GENERAL DE ENERGIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1107',
            'descripcion' => 'DIRECCION GENERAL DE MINERIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1108',
            'descripcion' => 'DIRECCION GENERAL DE SECTORES TECNOLOGICOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1109',
            'descripcion' => 'DIRECCION GENERAL DE VINCULACION E INDUSTRIA MANUFACTURERA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1110',
            'descripcion' => 'DIRECCION GENERAL JURIDICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1111',
            'descripcion' => 'OFICINA DEL TITULAR DE LA SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1112',
            'descripcion' => 'SUBSECRETARIA DE DESARROLLO ECONOMICO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1113',
            'descripcion' => 'SUBSECRETARIA DE IMPULSO A LA COMERCIALIZACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '11',
            'cve_unidad' => '1114',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA',
        ]);
        //04 SECRETARIA DE GOBIERNO
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0401',
            'descripcion' => 'CENTRO ESTATAL DE DESARROLLO MUNICIPAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0402',
            'descripcion' => 'CONSEJO ESTATAL DE POBLACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0403',
            'descripcion' => 'COORDINACION EJECUTIVA DE RELACIONES PUBLICAS Y EVENTOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0404',
            'descripcion' => 'COORDINACION ESTATAL DE PROTECCION CIVIL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0405',
            'descripcion' => 'COORDINACION GENERAL DE ADMINISTRACION Y CONTROL PRESUPUESTAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0406',
            'descripcion' => 'DIRECCION GENERAL DE ASUNTOS JURIDICOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0407',
            'descripcion' => 'DIRECCION GENERAL DE ATENCION A GRUPOS PRIORITARIOS Y MIGRANTES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0408',
            'descripcion' => 'DIRECCION GENERAL DE CONCERTACION AGRARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0409',
            'descripcion' => 'DIRECCION GENERAL DE GOBIERNO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0410',
            'descripcion' => 'DIRECCION GENERAL DE NOTARIAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0411',
            'descripcion' => 'DIRECCION GENERAL DE REGISTRO CIVIL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0412',
            'descripcion' => 'DIRECCION GRAL. DEL BOLETIN OFICIAL Y ARCHIVO DEL ESTADO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0413',
            'descripcion' => 'SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0414',
            'descripcion' => 'SUBSECRETARIA DE CONCERTACION SOCIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0415',
            'descripcion' => 'SUBSECRETARIA DE DESARROLLO POLITICO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '04',
            'cve_unidad' => '0416',
            'descripcion' => 'SUBSECRETARIA DE SERVICIOS DE GOBIERNO',
        ]);

        // 05 SECRETARIA DE HACIENDA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0501',
            'descripcion' => 'CENTRO DE DESARROLLO INFANTIL I',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0502',
            'descripcion' => 'CENTRO DE DESARROLLO INFANTIL II',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0503',
            'descripcion' => 'CENTRO DE DESARROLLO INFANTIL III',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0504',
            'descripcion' => 'COMISION ESTATAL DE BIENES Y CONCESIONES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0505',
            'descripcion' => 'COORDINACION EJECUTIVA DE AUDITORÍA FISCAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0506',
            'descripcion' => 'COORDINACION EJECUTIVA DE VERIFICACION AL COMERCIO EXTERIOR',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0507',
            'descripcion' => 'COORDINACION GENERAL DEL SISTEMA INTEGRAL DE INFORMACION Y ADMINISTRACION FINANCIERA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0508',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0509',
            'descripcion' => 'DIRECCION GENERAL DE BEBIDAS ALCOHOLICAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0510',
            'descripcion' => 'DIRECCION GENERAL DE CONTABILIDAD GUBERNAMENTAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0511',
            'descripcion' => 'DIRECCION GENERAL DE CONTROL DE FONDOS Y PAGADURIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0512',
            'descripcion' => 'DIRECCION GENERAL DE CRÉDITO PUBLICO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0513',
            'descripcion' => 'DIRECCION GENERAL DE PLANEACION Y EVALUACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0514',
            'descripcion' => 'DIRECCION GENERAL DE INVERSIONES PUBLICAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0515',
            'descripcion' => 'DIRECCION GENERAL DE ORIENTACION Y ASISTENCIA AL CONTRIBUYENTE',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0516',
            'descripcion' => 'DIRECCION GENERAL DE POLITICA Y CONTROL PRESUPUESTAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0517',
            'descripcion' => 'DIRECCION GENERAL DE RECAUDACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0518',
            'descripcion' => 'DIRECCION GENERAL DE UNIDAD DE TRANSPARENCIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0519',
            'descripcion' => 'INSTITUTO CATASTRAL Y REGISTRAL DEL ESTADO DE SONORA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0520',
            'descripcion' => 'PROCURADURIA FISCAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0521',
            'descripcion' => 'SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0522',
            'descripcion' => 'SUBSECRETARIA DE INGRESOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0523',
            'descripcion' => 'SUBSECRETARIA DE PLANEACION DEL DESARROLLO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0524',
            'descripcion' => 'SUBSECRETARIA DE RECURSOS HUMANOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '05',
            'cve_unidad' => '0525',
            'descripcion' => 'TESORERIA GENERAL DEL ESTADO',
        ]);
        // 10 SECRETARIA DE INFRAESTRUCTURA Y DESARROLLO URBANO
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1001',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1002',
            'descripcion' => 'DIRECCION GENERAL DE COSTOS LICITACIONES Y CONTRATOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1003',
            'descripcion' => 'DIRECCION GENERAL DE EJECUCION DE OBRAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1004',
            'descripcion' => 'DIRECCION GENERAL DE PLANEACION Y ORDENAMIENTO TERRITORIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1005',
            'descripcion' => 'DIRECCION GENERAL DE PROGRAMACION Y EVALUACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1006',
            'descripcion' => 'DIRECCION GENERAL DE PROYECTOS E INGENIERIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1007',
            'descripcion' => 'DIRECCION GENERAL DE TRANSPORTE',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1008',
            'descripcion' => 'DIRECCION JURIDICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1009',
            'descripcion' => 'SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1010',
            'descripcion' => 'SUBSECRETARIA DE DESARROLLO URBANO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '10',
            'cve_unidad' => '1011',
            'descripcion' => 'SUBSECRETARIA DE OBRAS PUBLICAS',
        ]);
        // 19 SECRETARIA DE LA CONSEJERIA JURIDICA DEL GOBIERNO DEL ESTADO
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '19',
            'cve_unidad' => '1901',
            'descripcion' => 'CONSEJERIA JURIDICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '19',
            'cve_unidad' => '1902',
            'descripcion' => 'DEFENSORIA PUBLICA',
        ]);
        //06 SECRETARIA DE LA CONTRALORIA GENERAL
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0601',
            'descripcion' => 'COORDINACION EJECUTIVA DE INVESTIGACION DE FALTAS ADMINISTRATIVAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0602',
            'descripcion' => 'COORDINACION EJECUTIVA DE SUSTANCIACION Y RESOLUCION DE RESPONSABILIDADES Y SITUACION PATRIMONIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0603',
            'descripcion' => 'COORDINACION GENERAL DE ORGANOS INTERNOS DE CONTROL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0604',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y CONTROL PRESUPUESTAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0605',
            'descripcion' => 'DIRECCION GENERAL DE AUDITORIA GUBERNAMENTAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0606',
            'descripcion' => 'DIRECCION GENERAL DE CONTRALORIA SOCIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0607',
            'descripcion' => 'DIRECCION GENERAL DE EVALUACION Y CONTROL DE OBRA PUBLICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0608',
            'descripcion' => 'DIRECCION GENERAL DE LICITACIONES Y CONTRATOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0609',
            'descripcion' => 'SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0610',
            'descripcion' => 'SUBSECRETARIA DE DESARROLLO ADMINISTRATIVO Y TECNOLOGICO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '06',
            'cve_unidad' => '0611',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA, ACCESO A LA INFORMACION Y PROTECCION DE DATOS PERSONALES',
        ]);
        // 09 SECRETARIA DE SALUD PUBLICA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '09',
            'cve_unidad' => '0901',
            'descripcion' => 'COM. EST. DE PROTECCION CONTRA RIESGOS SANITARIOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '09',
            'cve_unidad' => '0902',
            'descripcion' => 'JUNTA DE ASISTENCIA PRIVADA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '09',
            'cve_unidad' => '0903',
            'descripcion' => 'SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '09',
            'cve_unidad' => '0904',
            'descripcion' => 'SUBSECRETARIA DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '09',
            'cve_unidad' => '0905',
            'descripcion' => 'SUBSECRETARIA DE SERVICIOS DE SALUD',
        ]);
        // 16 SECRETARIA DEL TRABAJO
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '16',
            'cve_unidad' => '1601',
            'descripcion' => 'DIRECCION GENERAL DEL TRABAJO Y PREVISION SOCIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '16',
            'cve_unidad' => '1602',
            'descripcion' => 'DIRECCION GENERAL OPERATIVA DEL SERVICIO ESTATAL DEL EMPLEO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '16',
            'cve_unidad' => '1603',
            'descripcion' => 'JUNTAS DE CONCILIACION Y ARBITRAJE DEL ESTADO DE SONORA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '16',
            'cve_unidad' => '1604',
            'descripcion' => 'SECRETARIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '16',
            'cve_unidad' => '1605',
            'descripcion' => 'SUBSECRETARIA DE PROMOCION DEL EMPLEO Y PRODUCTIVIDAD',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '16',
            'cve_unidad' => '1606',
            'descripcion' => 'SUBSECRETARIA DEL TRABAJO',
        ]);
        // 20 SECRETARIA TECNICA Y DE ATENCION CIUDADANA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2001',
            'descripcion' => 'COORDINACION EJECUTIVA DE COMUNICACION SOCIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2002',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2003',
            'descripcion' => 'DIRECCION GENERAL DE ESTUDIOS Y PROYECTOS ESTRATEGICOS',
        ]);
        // 21 SECRETARIO EJECUTIVO DE SEGURIDAD PUBLICA DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2101',
            'descripcion' => 'CENTRO DE COMANDO, COMUNICACION, COMPUTO Y COORDINACION DE INTELIGENCIA (C5I)',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2102',
            'descripcion' => 'COORDINACION ESTATAL DE TECNOLOGIA Y ESTUDIOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2103',
            'descripcion' => 'COORDINACION ESTATAL DE VINCULACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2104',
            'descripcion' => 'COORDINACION GENERAL DE AYUDANTIA Y LOGISTICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2105',
            'descripcion' => 'COORDINACION GRAL. DEL SISTEMA ESTATAL DE INFORMACION SOBRE SEGURIDAD PUBLICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2106',
            'descripcion' => 'DIR. GRAL. DEL INST. DE TRATAMIENTO Y DE APLICACION DE MEDIDAS PARA ADOLESCENTES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2107',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION, EVALUACION Y CONTROL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2108',
            'descripcion' => 'DIRECCION GENERAL DE EJECUCION DE PENAS, MEDIDAS DE SEGURIDAD, SUPERVISION DE MEDIDAS CAUTELARES, DE LA SUSPENSION CONDICIONAL DEL PROCESO Y EVALUACION DE RIESGO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2109',
            'descripcion' => 'DIRECCION GENERAL DE LA POLICIA ESTATAL DE SEGURIDAD PUBLICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2110',
            'descripcion' => 'DIRECCION GENERAL DEL SISTEMA ESTATAL PENITENCIARIO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '20',
            'cve_unidad' => '2111',
            'descripcion' => 'SECRETARIA',
        ]);
        // 02 SUPREMO TRIBUNAL DE JUSTICIA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0201',
            'descripcion' => 'ARCHIVO GENERAL DEL PODER JUDICIAL DEL ESTADO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0202',
            'descripcion' => 'CENTRALES DE ACTUARIOS EJECUTORES Y NOTIFICADORES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0203',
            'descripcion' => 'CENTROS DE JUSTICIA ALTERNATIVA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0204',
            'descripcion' => 'INSTITUTO DE LA JUDICATURA SONORENSE',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0205',
            'descripcion' => 'JUZGADOS DE PRIMERA INSTANCIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0206',
            'descripcion' => 'OFICIALIA MAYOR',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0207',
            'descripcion' => 'PRESIDENCIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0208',
            'descripcion' => 'SALAS MIXTAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0209',
            'descripcion' => 'SECRETARIA GENERAL DE ACUERDOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0210',
            'descripcion' => 'TRIBUNALES REGIONALES DE CIRCUITO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '02',
            'cve_unidad' => '0211',
            'descripcion' => 'VISITADURIA JUDICIAL Y CONTRALORIA',
        ]);
        // 15 TRIBUNAL DE LO CONTENCIOSO ADMINISTRATIVO
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '15',
            'cve_unidad' => '1501',
            'descripcion' => 'SALA ESPECIALIZADA EN MATERIA DE ANTICORRUPCION Y RESPONSABILIDADES ADMINISTRATIVAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '15',
            'cve_unidad' => '1502',
            'descripcion' => 'TRIBUNAL DE LO CONTENCIOSO ADMINISTRATIVO',
        ]);
        // 31 CENTRO ESTATAL DE TRASPLANTES
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '31',
            'cve_unidad' => '3101',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        
        // 37 COMISION DE ECOLOGIA Y DESARROLLO SUSTENTABLE DEL ESTADO
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3701',
            'descripcion' => 'COMISION EJECUTIVA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3702',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3703',
            'descripcion' => 'DIRECCION GENERAL DE CAMBIO CLIMATICO Y CULTURA AMBIENTAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3704',
            'descripcion' => 'DIRECCION GENERAL DE CONSERVACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3705',
            'descripcion' => 'DIRECCION GENERAL DE GESTION Y POLITICA AMBIENTAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3706',
            'descripcion' => 'DIRECCION GENERAL DE RECURSOS HUMANOS E INFORMATICOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3707',
            'descripcion' => 'DIRECCION GENERAL DEL CENTRO ECOLOGICO DE SONORA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3708',
            'descripcion' => 'DIRECCION GENERAL DEL DELFINARIO SONORA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3709',
            'descripcion' => 'DIRECCION GENERAL JURIDICA Y UNIDAD DE ENLACE',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '37',
            'cve_unidad' => '3710',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        // 33 COMISION DE FOMENTO AL TURISMO DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '33',
            'cve_unidad' => '3301',
            'descripcion' => 'COORDINACION ADMINISTRATIVA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '33',
            'cve_unidad' => '3302',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '33',
            'cve_unidad' => '3303',
            'descripcion' => 'DIRECCION DE ASUNTOS JURIDICOS Y NORMATIVIDAD',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '33',
            'cve_unidad' => '3304',
            'descripcion' => 'DIRECCION DE PLANEACION Y SEGUIMIENTO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '33',
            'cve_unidad' => '3305',
            'descripcion' => 'DIRECCION DE PROMOCION Y EVENTOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '33',
            'cve_unidad' => '3306',
            'descripcion' => 'SUBCOORDINACION GENERAL',
        ]);
        //38 COMISION DE VIVIENDA DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '38',
            'cve_unidad' => '3801',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '38',
            'cve_unidad' => '3802',
            'descripcion' => 'DIRECCION DE PROMOCION Y PROGRAMAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '38',
            'cve_unidad' => '3803',
            'descripcion' => 'DIRECCION DE RESERVAS TERRITORIALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '38',
            'cve_unidad' => '3804',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '38',
            'cve_unidad' => '3805',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        // 39 COMISION DEL DEPORTE DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '39',
            'cve_unidad' => '3901',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '39',
            'cve_unidad' => '3902',
            'descripcion' => 'DIRECCION DE INFRAESTRUCTURA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '39',
            'cve_unidad' => '3903',
            'descripcion' => 'DIRECCION DEL DEPORTE',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '39',
            'cve_unidad' => '3904',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '39',
            'cve_unidad' => '3905',
            'descripcion' => 'DIRECCION JURIDICA',
        ]);
        //40 COMISION ESTATAL DE CIENCIA Y TECNOLOGIA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '40',
            'cve_unidad' => '4001',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 35 COMISION ESTATAL DEL AGUA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '35',
            'cve_unidad' => '3501',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '35',
            'cve_unidad' => '3502',
            'descripcion' => 'DIRECCION GENERAL DE COSTOS, CONCURSOS Y CONTRATOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '35',
            'cve_unidad' => '3503',
            'descripcion' => 'DIRECCION GENERAL DE DESARROLLO Y FORTALECIMIENTO INSTITUCIONAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '35',
            'cve_unidad' => '3504',
            'descripcion' => 'DIRECCION GENERAL DE INFRAESTRUCTURA HIDRÁULICA URBANA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '35',
            'cve_unidad' => '3505',
            'descripcion' => 'DIRECCION GENERAL DE INFRAESTRUCTURA HIDROAGRÍCOLA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '35',
            'cve_unidad' => '3506',
            'descripcion' => 'UNIDAD DE ASUNTOS JURIDICOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '35',
            'cve_unidad' => '3507',
            'descripcion' => 'VOCALIA EJECUTIVA',
        ]);
        // 34 COMISION ESTATAL DEL AGUA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '34',
            'cve_unidad' => '3401',
            'descripcion' => 'COORDINACION GENERAL DE CEDIS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '34',
            'cve_unidad' => '3402',
            'descripcion' => 'DIRECCION DE PLANEACION DEL DESARROLLO INDIGENA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '34',
            'cve_unidad' => '3403',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '34',
            'cve_unidad' => '3404',
            'descripcion' => 'DIRECCION GENERAL DE OPERACION DE PROGRAMAS INSTITUCIONALES',
        ]);
        // 30 CONSEJO ESTATAL DE CONCERTACION PARA LA OBRA PUBLICA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '30',
            'cve_unidad' => '3001',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '30',
            'cve_unidad' => '3002',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '30',
            'cve_unidad' => '3003',
            'descripcion' => 'DIRECCION GENERAL DE CONCERTACION Y APOYO TECNICO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '30',
            'cve_unidad' => '3004',
            'descripcion' => 'DIRECCION GENERAL DE ORGANIZACION SOCIAL',
        ]);
        // 41 FIDEICOMISO FONDO REVOLVENTE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '41',
            'cve_unidad' => '4101',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '41',
            'cve_unidad' => '4102',
            'descripcion' => 'DIRECCION DE ADMINISTRACION, FINANZAS Y OPERACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '41',
            'cve_unidad' => '4103',
            'descripcion' => 'DIRECCION DE PROMOCION Y CREDITO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '41',
            'cve_unidad' => '4104',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        //43 FONDO DE OPERACION DE OBRAS SONORA SI
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '43',
            'cve_unidad' => '4301',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '43',
            'cve_unidad' => '4302',
            'descripcion' => 'DIRECCION GENERAL DE OPERACION DEL ACUEDUCTO INDEPENDENCIA',
        ]);
        // 42 FINANCIERA PARA EL DESARROLLO ECONOMICO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '42',
            'cve_unidad' => '4201',
            'descripcion' => 'DESPACHO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '42',
            'cve_unidad' => '4202',
            'descripcion' => 'DIRECCION GENERAL DE ADMINISTRACION, FINANZAS Y OPERACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '42',
            'cve_unidad' => '4203',
            'descripcion' => 'DIRECCION GENERAL DE NORMATIVIDAD Y CARTERA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '42',
            'cve_unidad' => '4204',
            'descripcion' => 'DIRECCION GENERAL DE PROMOCION, FINANCIAMIENTOS Y SUPERVISION',
        ]);
        //44 FONDO ESTATAL PARA LA MODERNIZACION DEL TRANSPORTE
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '44',
            'cve_unidad' => '4401',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '44',
            'cve_unidad' => '4402',
            'descripcion' => 'DIRECCION DE MONITOREO, SUPERVISION Y CONCILIACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '44',
            'cve_unidad' => '4403',
            'descripcion' => 'DIRECCION DE PLANEACION, PROYECTOS Y EVALUACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '44',
            'cve_unidad' => '4404',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 45 HOSPITAL INFANTIL DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4501',
            'descripcion' => 'ASISTENCIA SOCIAL HIES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4502',
            'descripcion' => 'DIRECCION ADMINISTRATIVA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4503',
            'descripcion' => 'DIRECCION DE DIVISION DE APOYO HOSPITALARIO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4504',
            'descripcion' => 'DIRECCION DE ENSEÑANZA, INVESTIGACION Y CALIDAD',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4505',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4506',
            'descripcion' => 'DIRECCION MEDICA DE PEDIATRIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4507',
            'descripcion' => 'ENFERMERIA PEDIATRICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4508',
            'descripcion' => 'JURIDICO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '45',
            'cve_unidad' => '4509',
            'descripcion' => 'UNIDAD DE SUPERVISION Y DESARROLLO ADMINISTATIVO',
        ]);
        //32 INSTITUTO DE ACUACULTURA DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '32',
            'cve_unidad' => '3201',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '32',
            'cve_unidad' => '3202',
            'descripcion' => 'DIRECCION DE PROMOCION Y CAPACITACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '32',
            'cve_unidad' => '3203',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '32',
            'cve_unidad' => '3204',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        //36 INSTITUTO DE BECAS Y CREDITO EDUCATIVO DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3601',
            'descripcion' => 'COORDINACION DE EXTENSION NOGALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3602',
            'descripcion' => 'DIRECCION DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3603',
            'descripcion' => 'DIRECCION DE BECAS Y CREDITO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3604',
            'descripcion' => 'DIRECCION DE GESTION FINANCIERA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3605',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3606',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3607',
            'descripcion' => 'SUBDIRECCION DE CARTERA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3608',
            'descripcion' => 'SUBDIRECCION DE CONTABILIDAD Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3609',
            'descripcion' => 'SUBDIRECCION DE DESARROLLO ORGANIZACIONAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3610',
            'descripcion' => 'SUBDIRECCION DE EVALUACION Y ASIGNACION DE BENEFICIARIOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3611',
            'descripcion' => 'SUBDIRECCION DE INFRAESTRUCTURA Y TECNOLOGIAS DE LA INFORMACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3612',
            'descripcion' => 'SUBDIRECCION DE INTEGRACION DE PAGOS A BENEFICIARIOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3613',
            'descripcion' => 'SUBDIRECCION DE OPERACIONES Y VINCULACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3614',
            'descripcion' => 'SUBDIRECCION DE PLANEACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '36',
            'cve_unidad' => '3615',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA',
        ]);
        // 46 INSTITUTO SONORENSE DE CULTURA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4601',
            'descripcion' => 'BIBLIOTECA PUBLICA JESUS CORRAL RUIZ',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4602',
            'descripcion' => 'COORDINACION DE ADMNISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4603',
            'descripcion' => 'COORDINACION DE ARTES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4604',
            'descripcion' => 'COORDINACION DE CASA DE LA CULTURA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4605',
            'descripcion' => 'COORDINACION DE PATRIMONIO CULTURAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4606',
            'descripcion' => 'COORDINACION DE VINCULACION CULTURAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4607',
            'descripcion' => 'DEPARTAMENTO DE FONDO DE APOYO A LA CULTURA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4608',
            'descripcion' => 'DEPARTAMENTO DE INFORMACION Y DIFUSION CULTURAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4609',
            'descripcion' => 'DEPARTAMENTO DE LITERATURA Y BIBLIOTECAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4610',
            'descripcion' => 'DEPARTAMENTO DE MUSICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4611',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4612',
            'descripcion' => 'MUSEO DEL CENTRO CULTURAL MUSAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '46',
            'cve_unidad' => '4613',
            'descripcion' => 'MUSEO SONORA EN LA REVOLUCION MUSOR',
        ]);
        // 47 INSTITUTO SONORENSE DE INFRAESTRUCTURA EDUCATIVA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '47',
            'cve_unidad' => '4701',
            'descripcion' => 'DESPACHO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '47',
            'cve_unidad' => '4702',
            'descripcion' => 'DIRECCION GENERAL DE FINANZAS Y ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '47',
            'cve_unidad' => '4703',
            'descripcion' => 'DIRECCION GENERAL DE INNOVACION Y SISTEMAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '47',
            'cve_unidad' => '4704',
            'descripcion' => 'DIRECCION GENERAL DE OBRAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '47',
            'cve_unidad' => '4705',
            'descripcion' => 'DIRECCION GENERAL TECNICO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '47',
            'cve_unidad' => '4706',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        // 48 INSTITUTO SONORENSE DE LA JUVENTUD
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '48',
            'cve_unidad' => '4801',
            'descripcion' => 'DIRECCION DE ESTUDIOS Y PROYECTOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '48',
            'cve_unidad' => '4802',
            'descripcion' => 'DIRECCION DE PLANEACION Y ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '48',
            'cve_unidad' => '4803',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '48',
            'cve_unidad' => '4804',
            'descripcion' => 'DIRECCION OPERATIVA Y ENLACE MUNICIPAL',
        ]);
        // 49 INSTITUTO SONORENSE DE LAS MUJERES
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '49',
            'cve_unidad' => '4901',
            'descripcion' => 'COORDINACION EJECUTIVA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '49',
            'cve_unidad' => '4902',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);   
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '49',
            'cve_unidad' => '4903',
            'descripcion' => 'DIRECCION DE ATENCION CIUDADANA',
        ]);   
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '49',
            'cve_unidad' => '4904',
            'descripcion' => 'DIRECCION DE COMUNICACION E IMAGEN',
        ]);   
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '49',
            'cve_unidad' => '4905',
            'descripcion' => 'DIRECCION DE DERECHOS',
        ]);   
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '49',
            'cve_unidad' => '4906',
            'descripcion' => 'DIRECCION DE EVALUACION Y SEGUIMIENTOS TECNICO',
        ]);   
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '49',
            'cve_unidad' => '4907',
            'descripcion' => 'DIRECCION DE PROGRAMAS SOCIALES',
        ]);   
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '49',
            'cve_unidad' => '4908',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA',
        ]); 
        // 50 INSTITUTO SUPERIOR DE SEGURIDAD PUBLICA DEL ESTADO        
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '50',
            'cve_unidad' => '5001',
            'descripcion' => 'COMANDANCIA DE INSTRUCCION Y DISCIPLINA',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '50',
            'cve_unidad' => '5002',
            'descripcion' => 'DIRECCION DE ADMINISTRACION',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '50',
            'cve_unidad' => '5003',
            'descripcion' => 'DIRECCION GENERAL',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '50',
            'cve_unidad' => '5004',
            'descripcion' => 'DIRECCION GENERAL DE INVESTIGACION Y DESARROLLO ACADEMICO',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '50',
            'cve_unidad' => '5005',
            'descripcion' => 'DIRECCION JURIDICA',
        ]); 
        // 51 JUNTA DE CAMINOS
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5101',
            'descripcion' => 'AREA DE SEGUIMIENTOS DE AUDITORIAS',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5102',
            'descripcion' => 'CONTABILIDAD Y PRESUPUESTO',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5103',
            'descripcion' => 'COORDINACION DE EJECUCION DE OBRAS',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5104',
            'descripcion' => 'COORDINACION DE RECURSOS',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5105',
            'descripcion' => 'COORDINACION Y SUPERINTENDENCIA DE MAQUINARIA',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5106',
            'descripcion' => 'DIRECCION DE ADMINISTRACION',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5107',
            'descripcion' => 'DIRECCION DE OBRAS',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5108',
            'descripcion' => 'DIRECCION DE SUPERVISION Y CONTROL DE CALIDAD',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5109',
            'descripcion' => 'DIRECCION GENERAL',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5110',
            'descripcion' => 'DIRECCION TECNICA',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5111',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5112',
            'descripcion' => 'SERVICIOS GENERALES',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5113',
            'descripcion' => 'UNIDAD DE LICITACIONES Y CONTRATOS',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5114',
            'descripcion' => 'UNIDAD DE TECNOLOGIAS Y SISTEMAS',
        ]); 
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '51',
            'cve_unidad' => '5115',
            'descripcion' => 'UNIDAD JURIDICA',
        ]); 
        // 52 OPERADORA DEL  PROYECTOS ESTRATEGICOS DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '52',
            'cve_unidad' => '5201',
            'descripcion' => 'DIRECCION DE ADMINISTRACION Y FINANZAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '52',
            'cve_unidad' => '5202',
            'descripcion' => 'DIRECCION DE ANALISIS Y GESTION FINANCIERA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '52',
            'cve_unidad' => '5203',
            'descripcion' => 'DIRECCION DE PROMOCION DE PRODUCTOS INMOBILIARIOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '52',
            'cve_unidad' => '5204',
            'descripcion' => 'DIRECCION DE PROYECTOS REGIONALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '52',
            'cve_unidad' => '5205',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        // 53 PROCURADURIA  AMBIENTAL DEL ESTADO DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '53',
            'cve_unidad' => '5301',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '53',
            'cve_unidad' => '5302',
            'descripcion' => 'DIRECCION GENERAL DE INSPECCION Y VIGILANCIA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '53',
            'cve_unidad' => '5303',
            'descripcion' => 'DIRECCION GENERAL DE RECURSOS NATURALES Y FOMENTO AMBIENTAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '53',
            'cve_unidad' => '5304',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA Y ASUNTOS JURIDICOS',
        ]);
        // 54 PROSONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '54',
            'cve_unidad' => '5401',
            'descripcion' => 'DIRECCION ADMINISTRATIVA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '54',
            'cve_unidad' => '5402',
            'descripcion' => 'DIRECCION DE ATENCION A INVERSIONISTAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '54',
            'cve_unidad' => '5403',
            'descripcion' => 'DIRECCION DE PROMOCION DE INVESTIGACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '54',
            'cve_unidad' => '5404',
            'descripcion' => 'DIRECCION DE RELACIONES INTERNACIONALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '54',
            'cve_unidad' => '5405',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '54',
            'cve_unidad' => '5406',
            'descripcion' => 'DIRECCION JURIDICA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '54',
            'cve_unidad' => '5407',
            'descripcion' => 'DIRECCION OPERATIVA',
        ]);
        // 55 RADIO SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '55',
            'cve_unidad' => '5501',
            'descripcion' => 'DIRECCION DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '55',
            'cve_unidad' => '5502',
            'descripcion' => 'DIRECCION DE NOTICIAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '55',
            'cve_unidad' => '5503',
            'descripcion' => 'DIRECCION DE OPERACIONES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '55',
            'cve_unidad' => '5504',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '55',
            'cve_unidad' => '5505',
            'descripcion' => 'DIRECCION TECNICA',
        ]);
        // 56 SERVICIO DE ADMON Y ENAJENACION DE BIENES
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '56',
            'cve_unidad' => '5601',
            'descripcion' => 'COORDINACION GENERAL',
        ]);
        // 57 SISTEMA PARA EL DESARROLLO INTEGRAL DE LA FAMILIA EN EL ESTADO
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5701',
            'descripcion' => 'COORDINACION GENERAL DE ADMINISTRACION',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5702',
            'descripcion' => 'DIRECCION DE ATENCION A PERSONAS CON DISCAPACIDAD',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5703',
            'descripcion' => 'DIRECCION DE ATENCION A POBLACION VULNERABLE',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5704',
            'descripcion' => 'DIRECCION DE PROGRAMAS ALIMENTARIOS Y DESARROLLO COMUNITARIO',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5705',
            'descripcion' => 'DIRECCION DE VINCULACION CON ORGANISMOS E INSTITUCIONES ASISTENCIALES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5706',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5707',
            'descripcion' => 'ORGANO INTERNO DE CONTROL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5708',
            'descripcion' => 'PROCURADURIA DE LA DEFENSA DEL ADULTO MAYOR',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5709',
            'descripcion' => 'PROCURADURIA DE PROTECCION DE NIÑAS Y NIÑOS ADOLESCENTES DEL ESTADO DE SONORA',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5710',
            'descripcion' => 'UNIDAD DE ASUNTOS JURIDICOS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5711',
            'descripcion' => 'UNIDAD DE COMUNICACION SOCIAL',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5712',
            'descripcion' => 'UNIDAD DE EVENTOS ESPECIALES Y RELACIONES PUBLICAS',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5713',
            'descripcion' => 'UNIDAD DE TRANSPARENCIA Y COORDINACION GENERAL DE ARCHIVO DIF SONORA Y FES',
        ]);
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '57',
            'cve_unidad' => '5714',
            'descripcion' => 'UNIDAD DE VOLUNTARIADO',
        ]);
        // 58 TELEFONIA RURAL DE SONORA
        DB::table('unidades')->insert([
            'fk_cve_dependencia' => '58',
            'cve_unidad' => '5801',
            'descripcion' => 'DIRECCION GENERAL',
        ]);
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosSeeder extends Seeder
{    
    public function run()
    {
        // como ejemplo se agrega fk_cve_estado = '26' = 'Sonora' por defecto tosos
        // se agregan 26 = 'Sonora'
        DB::table('municipios')->insert([  
            'fk_cve_estado' => '26',
            'cve_municipio' => '26176',
            'descripcion' => 'Hermosillo',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26178',
            'descripcion' => 'Nogales',
        ]);
        DB::table('municipios')->insert([
            'cve_municipio' => '26179',
            'descripcion' => 'Guaymas',
        ]);
        DB::table('municipios')->insert([
            'cve_municipio' => '26206',
            'descripcion' => 'Aconchi',
        ]);
        DB::table('municipios')->insert([             
            'cve_municipio' => '26207',
            'descripcion' => 'Agua Prieta',
        ]);
        DB::table('municipios')->insert([
            'cve_municipio' => '26208',
            'descripcion' => 'Álamos',
        ]);
        DB::table('municipios')->insert([
            'cve_municipio' => '26209',
            'descripcion' => 'Altar',
        ]);
        DB::table('municipios')->insert([              
            'cve_municipio' => '26210',
            'descripcion' => 'Arivechi',
        ]);
        DB::table('municipios')->insert([
            'cve_municipio' => '26211',
            'descripcion' => 'Arizpe',
        ]);
        DB::table('municipios')->insert([
            'cve_municipio' => '26212',
            'descripcion' => 'Atil',
        ]);
        DB::table('municipios')->insert([            
            'cve_municipio' => '26213',
            'descripcion' => 'Bacadehuachi',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26214',
            'descripcion' => 'Bacanora',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26215',
            'descripcion' => 'Bacerac',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26216',
            'descripcion' => 'Bacoachi',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26217',
            'descripcion' => 'Bacúm',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26218',
            'descripcion' => 'Banamichi',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26219',
            'descripcion' => 'Baviacora',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26220',
            'descripcion' => 'Bavispe',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26221',
            'descripcion' => 'Benjamín Hill',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26222',
            'descripcion' => 'Caborca',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26223',
            'descripcion' => 'Cajeme',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26224',
            'descripcion' => 'Cananea',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26225',
            'descripcion' => 'Carbo',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26226',
            'descripcion' => 'La Colorada',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26227',
            'descripcion' => 'Cucurpe',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26228',
            'descripcion' => 'Cumpas',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26229',
            'descripcion' => 'Divisaderos',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26230',
            'descripcion' => 'Empalme',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26231',
            'descripcion' => 'Etchojoa',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26232',
            'descripcion' => 'Fronteras',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26233',
            'descripcion' => 'Granados',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26234',
            'descripcion' => 'Huachinera',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26235',
            'descripcion' => 'Huasabas',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26236',
            'descripcion' => 'Huatabampo',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26237',
            'descripcion' => 'Huepac',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26238',
            'descripcion' => 'Imuris',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26239',
            'descripcion' => 'Magdalena',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26240',
            'descripcion' => 'Mazatán',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26241',
            'descripcion' => 'Moctezuma',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26242',
            'descripcion' => 'Naco',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26243',
            'descripcion' => 'Nacori Chico',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26244',
            'descripcion' => 'Nacozari',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26245',
            'descripcion' => 'Navojoa',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26246',
            'descripcion' => 'Onavas',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26247',
            'descripcion' => 'Opodepe',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26248',
            'descripcion' => 'Oquitoa',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26249',
            'descripcion' => 'Pitiquito',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26250',
            'descripcion' => 'Puerto Peñasco',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26251',
            'descripcion' => 'Quiriego',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26252',
            'descripcion' => 'Rayón',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26253',
            'descripcion' => 'Rosario',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26254',
            'descripcion' => 'Sahuaripa',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26255',
            'descripcion' => 'San Felipe de Jesús',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26256',
            'descripcion' => 'San Javier',
        ]);        
        DB::table('municipios')->insert([  
            'cve_municipio' => '26257',
            'descripcion' => 'San Luis Río Colorado',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26258',
            'descripcion' => 'San Miguel de Horcasitas',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26259',
            'descripcion' => 'San Pedro de la Cueva',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26260',
            'descripcion' => 'Santa Ana',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26261',
            'descripcion' => 'Santa Cruz',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26262',
            'descripcion' => 'Sáric',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26263',
            'descripcion' => 'Soyopa',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26264',
            'descripcion' => 'Suaqui Grande',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26265',
            'descripcion' => 'Tepache',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26266',
            'descripcion' => 'Trincheras',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26267',
            'descripcion' => 'Tubutama',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26268',
            'descripcion' => 'Ures',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26269',
            'descripcion' => 'Villa HIdalgo',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26270',
            'descripcion' => 'Villa Pesqueira',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26271',
            'descripcion' => 'Yécora',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26272',
            'descripcion' => 'General Plutarco Elías Calles',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26273',
            'descripcion' => 'Benito Juárez',
        ]);
        DB::table('municipios')->insert([  
            'cve_municipio' => '26274',
            'descripcion' => 'San Ignacio Río Muerto',
        ]);
    }
}
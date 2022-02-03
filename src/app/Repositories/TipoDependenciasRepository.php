<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\TipoDependencias;


class TipoDependenciasRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Tipodependencias();
    }

    public function all(){
        //Session::pull('mensaje');
        //Session::pull('filter');
        return( $this->model->orderBy('cve_tipo_dependencia', 'asc')
        ->paginate(5));
    }

    public function edit($id)
    {       
        $this->model = $this->model->FindOrFail($id);
        return ( $this->model );
    }

    public function delete( $id)
    {        
        $this->model->destroy($id);
    }

    public function save(Request $request, $id)
    {        
        //dd($datos_tipo_dependencia);
        $campos=[
            'cve_tipo_dependencia'=> 'required|string|max:1|min:1',
            'descripcion'=> 'required|string|max:120',
        ];

        $mensaje=[            
            'cve_tipo_dependencia.required'=>'La Clave de Dependencia es requerida, debe ser de 1 caracter.',
            'cve_tipo_dependencia.max'=>'La Clave de Dependencia debe tener máximo 1 caracter.',
            'descripcion.required'=>'La Clave de Dependencia es requerida, debe ser de 1 caracter.',
            'descripcion.unique'=>'La Descripción de la Dependencia ya existe.',
            'cve_tipo_dependencia.max'=>'La Clave de Dependencia debe tener máximo 1 caracter.',
        ];

        $this->validate($request, $campos, $mensaje);
        $datos_tipo_dependencia= $this->fix_datos_tipo_dependencia($request);
        $this->model->where('id','=',$id)->update($datos_tipo_dependencia);        
    }

    private function fix_datos_tipo_dependencia($request) 
    {
        // elimina la variables _token , _method, y activao
        $datos_tipo_dependencia = request()->except('_token', '_method');
       return ($datos_tipo_dependencia);
   }

    public function insert( Request $request)
    {        
        $campos=[
            'cve_tipo_dependencia'=> 'required|string|unique:tipo_dependencia|max:1|min:1',
            'descripcion'=> 'required|string|unique:tipo_dependencia|max:120',
        ];
        $mensaje=[            
            'cve_tipo_dependencia.required'=>'La Clave de Tipo de Dependencia es requerida.',
            'cve_tipo_dependencia.max'=>'La Clave de Tipo de Dependencia debe tener máximo 1 caracter.',
            'cve_tipo_dependencia.min'=>'La Clave de Tipo de Dependencia debe tener mínimo 1 caracter.',
            'cve_tipo_dependencia.unique'=>'La Clave de Tipo de Dependencia ya existe',                                    
            'descripcion.required'=>'La Descripción de Tipo de Dependencia es requerida, debe ser de al menos 1 caracter máximo 120.',
            'descripcion.min'=>'La Descripción de Tipo de Dependencia debe ser de al menos 1 caracter.',
            'descripcion.max'=>'La Descripción de Tipo de Dependencia debe ser de 120 caracteres como máximo.',
            'descripcion.unique'=>'La Descripción de Tipo de Dependencia ya existe',
        ];

        $this->validate($request, $campos, $mensaje);
        $datos_tipo_dependencia= $this->fix_datos_tipo_dependencia($request);
        //dd($datos_tipo_dependencia);
        $this->model->insert( $datos_tipo_dependencia);
    }
}

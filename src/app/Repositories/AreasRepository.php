<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Areas;
use App\Models\Unidades;

class AreasRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Areas();
    }
    public function Unidades()
    {
        return Unidades::all()->SortBy('cve_unidad');
    }
    public function Area()
    {
        $area = Areas::First();
        $area->fk_cve_unidad = "0524";
        $area->cve_area= "";
        $area->descripcion= "";
        return $area;
    }
    public function all()
    {
        return $this->model->orderBy('cve_area', 'asc')->paginate(5);
    }
    public function edit($id)
    {     
        $this->model = $this->model->FindOrFail($id);
        $this->model->cve_area = substr( $this->model->cve_area, 4, 2);
        return $this->model;
    }
    public function delete( $id)
    {        
        $this->model->destroy( $id);
    }
    public function save(Request $request, $id)
    {        
        /* VALIDACION ESTRICTA tiene las clausulas UNIQUE para no tener valores repetidos
        $campos=[
            'fk_cve_unidad'=> 'required|string|max:4|min:1',
            'cve_area'=> 'required|string|unique:areas|max:6|min:1',
            'descripcion'=> 'required|string|unique:areas|max:120|min:1',
        ];

        $mensaje=[
            'fk_cve_area.required'=>'La Clave del Area es requerida.',
            'fk_cve_area.min'=>'La Clave del Area debe ser al menos 1 caracter.',
            'fk_cve_area.max'=>'La Clave del Area debe tener 2 caracteres como máximo.',

            'cve_area.required'=>'La Clave del Area es requerida.',
            'cve_area.max'=>'La Clave del Area debe tener máximo 2 caracteres.',
            'cve_area.min'=>'La Clave del Area debe tener al menos 1 caracter.',
            'cve_area.unique'=>'La Clave del Area ya existe',
            
            'descripcion.required'=>'La Descripción del Area es requerida.',
            'descripcion.min'=>'La Descripción del Area debe tener al menos 1 caracter.',
            'descripcion.max'=>'La Descripción del Area debe tener 120 caracteres como máximo.',
            'descripcion.unique'=>'La Descrpción del Area  ya existe',
        ];
        */
        $campos=[
            'fk_cve_unidad'=> 'required|string|max:4|min:1',
            'cve_area'=> 'required|string|max:6|min:1',
            'descripcion'=> 'required|string|max:120|min:1',
        ];
        $mensaje=[
            'fk_cve_area.required'=>'La Clave del Area es requerida.',
            'fk_cve_area.min'=>'La Clave del Area debe ser al menos 1 caracter.',
            'fk_cve_area.max'=>'La Clave del Area debe tener 2 caracteres como máximo.',

            'cve_area.required'=>'La Clave del Area es requerida.',
            'cve_area.max'=>'La Clave del Area debe tener máximo 2 caracteres.',
            'cve_area.min'=>'La Clave del Area debe tener al menos 1 caracter.',
            
            'descripcion.required'=>'La Descripción del Area es requerida.',
            'descripcion.min'=>'La Descripción del Area debe tener al menos 1 caracter.',
            'descripcion.max'=>'La Descripción del Area debe tener 120 caracteres como máximo.',            
        ];
        $request->merge([
            'cve_area' => $request->fk_cve_unidad . $request->cve_area,
        ]);
        $this->validate($request, $campos, $mensaje);        
        $datos_area = $this->fix_datos_area($request);    
        $this->model->where('id','=',$id)->update($datos_area);
    }
    private function fix_datos_area($request) 
    {
        //dd($request);
        // elimina la variables _token , _method, y activao
        $datos_area = request()->except('_token', '_method', "activao");
        //$datos_area['activa'] = $request->activao; 
        $datos_area['activa'] = filter_var($request->activao, FILTER_VALIDATE_BOOLEAN);
        return $datos_area;
    }
    public function insert( Request $request)
    {        
        $campos=[
            'fk_cve_unidad'=> 'required|string|max:4|min:1',
            'cve_area'=> 'required|string|unique:areas|max:6|min:1',
            'descripcion'=> 'required|string|max:120|min:1',
        ];
        $mensaje=[
            'fk_cve_unidad.required'=>'La Clave de la Unidad Administrativa es requerida.',
            'fk_cve_unidad.min'=>'La Clave de la Unidad Administrativa debe ser al menos 1 caracter.',
            'fk_cve_unidad.max'=>'La Clave de la Unidad Administrativa debe tener 4 caracteres como máximo.',
            'cve_area.required'=>'La Clave del Area es requerida.',
            'cve_area.max'=>'La Clave del Area debe tener máximo 2 caracteres.',
            'cve_area.min'=>'La Clave del Area debe tener al menos 1 caracter.',
            'cve_area.unique'=>'La Clave del Area ya existe',
            'descripcion.required'=>'La Descripción del Area es requerida.',
            'descripcion.min'=>'La Descripción del Area debe tener al menos 1 caracter.',
            'descripcion.max'=>'La Descripción del Area debe tener 120 caracteres como máximo.',            
        ];
        $request->merge([
            'cve_area' => $request->fk_cve_unidad . $request->cve_area,
        ]);
        //dd($request);
        $this->validate( $request, $campos, $mensaje);
        $datos_area= $this->fix_datos_area( $request);
        //dd($datos_tipo_dependencia);
        $this->model->insert( $datos_area);
    }
}
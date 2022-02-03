<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Dependencias;
use App\Models\TipoDependencias;

class DependenciasRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Dependencias();
    }

    public function Dependencia_blank(){
        $dependencia = Dependencias::FindOrFail(1);
        $dependencia->fk_cve_tipo_dependencia= "D";
        $dependencia->descripcion= "";
        $dependencia->activa= true;
        return ($dependencia);
    }
    public function TipoDependencias(){
        return( TipoDependencias::all()->SortBy('cve_tipo_dependencia'));
    }
     public function all(){
        return( $this->model->orderBy('cve_dependencia', 'asc')->paginate(5));
    }
    public function edit($id)
    {     
        $this->model = $this->model->FindOrFail($id);
        $this->model->cve_area = substr( $this->model->cve_area, 4, 2);
        return ( $this->model );
    }
    public function delete( $id)
    {        
        $this->model->destroy($id);
    }
    public function save(Request $request, $id)
    {        
        // Validacion no estricta 
        $campos=[
            'fk_cve_tipo_dependencia'=> 'required|string|max:1|min:1',
            'cve_dependencia'=> 'required|string|max:2|min:1',
            'descripcion'=> 'required|string|max:120|min:1',
        ];
        $mensaje=[
            'fk_cve_tipo_dependencia.required'=>'La Clave del Tipo de Dependencia es requerida.',
            'fk_cve_tipo_dependencia.min'=>'La Clave del Tipo de Dependencia debe ser al menos 1 caracter.',
            'fk_cve_tipo_dependencia.max'=>'La Clave del Tipo de Dependencia debe tener 1 caracter como máximo.',

            'cve_dependencia.required'=>'La Clave de Dependencia es requerida.',
            'cve_dependencia.max'=>'La Clave de Dependencia debe tener máximo 2 caracteres.',
            'cve_dependencia.min'=>'La Clave de Dependencia debe tener al menos 1 caracter.',
            'cve_dependencia.unique'=>'La Clave de Dependencia ya existe',
    
            'descripcion.required'=>'La Descripción de la Dependencia es requerida.',
            'descripcion.min'=>'La Descripción de la Dependencia debe tener al menos 1 caracter.',
            'descripcion.max'=>'La Descripción de la Dependencia debe tener 120 caracteres como máximo.',
        ];
        $this->validate( $request, $campos, $mensaje);  
        $datos_dependencia = $this->fix_datos_dependencias($request);                
        $this->model->where('id','=',$id)->update($datos_dependencia);
    }
    private function fix_datos_dependencias($request) 
    {
        // elimina la variables _token , _method, y activao
        $datos_dependencia = request()->except('_token', '_method', "activao");
        $datos_dependencia['activa'] = filter_var($request->activao, FILTER_VALIDATE_BOOLEAN);        
        return ($datos_dependencia);       
    }
    public function insert( Request $request)
    {        
        $campos=[
            'fk_cve_tipo_dependencia'=> 'required|string|max:1|min:1',
            'cve_dependencia'=> 'required|string|unique:dependencias|max:2|min:1',
            'descripcion'=> 'required|string|unique:dependencias|max:120|min:1',
        ];
        $mensaje=[
            'fk_cve_tipo_dependencia.required'=>'La Clave del Tipo de Dependencia es requerida.',
            'fk_cve_tipo_dependencia.min'=>'La Clave del Tipo de Dependencia debe ser al menos 1 caracter.',
            'fk_cve_tipo_dependencia.max'=>'La Clave del Tipo de Dependencia debe tener 1 caracter como máximo.',

            'cve_dependencia.required'=>'La Clave de Dependencia es requerida.',
            'cve_dependencia.max'=>'La Clave de Dependencia debe tener máximo 2 caracteres.',
            'cve_dependencia.min'=>'La Clave de Dependencia debe tener al menos 1 caracter.',
            'cve_dependencia.unique'=>'La Clave de Dependencia ya existe',
            
            'descripcion.required'=>'La Descripción de la Dependencia es requerida.',
            'descripcion.min'=>'La Descripción de la Dependencia debe tener al menos 1 caracter.',
            'descripcion.max'=>'La Descripción de la Dependencia debe tener 120 caracteres como máximo.',
            'descripcion.unique'=>'La Descrpción de la Dependencia ya existe',
        ];
        //dd($request);
        $this->validate( $request, $campos, $mensaje);
        $datos_dependencia= $this->fix_datos_dependencias( $request);
        //dd($datos_tipo_dependencia);
        $this->model->insert( $datos_dependencia);
    }
}
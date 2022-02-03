<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Exception;
//use Auth;
// Necesario para la clase Session
use Session;

use App\Models\Unidades;
use App\Models\Dependencias;

class UnidadesRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Unidades();
    }
    public function dependencias()
    {
        //dd("aqui");
        return( Dependencias::all()->SortBy('cve_dependencia'));
    }
    public function all()
    {        
        //return "HI";
        Session::pull('mensaje');
        Session::pull('filter');
        $dependencia = $this->dependencias();
        return ($this->model->orderBy('cve_unidad', 'asc')->paginate(5));
    }
    public function unidad_blank(){
        $unidad = Unidades::FindOrFail(1);
        $unidad->fk_cve_dependencia = "05";
        $unidad->cve_unidad= "00";
        $unidad->descripcion= "";
        $unidad->activa= true;
        return ($unidad);
    }
    public function edit( $id)
    {     
        $this->model = $this->model->FindOrFail( $id);
        // reconrta la clave eliminando la clave de dependencia
        $this->model->cve_unidad = substr( $this->model->cve_unidad, 2, 2);
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
            'fk_cve_dependencia'=> 'required|string|max:2|min:2',
            'cve_unidad'=> 'required|string|max:2|min:2',
            'descripcion'=> 'required|string|max:120|min:1',
        ];
        $mensaje=[
            'fk_cve_dependencia.required'=>'La Clave de Dependencia es requerida.',
            'fk_cve_dependencia.min'=>'La Clave de la Dependencia debe ser al menos 2 caracteres.',
            'fk_cve_dependencia.max'=>'La Clave de la Dependencia debe tener 2 caracteres como máximo.',
            'cve_unidad.required'=>'La Clave de Dependencia es requerida.',
            'cve_unidad.max'=>'La Clave de la Unidad debe tener máximo 2 caracteres.',
            'cve_unidad.min'=>'La Clave de la Unidad debe tener al menos 2 caracteres.',        
            'descripcion.required'=>'La Descripción de la Unidad es requerida.',
            'descripcion.min'=>'La Descripción de la Unidad debe tener al menos 1 caracter.',
            'descripcion.max'=>'La Descripción de la Unidad debe tener 120 caracteres como máximo.',
        ];        
        $this->validate( $request, $campos, $mensaje);  
        $request->merge([
            'cve_unidad' => $request->fk_cve_dependencia . $request->cve_unidad,
        ]);
        $datos_unidad = $this->fix_datos_unidades($request);                
        $this->model->where('id','=',$id)->update($datos_unidad);
    }
    private function fix_datos_unidades( $request)
    {
        // elimina la variables _token , _method, y activao
        $datos_unidad = request()->except('_token', '_method', "activao");        
        if ( $request->activao) {
            $datos_unidad['activa'] = true;             
        } else {            
            $datos_unidad['activa'] = false;            
        };
       return ($datos_unidad);
    }    
    public function insert( Request $request)
    {        
        // Validación Estricta al insertar en la tabla-
        $campos=[
            'fk_cve_dependencia'=> 'required|string|max:2|min:2',
            'cve_unidad'=> 'required|string|max:2|min:2',
            'descripcion'=> 'required|string|max:120|min:1',
        ];
        $mensaje=[
            'fk_cve_dependencia.required'=>'La Clave de la Dependencia es requerida.',
            'fk_cve_dependencia.min'=>'La Clave de la Dependencia debe ser al menos 2 caracteres.',
            'fk_cve_dependencia.max'=>'La Clave de la Dependencia debe tener 2 caracteres como máximo.',
            'cve_unidad.required'=>'La Clave de la Unidad es requerida.',
            'cve_unidad.max'=>'La Clave de la Unidad debe tener máximo 2 caracteres.',
            'cve_unidad.min'=>'La Clave de la Unidad debe tener al menos 2 caracteres.',
            //'cve_unidad.unique'=>'La Clave de la Unidad ya existe',  
            'descripcion.required'=>'La Descripción de la Unidad es requerida.',
            'descripcion.min'=>'La Descripción de la Unidad debe tener al menos 1 caracter.',
            'descripcion.max'=>'La Descripción de la Unidad debe tener 120 caracteres como máximo.',
            //'descripcion.unique'=>'La Descrpción de la Unidad ya existe',
        ];                
        $this->validate( $request, $campos, $mensaje);
        $request->merge([
            'cve_unidad' => $request->fk_cve_dependencia . $request->cve_unidad,
        ]);
        //dd($request);
        $datos_unidad= $this->fix_datos_unidades( $request);
        //dd($datos_unidad);
        $this->model->insert( $datos_unidad);
    }
}
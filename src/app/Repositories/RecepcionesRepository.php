<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Exception;
use Auth;
// Necesario para la clase Session
use Session;

use App\Models\Areas;
use App\Models\Dependencias;
use App\Models\Evaluadores;
use App\Models\Evaluados;
use App\Models\Periodos;
use App\Models\TipoDependencias;
use App\Models\Unidades;
use App\Models\User;

class RecepcionesRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Evaluados();
    }
    public function full( $id)
    {
        $tipo_dependencia = $this->tipoDependencia();
        $dependencia =      $this->dependencias();
        $unidad =           $this->unidades();
        $area =             $this->areas();
        $periodo =          $this->periodos();
        $evaluador=         $this->get_evaluador('id', '<>', "0");
        $eva=               $this->get_evaluado('id', '=', $id);        
        // este es de tipo collection         
        foreach ($eva as $evaluado) {            
        }; 
        return view('Recepciones.edit', compact(
            'tipo_dependencia',
            'dependencia',
            'unidad',
            'area',
            'periodo',
            'evaluado',
            'evaluador',));
    }
    // Vista de Capturar Fecha de Recepción de Evaluación en Fïsico  
    public function editRec( $id)
    {
         //dd("id=".$id);
         $tipo_dependencia = $this->tipoDependencia();
         $dependencia =      $this->dependencias();
         $unidad =           $this->unidades();
         $area =             $this->areas();
         $periodo =          $this->periodos();
         $evaluador=         $this->get_evaluador('id', '<>', "0");
         // este es de tipo collection
         $eva=               $this->get_evaluado('id', '=', $id);      
         foreach ($eva as $evaluado) {
         };
         return view('Recepciones.edit_min', compact(
             'tipo_dependencia',
             'dependencia',
             'unidad',
             'area',
             'periodo',
             'evaluado',
             'evaluador',));
    }
    public function create()
    {
        $tipo_dependencia =     $this->tipoDependencia();
        $dependencia =          $this->dependencias();
        $unidad =               $this->unidades();
        $area =                 $this->areas();
        $periodo =              $this->periodos();
        $evaluado=              $this->getNewEvaluado('id', '=', 1);
        $evaluador=             $this->get_evaluador('id', '<>', "0");        
        return view('Recepciones.create', compact(
            'tipo_dependencia',
            'dependencia',
            'unidad',
            'area',
            'periodo',
            'evaluado',
            'evaluador',
        ));        
    }
    private function validaVista( $datos, $datos2)
    {
      if ($this->validaUsuario( $datos) )  
      {
        $vista=  view('evaluadores',$datos);
      } 
      else 
      {        
        $vista=  view('Recepciones.index', $datos, $datos2);
      } // end else
      return $vista;
    }
    public function index()
    {            
      //dd("aqui");
      $tipo_dependencia = $this->tipoDependencia();
      $dependencia=       $this->dependencias();
      $periodo=           $this->periodos();
      $unidad=            $this->unidades();
      $area=              $this->areas();
      $evaluado=          $this->evaluadofirstOrNew();
      //dd("aqui");
      $periodo_ini = $periodo->First()->cve_periodo;
      $periodo_fin = $periodo->Last()->cve_periodo;
      $dependencia_ini = $dependencia->First()->cve_dependencia;
      $dependencia_fin = $dependencia->Last()->cve_dependencia;
      $unidad_ini = $unidad->First()->cve_unidad;
      $unidad_fin = $unidad->Last()->cve_unidad;
      $area_ini = $area->First()->cve_area;
      $area_fin = $area->Last()->cve_area;            
      $datos['evaluado'] = $this->getDatos();
      $empleado = "";
      // No es admnistrador?

      $vista = vistaValidada($datos, compact(
        'periodo',
        'tipo_dependencia',
        'dependencia',
        'unidad',
        'area',
        'evaluado',
        'periodo_ini','periodo_fin',
        'dependencia_ini','dependencia_fin',
        'unidad_ini','unidad_fin',
        'area_ini','area_fin',
        'empleado'
     ));
      return $vista;
    }  
    private function getDataWithFilter()
    {
        $mensaje = session('mensaje');
        Session::put('mensaje', $mensaje);
        $eva = $this->model->query();
        $eva->orderBy('num_emp','asc');            
        for ($i = 1; $i <= $value->count()/6; $i++) 
        {            
            $eva->where($value[$i*6-5],$value[$i*6-3],$value[$i*6-1]);
        }
        return $eva->paginate(5);        
    }
    private function getDataWithOutFilter()
    {
        $mensaje= Session::pull('mensaje');
        $mensaje = $mensaje . " Sin Filtro, todos los empleados.";
        Session::put('mensaje', $mensaje);
        return $eva->paginate(5);        
    }
    public function getDatos()
    {
        $empleado = "" ;
        $value = session('filter');
        //$value = $request->session()->get('filtro');
        if( strlen($value)>0) {
            //dd($value);
            $dato= $this->getDatowithFilter();
        } else {
            $dato= $this->getDatowithOutFilter();            
        }
        return ($dato);
    }
    private function getNewEvaluado($campo, $op, $dato) 
    {
        $evaluado= $this->get_evaluado('id', '<>', "0");
        //dd($evaluador);
        $evaluado->fk_cve_periodo= '211';
        $evaluado->num_emp = "";
        $evaluado->nombre = "";
        $evaluado->puesto = "";
        $evaluado->puesto_funcional = "";
        $evaluado->nivel = "";
        $evaluado->fk_ne_jefe = "";
        $evaluado->nom_repr = "";
        $evaluado->correo = "dfcc70@gmail.com";
        $evaluado->fk_cve_area = "052401";
        $evaluado->recibido = "NO";
        $evaluado->fecha_rec = "";
        $evaluado->fecha_val = "";        
        $evaluado->observaciones = "";
        return ($evaluado);
    }
    public function get_evaluado($campo, $op, $dato) 
    {     
        $evaluado = DB::table('evaluados')
        ->join('users', 'users.num_emp', '=', 'evaluados.fk_ne_jefe')
        ->join('periodos', 'periodos.cve_periodo', '=', 'evaluados.fk_cve_periodo')
        ->join('areas', 'areas.cve_area', '=', 'evaluados.fk_cve_area')
        ->join('unidades', 'unidades.cve_unidad', '=', 'areas.fk_cve_unidad')
        ->join('dependencias', 'dependencias.cve_dependencia', '=', 'unidades.fk_cve_dependencia')
        ->join('tipo_dependencia', 'tipo_dependencia.cve_tipo_dependencia', '=', 'dependencias.fk_cve_tipo_dependencia')
        ->orderBy('fk_ne_jefe', 'ASC')
        ->select(
            'evaluados.id',
            'evaluados.fk_cve_periodo',
            'evaluados.num_emp',
            'evaluados.nombre',
            'evaluados.puesto',
            'evaluados.puesto_funcional',
            'evaluados.nivel',
            'evaluados.fk_ne_jefe',
            'evaluados.evaluado',
            'evaluados.nom_repr',
            'evaluados.impreso',
            'evaluados.r1',
            'evaluados.r2',
            'evaluados.r3',
            'evaluados.r4',
            'evaluados.r5',
            'evaluados.r6',
            'evaluados.r7',
            'evaluados.r8',
            'evaluados.r9',
            'evaluados.r10',
            'evaluados.r11',
            'evaluados.r12',
            'evaluados.r13',
            'evaluados.r14',
            'evaluados.r15',
            'evaluados.r16',
            'evaluados.r17',
            'evaluados.r18',
            'evaluados.r19',
            'evaluados.r20',
            'evaluados.r21',
            'evaluados.r22',
            'evaluados.r23',
            'evaluados.r24',
            'evaluados.r25',
            'evaluados.r26',
            'evaluados.r27',
            'evaluados.r28',
            'evaluados.r29',
            'evaluados.r30',
            'evaluados.suma',
            'evaluados.promedio',
            'evaluados.areas_opor',
            'evaluados.correo',
            'evaluados.grado_dominio',
            'evaluados.fk_cve_area',
            'evaluados.fecha_eva',
            'evaluados.fecha_imp',
            'evaluados.fecha_val',
            'evaluados.validado',
            'evaluados.fecha_rec',
            'evaluados.recibido',
            'evaluados.observaciones',
            'users.name as nom_jefe',
            'periodos.descripcion as per_descripcion',
            'areas.descripcion as area',
            'unidades.descripcion as unidad_admva',
            'dependencias.descripcion as dependencia',
            'tipo_dependencia.descripcion as tipo_dependencia')
        ->where('evaluados.'.$campo, $op, $dato)->get();
        //dd($evaluado);
        return ($evaluado);
    }
    public function get_evaluador($campo, $op, $dato) 
    {
        $evaluador = DB::table('evaluadores')
            ->join('users', 'users.num_emp', '=', 'evaluadores.ne_jefe')
            ->join('periodos', 'periodos.cve_periodo', '=', 'evaluadores.fk_cve_periodo_ultimo')
            ->join('areas', 'areas.cve_area', '=', 'evaluadores.fk_cve_area')
            ->join('unidades', 'unidades.cve_unidad', '=', 'areas.fk_cve_unidad')
            ->join('dependencias', 'dependencias.cve_dependencia', '=', 'unidades.fk_cve_dependencia')
            ->join('tipo_dependencia', 'tipo_dependencia.cve_tipo_dependencia', '=', 'dependencias.fk_cve_tipo_dependencia')
            ->orderBy('ne_jefe', 'ASC')
            ->select(
                'evaluadores.id',
                'evaluadores.fk_cve_periodo_ultimo',
                'evaluadores.ne_jefe',
                'evaluadores.tot_evaluar',
                'evaluadores.tot_evaluado',
                'evaluadores.pen_evaluar',
                'evaluadores.puesto',
                'users.name as nombre',
                'areas.descripcion as area',
                'unidades.descripcion as unidad_admva',
                'dependencias.descripcion as dependencia',
                'tipo_dependencia.descripcion as tipo_dependencia')
        ->where('evaluadores.'.$campo, $op, $dato)->get();
        return($evaluador);
    }
    public function dependencias()
    {        
        return (Dependencias::all()->sortBy("cve_dependencia"));
    }    
    public function tipoDependencia()
    {        
        return (TipoDependencias::all()->sortBy("cve_tipo_dependencia"));
    }
    public function unidades()
    {        
        return (Unidades::all()->sortBy("cve_unidad"));
    }
    public function areas()
    {        
        return (Areas::all()->sortBy("cve_area"));
    }
    public function periodos()
    {        
        return (Periodos::all()->sortBy("cve_periodo"));
    }
    public function evaluadofirstOrNew()
    {             
        return( $this->model->firstOrNew());
    }    
    private function validaUsuario() 
    {      
      return (Auth::user()->perfil != "A");
    }
    private function get_val_campos()
    {
        return ([
            'num_emp'=> 'required|numeric|max:99999999|min:1',
            'nombre'=> 'required|string|max:80|min:1',
            'puesto'=> 'required|string|max:120|min:1',
            'puesto_funcional'=> 'required|string|max:120|min:1',
            'nivel'=> 'required|string|max:5|min:1',
            'fk_ne_jefe'=> 'required|numeric|max:99999999|min:1',
            'correo'=> 'required|email',
            'fecha_val'=> 'date|nullable|after:1 January 2001',
            'fecha_rec'=> 'date|nullable|after:1 January 2001',
            'fk_cve_area'=> 'required|string|max:6|min:6',            
        ]);
    }
    public function get_val_mensajes()
    {
        return([
            'num_emp.required'=>'Se requiere el Numero de Empleado (solo numeros).',
            'num_emp.max'=>'El número máximo permitido es 99,999,999.',
            'num_emp.min'=>'El número mínimo permitido es 1.',
            'nombre.required'=>'Es necesario el Nombre del Empleado.',
            'nombre.max'=>'El Nombre del Empleado debe tener como máximo 80 caracteres.',
            'puesto.required'=>'Es necesario el Puesto Nominal del Empleado.',
            'puesto.max'=>'El Puesto Nominal del Empleado debe tener como máximo 120 caracteres.',
            'puesto_funcional.required'=>'Es necesario el Puesto Funcional del Empleado.',
            'puesto_funcional.max'=>'El Puesto Funcional del Empleado debe tener como máximo 120 caracteres.',
            'nivel.required'=>'Es necesario el Nivel del Empleado.',
            'nivel.max'=>'El Nivel debe tener como máximo 5 caracteres.',
            'fk_ne_jefe.required'=>'Es necesario el Número de Empleado de Jefe Inmediato.',
            'correo.required'=>'Es necesario el Correo Electrónico de Empleado.',
            'fk_cve_area.required'=>'Es necesaria la Clave del Area del Empleado.',
            'fecha_val.after'=> 'Si se captura la fecha de validación, es necesario que sea mayor que 1/1/2001.',
            'fecha_rec.after'=> 'Si se captura la fecha de recepción, es necesario que sea mayor que 1/1/2001.',
        ]);
    }
    public function insert(Request $request) 
    {
        $campos= $this->get_val_campos();
        $mensaje= $this->get_val_mensajes();
        $this->validate( $request, $campos, $mensaje);
        $datos_eva = request()->except('_token');
        $this->model->insert($datos_eva);
    }
    public function delete( $id)
    {        
        $this->model->destroy( $id);
    }
     // Vista de Capturar Fecha de Recepción de Evaluación en Fïsico
    public function edit( Request $request, $id)
    {
        $campos  = $this->get_val_campos();
        $mensaje = $this->get_val_mensajes();
        $eva= $this->get_evaluado('id', '=', $id);
        foreach ($eva as $evaluado) {
        };
        if (!isset($request->num_emp)) {
            $request->request->add(['num_emp' => $evaluado->num_emp]);
            $request->request->add(['nombre' => $evaluado->nombre]);
            $request->request->add(['puesto' => $evaluado->puesto]);
            $request->request->add(['puesto_funcional' => $evaluado->puesto_funcional]);
            $request->request->add(['nivel' => $evaluado->nivel]);
            $request->request->add(['fk_ne_jefe' => $evaluado->fk_ne_jefe]);
            $request->request->add(['correo' => $evaluado->correo]);
            $request->request->add(['fk_cve_area' => $evaluado->fk_cve_area]);            
        };
        $request->request->add(['recibido' => 'SI']);
        $request->request->add(['validado' => 'SI']);
        $this->validate($request, $campos, $mensaje);
        if($request->fecha_rec==NULL) {
            $request->merge([
                'recibido' => 'NO',
            ]);
        } else {
            $request->merge([
                'recibido' => 'SI',
            ]);
        };
        if($request->fecha_val==NULL) {
            $request->merge([
                'validado' => 'NO',
            ]);
        } else {
            $request->merge([
                'validado' => 'SI',
            ]);
        };
        //dd($request);
        // elimina la variable _token y _method
        $datos_eva = request()->except('_token', '_method');        
        //dd($id);
        $this->model->where('id','=',$id)->update($datos_eva);
    }
    public function filtrar(Request $request) 
    {
        $success = "Filtrado para:";
        $filter = new Collection();        
       if($request->empleado > "0") {
            $filter->push('campo', 'num_emp');
            $filter->push('op', '=');
            $filter->push('valor',$request->empleado);
            $success = $success ." Número de Empleado = ".$request->empleado;
        } 
        if($request->pini > "0") {
            $filter->push('campo', 'fk_cve_periodo');
            $filter->push('op', '=');
            $filter->push('valor',$request->pini);
            $success = $success .", Periodo = ".$request->pini;
        } 
        if($request->areaini > "000000") {
            $filter->push('campo', 'fk_cve_area');
            $filter->push('op', '>=');
            $filter->push('valor',$request->areaini);
            $success = $success .", Area >= ".$request->areaini;
        } 
        if($request->areafin > "000000") {
            $filter->push('campo', 'fk_cve_area');
            $filter->push('op', '<=');
            $filter->push('valor',$request->areafin);
            $success = $success .", Area <= ".$request->areafin;
        } 
        Session::put('mensaje', $success);
        Session::put('filter', $filter);
    }    
}
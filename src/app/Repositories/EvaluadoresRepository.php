<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use Exception;
//use Auth;
// Necesario para la clase Session
use Session;
use Auth;

use App\Models\Evaluadores;

class EvaluadoresRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Evaluadores();
    }
    public function eva2()
    {
        //dd(Auth::user());
        Session::pull('mensaje');
        Session::pull('filter');
        $evaluados = DB::table('evaluados')
                 ->where('fk_ne_jefe', Auth::user()->num_emp)
                 ->orderBy('id')
                 ->get();
        $evaluador = DB::table('evaluadores')
                 ->join('periodos', 'periodos.cve_periodo', '=', 'evaluadores.fk_cve_periodo_ultimo')
                 ->join('areas', 'areas.cve_area', '=', 'evaluadores.fk_cve_area')
                 ->join('unidades', 'unidades.cve_unidad', '=', 'areas.fk_cve_unidad')
                 ->join('dependencias', 'dependencias.cve_dependencia', '=', 'unidades.fk_cve_dependencia')
                 ->join('tipo_dependencia', 'tipo_dependencia.cve_tipo_dependencia', '=', 'dependencias.fk_cve_tipo_dependencia')
                 ->orderBy('id', 'ASC')
                 ->select(
                     'evaluadores.id',
                     'evaluadores.fk_cve_periodo_ultimo',
                     'evaluadores.ne_jefe',
                     'evaluadores.tot_evaluar',
                     'evaluadores.tot_evaluado',
                     'evaluadores.pen_evaluar',
                     'evaluadores.puesto',
                     'evaluadores.fk_cve_area',
                     'areas.descripcion as area',
                     'areas.activa as area_activa',
                     'unidades.descripcion as unidad_admva',
                     'unidades.activa as unidad_admva_activa',
                     'dependencias.descripcion as dependencia',
                     'dependencias.activa as dependencia_activa',
                     'tipo_dependencia.descripcion as tipo_dependencia')
                 ->where('ne_jefe', Auth::user()->num_emp)->get();
        $success = false;
        if ($evaluador->isEmpty()) 
             {
                 $success = "Error, El usuario No. ".Auth::user()->num_emp." no existe ers.index().";
             };
        $tot_evaluar = 0;
        $pen_evaluar = 0;
        // debe entrar una sola vez a este ciclo, solo un registro se extrae
        foreach($evaluador as $evalr) 
             {
                 $tot_evaluar = $evalr->tot_evaluar;
                 $pen_evaluar = $evalr->pen_evaluar;
        };
        if($pen_evaluar == "0") 
             {
                 $success = "Usted ya no tiene empleados por evaluar.";
             } else 
             {
                 $success = "Usted tiene ". $tot_evaluar.
                     " empleados asignados y le quedan ". $pen_evaluar. " por evaluar.";
        };
        $datos=[
                 "usuario"=>Auth::user()->name,
                 "perfil"=>Auth::user()->perfil,
                 "email"=>Auth::user()->email,
                 "numeroEmpleado"=>Auth::user()->num_emp,
                 "evaluados"=>$evaluados,
                 "success"=>$success
             ];
        //dd($datos);
        // es administrador?
        if (Auth::user()->perfil == "A") 
             { 
                 $datos['success']  = "Tenga cuidado con estas opciones";
                return view('administrador',$datos);
        }
        else
        {
            foreach($evaluador as $evalr) 
                 {
                     if($evalr->area_activa &&
                        $evalr->unidad_admva_activa  &&
                        $evalr->dependencia_activa ) 
                     {
                         //dd($evaluador);
                         //dd("USUARIO MORTAL");
                         return view('evaluadores',$datos);
                     } else
                     {
                         //dd($evalr);
                         $datos['cve_area'] = $evalr->fk_cve_area;                        
                         return view('inactivo',$datos);
                     }
                 }                
        };
    }
    // completa la vista del Usuario normal Evaluador!!
    public function index()
    {
        $datos = [
            "usuario"=>Auth::user()->name,
            "perfil"=>Auth::user()->perfil,
            "email"=>Auth::user()->email,
            "numeroEmpleado"=>Auth::user()->num_emp,
            "cve_area"=>"",
            "evaluados"=>"",
            "success"=>""
        ];
        //dd("USUARIO MORTAL");
        $evaluador = DB::table('evaluadores')
        ->join('periodos', 'periodos.cve_periodo', '=', 'evaluadores.fk_cve_periodo_ultimo')
        ->join('areas', 'areas.cve_area', '=', 'evaluadores.fk_cve_area')
        ->join('unidades', 'unidades.cve_unidad', '=', 'areas.fk_cve_unidad')
        ->join('dependencias', 'dependencias.cve_dependencia', '=', 'unidades.fk_cve_dependencia')
        ->join('tipo_dependencia', 'tipo_dependencia.cve_tipo_dependencia', '=', 'dependencias.fk_cve_tipo_dependencia')
        ->orderBy('id', 'ASC')
        ->select(
                'evaluadores.id',
                'evaluadores.fk_cve_periodo_ultimo',
                'evaluadores.ne_jefe',
                'evaluadores.tot_evaluar',
                'evaluadores.tot_evaluado',
                'evaluadores.pen_evaluar',
                'evaluadores.puesto',
                'evaluadores.fk_cve_area',
                'areas.descripcion as area',
                'areas.activa as area_activa',
                'unidades.descripcion as unidad_admva',
                'unidades.activa as unidad_admva_activa',
                'dependencias.descripcion as dependencia',
                'dependencias.activa as dependencia_activa',
                'tipo_dependencia.descripcion as tipo_dependencia')
            ->where('ne_jefe', Auth::user()->num_emp)->get();
        if ($evaluador->isEmpty()) 
        { 
            $vista= back()->with("Error al ingresar, Usuario No. ".Auth::user()->num_emp." no existe.");
            return $vista;
        };
        foreach($evaluador as $evalr) 
        {
            if($evalr->area_activa  &&
                   $evalr->unidad_admva_activa  &&
                   $evalr->dependencia_activa ) 
                {
                    //dd($evaluador);
                    $vista= view('consideraciones',$datos);
                    return $vista;
            } else
            {
                    //dd($evalr);
                    $datos['cve_area'] = $evalr->fk_cve_area;                        
                    $vista = view('inactivo',$datos);
                    return $vista;
            }
        }
    }
    // completa la vista del Administrador!!
    public function indexAdmin()
    {
        $datos = [
            "usuario"=>Auth::user()->name,
            "perfil"=>Auth::user()->perfil,
            "email"=>Auth::user()->email,
            "numeroEmpleado"=>Auth::user()->num_emp,
            "cve_area"=>"",
            "evaluados"=>"",
            "success"=>""
        ];
        $datos['success']  = "Tenga cuidado con estas opciones";
        $vista = view('administrador',$datos);
        return $vista;
    }
}
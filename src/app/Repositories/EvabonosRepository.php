<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

use App\Models\Areas;
use App\Models\Dependencias;
use App\Models\Evaluadores;
use App\Models\Evaluados;
use App\Models\Periodos;
use App\Models\TipoDependencias;
use App\Models\Unidades;

class EvabonosRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Evaluados();
    }
    public function dependencias()
    {        
        return (Dependencias::all()->sortBy("cve_dependencia"));
    }    
    public function tipoDependencias()
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
    public function all()
    {  
        return( $this->model->orderBy('num_emp', 'asc')->paginate(5));
    }
    public function index()
    {
        $evaluado = $this->all();
        $dependencia = $this->dependencias();
        $unidad = $this->unidades();
        $area = $this->areas();
        $periodo = $this->periodos();
        
        $periodo_ini = $periodo->First()->cve_periodo;
        $periodo_fin = $periodo->Last()->cve_periodo;

        $dependencia_ini = $dependencia->First()->cve_dependencia;
        $dependencia_fin = $dependencia->Last()->cve_dependencia;
        
        $unidad_ini = $unidad->First()->cve_unidad;
        $unidad_fin = $unidad->Last()->cve_unidad;

        $area_ini = $area->First()->cve_area;
        $area_fin = $area->Last()->cve_area;
        
        $promedio_min = 4.6;
        
        return view('admin/Evabonos',
            compact('dependencia','unidad','area','evaluado','periodo',
            'periodo_ini','periodo_fin',
            'dependencia_ini','dependencia_fin',
            'unidad_ini','unidad_fin',
            'area_ini','area_fin',
            'promedio_min'
            ));
    }
    public function reporte( Request $request){
        $req = $request;
        //dd($req);
        $evaluado = DB::table('evaluados')
            ->join('periodos', 'periodos.cve_periodo', '=', 'evaluados.fk_cve_periodo')
            ->join('areas', 'areas.cve_area', '=', 'evaluados.fk_cve_area')
            ->join('unidades', 'unidades.cve_unidad', '=', 'areas.fk_cve_unidad')
            ->join('dependencias', 'dependencias.cve_dependencia', '=', 'unidades.fk_cve_dependencia')
            ->join('tipo_dependencia', 'tipo_dependencia.cve_tipo_dependencia', '=', 'dependencias.fk_cve_tipo_dependencia')
            ->orderBy('num_emp', 'ASC')
            ->orderBy('fk_cve_periodo', 'DESC')
            ->select(
            'evaluados.id',
            'evaluados.fk_cve_periodo',
            'periodos.cve_periodo',
            'periodos.descripcion as des_periodo',
            'evaluados.num_emp',
            'evaluados.nombre',
            'evaluados.puesto',
            'evaluados.puesto_funcional',
            'evaluados.nivel',
            'evaluados.fk_ne_jefe',
            'evaluados.evaluado',
            'evaluados.nom_repr',
            'evaluados.impreso',
            'evaluados.r1', 'evaluados.r2', 'evaluados.r3', 'evaluados.r4', 'evaluados.r5',
            'evaluados.r6', 'evaluados.r7', 'evaluados.r8', 'evaluados.r9', 'evaluados.r10',
            'evaluados.r11', 'evaluados.r12', 'evaluados.r13', 'evaluados.r14', 'evaluados.r15',
            'evaluados.r16', 'evaluados.r17', 'evaluados.r18', 'evaluados.r19','evaluados.r20',
            'evaluados.r21', 'evaluados.r22', 'evaluados.r23', 'evaluados.r24', 'evaluados.r25',
            'evaluados.r26', 'evaluados.r27', 'evaluados.r28', 'evaluados.r29', 'evaluados.r30',
            'evaluados.suma', 
            'evaluados.promedio',
            'evaluados.areas_opor',
            'evaluados.correo',
            'evaluados.grado_dominio',                        
            'dependencias.descripcion as dependencia',
            'unidades.descripcion as unidad_admva',
            'areas.descripcion as area',
            'evaluados.fecha_eva',
            'evaluados.fecha_imp',
            'evaluados.fecha_val',
            'evaluados.observaciones',
            'evaluados.fecha_rec',
            'tipo_dependencia.descripcion as tipo_dependencia')
            ->where('promedio', '>=',floatval($req->promedio_min))
            ->where('fk_cve_area', '>=',$req->areaini)
            ->where('fk_cve_area', '<=',$req->areafin)
            ->where('fk_cve_periodo', '=',$req->periodoini)
            ->where('recibido', '=',"SI")
            ->where('validado', '=',"SI")            
            ->get();
        //dd($evaluado);
        if ($req->promedio_min == 0) {
            $evaluado = DB::table('evaluados')
            ->join('periodos', 'periodos.cve_periodo', '=', 'evaluados.fk_cve_periodo')
            ->join('areas', 'areas.cve_area', '=', 'evaluados.fk_cve_area')
            ->join('unidades', 'unidades.cve_unidad', '=', 'areas.fk_cve_unidad')
            ->join('dependencias', 'dependencias.cve_dependencia', '=', 'unidades.fk_cve_dependencia')
            ->join('tipo_dependencia', 'tipo_dependencia.cve_tipo_dependencia', '=', 'dependencias.fk_cve_tipo_dependencia')
            ->orderBy('num_emp', 'ASC')
            ->orderBy('fk_cve_periodo', 'DESC')
            ->select(
            'evaluados.id',
            'evaluados.fk_cve_periodo',
            'periodos.cve_periodo',
            'periodos.descripcion as des_periodo',
            'evaluados.num_emp',
            'evaluados.nombre',
            'evaluados.puesto',
            'evaluados.puesto_funcional',
            'evaluados.nivel',
            'evaluados.fk_ne_jefe',
            'evaluados.evaluado',
            'evaluados.nom_repr',
            'evaluados.impreso',
            'evaluados.r1', 'evaluados.r2', 'evaluados.r3', 'evaluados.r4', 'evaluados.r5',
            'evaluados.r6', 'evaluados.r7', 'evaluados.r8', 'evaluados.r9', 'evaluados.r10',
            'evaluados.r11', 'evaluados.r12', 'evaluados.r13', 'evaluados.r14', 'evaluados.r15',
            'evaluados.r16', 'evaluados.r17', 'evaluados.r18', 'evaluados.r19','evaluados.r20',
            'evaluados.r21', 'evaluados.r22', 'evaluados.r23', 'evaluados.r24', 'evaluados.r25',
            'evaluados.r26', 'evaluados.r27', 'evaluados.r28', 'evaluados.r29', 'evaluados.r30',
            'evaluados.suma', 
            'evaluados.promedio',
            'evaluados.areas_opor',
            'evaluados.correo',
            'evaluados.grado_dominio',                        
            'dependencias.descripcion as dependencia',
            'unidades.descripcion as unidad_admva',
            'areas.descripcion as area',
            'evaluados.fecha_eva',
            'evaluados.fecha_imp',
            'evaluados.fecha_val',
            'evaluados.observaciones',
            'evaluados.fecha_rec',
            'tipo_dependencia.descripcion as tipo_dependencia')
            ->get();
        }
        if (count($evaluado) < 1)  {
            //dd($req);
            $err = 'Error: No se encontró ningún Evaluado con las condiciones: promedio>='. 
            $req->promedio_min. ", recibido, evaluado, area>=". 
            $req->areaini." y area<=".$req->areafin. " y periodo =".
            $req->periodoini;            
            session(['mensaje' => $err]);
            return back()->with('mensaje', $err);
        }
        else 
        {            
            Session::pull('mensaje');
            Session::pull('filter');             
            return view('admin/Evabonoreportes', 
                compact( 'evaluado', 'req' ));
        }
    }
}
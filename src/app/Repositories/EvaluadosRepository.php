<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Exports\EvaluadosExport;
use App\Exports\EvaluadoresExport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Concerns\WithHeadings;

//use Auth;
// Necesario para la clase Session
use Session;
use Auth;
use PDF;
use Excel;

use App\Models\Evaluados;

class EvaluadosRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Evaluados();
    }
    private function get_evaluado($campo, $id) 
    {
        $evaluado = DB::table('evaluados')
        ->join('periodos', 'periodos.cve_periodo', '=', 'evaluados.fk_cve_periodo')
        ->join('areas', 'areas.cve_area', '=', 'evaluados.fk_cve_area')
        ->join('unidades', 'unidades.cve_unidad', '=', 'areas.fk_cve_unidad')
        ->join('dependencias', 'dependencias.cve_dependencia', '=', 'unidades.fk_cve_dependencia')
        ->join('tipo_dependencia', 'tipo_dependencia.cve_tipo_dependencia', '=', 'dependencias.fk_cve_tipo_dependencia')
        ->orderBy('id', 'ASC')
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
            'areas.descripcion as area',
            'unidades.descripcion as unidad_admva',
            'dependencias.descripcion as dependencia',
            'tipo_dependencia.descripcion as tipo_dependencia')
        ->where($campo, $id)->get();
        return ($evaluado);
    }
    private function get_evaluador($campo, $id) 
    {
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
                'areas.descripcion as area',
                'unidades.descripcion as unidad_admva',
                'dependencias.descripcion as dependencia',
                'tipo_dependencia.descripcion as tipo_dependencia')
        ->where($campo, $id)->get();
        return($evaluador);
    }
    private function get_datos($evaluados,$opt,$msg) {
        $datos=[
            "usuario"=>Auth::user()->name,
            "email"=>Auth::user()->email,
            "numeroEmpleado"=>Auth::user()->num_emp,
            "evaluados"=>$evaluados
        ];
        if ($opt==2) {
            $datos['success'] = $msg;
        }
        //dd($datos);
        return $datos;
    }

    public function index()
    {
        Session::pull('mensaje');
        Session::pull('filter');
        //$evaluados = DB::table('evaluados')->where('fk_ne_jefe', Auth::user()->num_emp)->get();
        $evaluados = $this->get_evaluado('fk_ne_jefe',Auth::user()->num_emp);
        $datos= $this->get_datos($evaluados,1,"");
        $vista = view('evaluado',$datos);
        return $vista;
    }
    public function exp( $action) 
    {
        //$evaluados = DB::table('evaluados')->where('fk_ne_jefe', Auth::user()->num_emp)->get();
        $evaluados = $this->get_evaluado('fk_ne_jefe',Auth::user()->num_emp);
        $datos= $this->get_datos($evaluados,2,"Solo pueden Exportar Datos los Administradores" );
        if (Auth::user()->perfil != "A") {        
            return view('Evaluadores',$datos);
        }
        if ($action== "1") {
            return Excel::download(new UsersExport, 'usuarios.xlsx');
        }
        if ($action== "2") {
            return Excel::download(new EvaluadoresExport, 'evaluadores.xlsx');
        }
        if ($action== "3") {
            return Excel::download(new EvaluadosExport, 'evaluados.xlsx');
            //return Excel::download($evaluados, 'evaluados.xlsx');
        }
        return ('Opción Inválida'); 
    }
    public function imp( $id)
    {
        $evaluado = $this->get_evaluado('evaluados.id',$id);    
        //$evaluado = DB::table('evaluados')->where('num_emp', $id)->get();
        $evaluador = $this->get_evaluador('ne_jefe', Auth::user()->num_emp);
        //$evaluador = DB::table('evaluadores')->where('ne_jefe', Auth::user()->num_emp)->get();
        if ($evaluado->isEmpty()) 
        {
            return back()->with("Error al imprimir, El empleado con ID ".$id." no existe.");
        };
        if ($evaluador->isEmpty()) 
        {
            return back()->with("Error al imprimir, El evaluador No. ".Auth::user()->num_emp." no existe.");
        };
        foreach($evaluado as $eval) 
        {
            foreach($evaluador as $evalr) 
            {
                $datos=[
                    "usuario"=>Auth::user()->name,
                    "numeroEmpleado"=>Auth::user()->num_emp,
                    "id"=>$id,
                    "eval"=>$eval,
                    "evalr"=>$evalr
                ];
                if ($eval->fk_ne_jefe != Auth::user()->num_emp) 
                {
                    return back()->with("Error al imprimir, No le corresponde evaluar al empleado No. ".$id);
                };                      
                 // share data to view
                //view()->share('imprime',$datos);                
                //$pdf = PDF::loadView('imprime', $datos);
                // download PDF file with download method
                //return $pdf->download('pdf_file.pdf');
                return view('imprime',$datos);
            };
        };    
    }
    public function eva( $id)
    {
            //dd($id);
            $evaluado = DB::table('evaluados')->where('id', $id)->get();
            $evaluador = DB::table('evaluadores')->where('ne_jefe', Auth::user()->num_emp)->get();
            if ($evaluado->isEmpty()) 
            {
                return back()->with("Error, El empleado con ID ".$id." no existe.");
            };
            if ($evaluador->isEmpty()) 
            {
                return back()->with("Error, El evaluador No. ".Auth::user()->num_emp." no existe.");
            };
            foreach($evaluado as $eval) 
            {
                foreach($evaluador as $evalr) 
                {
                    $datos=[
                        "usuario"=>Auth::user()->name,
                        "numeroEmpleado"=>Auth::user()->num_emp,
                        "id"=>$id,
                        "eval"=>$eval,
                        "evalr"=>$evalr
                    ];
                    //dd($eval);
                    if ($eval->fk_ne_jefe != Auth::user()->num_emp) 
                    {
                        return back()->with("Error, No le corresponde evaluar al empleado con ID ".$id);
                    };
                    if ($eval->validado != 'NO') 
                    {
                        return back()->with("Error, El empleado con ID ".$id." ya fué validadoo.");
                    };
                    //dd($datos);
                    //return view('consideraciones', $datos);
                    return view('evaluado',$datos);
                };
            };
    }
    public function grabar(Request $request) 
    {
        //dd($request);
        // Solo cuando Valide se pone en SI
        $evaluado = "SI";
        $affected = DB::table('evaluados') ->where('id', $request->id) ->update([
            'r1' => $request->r1, 'r2' => $request->r2,  'r3' => $request->r3,
            'r4' => $request->r4,  'r5' => $request->r5,  'r6' => $request->r6,
            'r7' => $request->r7,  'r8' => $request->r8,  'r9' => $request->r9,
            'r10' => $request->r10,  'r11' => $request->r11, 'r12' => $request->r12,
            'r13' => $request->r13,  'r14' => $request->r14,  'r15' => $request->r15,
            'r16' => $request->r16,  'r17' => $request->r17,  'r18' => $request->r18,
            'r19' => $request->r19,  'r20' => $request->r20,  'r21' => $request->r21,
            'r22' => $request->r22,  'r23' => $request->r23,  'r24' => $request->r24,
            'r25' => $request->r25,  'r26' => $request->r26,  'r27' => $request->r27,
            'r28' => $request->r28,  'r29' => $request->r29,  'r30' => $request->r30,
            'evaluado' => $evaluado,
            'nom_repr' => $request->nom_repr,
            'suma' => $request->suma,
            'promedio' => $request->promedio,
            'areas_opor' => $request->areas_opor,
            'fecha_eva' => DB::raw('CURRENT_TIMESTAMP'),
            'grado_dominio' => $request->grado_dominio]
            );
        $evaluado = DB::table('evaluados')->where('id', $request->id)->get();
        $evaluador = DB::table('evaluadores')->where('ne_jefe', Auth::user()->num_emp)->get();
        //$datos = $this->get_datos($evaluados,2,"Se ha evaluado con éxito al empleado con ID ".$request->id." y nombre ".
        //    $request->nombre.", no olvide dar clic en Enviar a Validación.");
        // return view('Evaluadores',$datos);
        //dd($dat);
        foreach($evaluado as $eval) 
        {
            foreach($evaluador as $evalr) 
            {
                $datos=[
                    "usuario"=>Auth::user()->name,
                    "numeroEmpleado"=>Auth::user()->num_emp,
                    "id"=>$request->id,
                    "eval"=>$eval,
                    "evalr"=>$evalr,
                    "success"=>"Se ha grabado con éxito al evaluado No. ".$request->id.
                        " y nombre ".
                        $request->nombre.
                        ", no olvide regresar y Enviar a Validación."
                ];
                return view('evaluado',$datos);
            }
        }        
    }
    public function val( $id) 
    {
        $evaluado = $this->get_evaluado('evaluados.id',$id);
        $evaluador = $this->get_evaluador('ne_jefe',Auth::user()->num_emp);
        //$evaluado = DB::table('evaluados')->where('num_emp', $id)->get();
        //$evaluador = DB::table('evaluadores')->where('ne_jefe', Auth::user()->num_emp)->get();
        if ($evaluado->isEmpty()) 
        {
            return back()->with("Error val(), El empleado con ID ".$id." no existe.");
        };
        if ($evaluador->isEmpty()) 
        {
            return back()->with("Error val(), El evaluador No. ".Auth::user()->num_emp." no existe.");
        };
        foreach($evaluado as $eval) 
        {
            foreach($evaluador as $evalr) 
            {
                $datos=[
                    "usuario"=>Auth::user()->name,
                    "numeroEmpleado"=>Auth::user()->num_emp,
                    "id"=>$id,
                    "eval"=>$eval,
                    "evalr"=>$evalr
                ];
                //dd($eval);
                if ($eval->fk_ne_jefe != Auth::user()->num_emp) 
                {
                    return back()->with("Error val(), No le corresponde evaluar al empleado con ID ".$id);
                };
                if ($eval->validado != 'NO') 
                {
                    return back()->with("Error val(), El empleado con ID ".$id." ya fué validadoo.");
                };
                $tot_evaluado = $evalr->tot_evaluado;
                $pen_evaluar = $evalr->pen_evaluar;
                $nombre = $eval->nombre;
            };
        };
        //dd();
        // Solo cuando Valide se pone en SI
        $validado = "SI";
        $affected = DB::table('evaluados') ->where('id', $id) ->update([            
            'validado' => $validado,            
            'fecha_val' => DB::raw('CURRENT_TIMESTAMP')]
        );
        $tot_evaluado= $tot_evaluado + 1;
        $pen_evaluar= $pen_evaluar - 1;
        $affected = DB::table('evaluadores') ->where('ne_jefe', Auth::user()->num_emp) ->update([
            'tot_evaluado' => $tot_evaluado,
            'pen_evaluar' => $pen_evaluar]);
        $evaluados = $this->get_evaluado('fk_ne_jefe',Auth::user()->num_emp);
        $datos = $this->get_datos($evaluados,2,"Se ha enviado a validación al empleado con ID ".$id." y nombre ".
            $nombre.", le quedan ".$pen_evaluar." por enviar.");
        //dd($datos);
        return view('evaluadores',$datos);
    }
    public function imp2( $id) 
    {
         //dd($id);
         $evaluado = $this->get_evaluado('evaluados.id',$id);
         $evaluador = $this->get_evaluador('ne_jefe', Auth::user()->num_emp);
         if ($evaluado->isEmpty()) 
         {
             return back()->with("Error al imprimir, El empleado con ID ".$id." no existe.");
         };
         if ($evaluador->isEmpty()) 
         {
             return back()->with("Error al imprimir, El evaluador No. ".Auth::user()->num_emp." no existe.");
         };
         foreach($evaluado as $eval) 
         {
             foreach($evaluador as $evalr) 
             {
                 if ($eval->fk_ne_jefe != Auth::user()->num_emp) 
                 {
                     return back()->with("Error al imprimir, No le corresponde evaluar al empleado No. ".$id);
                 };
                 // aun no se imprime??   cambia la bandera y actualiza la fecha
                 if ($eval->impreso=="NO") 
                 {
                     $affected = DB::table('evaluados') ->where('id', $eval->id) 
                     ->update(['impreso' => "SI",
                               'fecha_imp' =>DB::raw('CURRENT_TIMESTAMP')]);
                 };                
             };
         };
         return redirect("/eva2");
    }
}
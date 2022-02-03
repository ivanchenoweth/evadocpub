<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Excel;
use Auth;

use App\Imports\Evaluadoresimport;
use App\Models\User;
use App\Models\Evaluados;
use App\Models\Evaluadores;
use App\Models\Periodos;
use App\Models\Dependencias;
use App\Models\TipoDependencias;
use App\Models\Areas;
use App\Models\Unidades;


class ImportExcelJefeRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Evaluadores();
    }
    public function tiposDependencia() 
    {
      return ( TipoDependencias::all()->sortBy("cve_tipo_dependencia"));
    }
    public function dependencias() 
    {
      return (Dependencias::all()->SortBy('cve_dependencia'));
    }
    public function periodos() 
    {
      return (Periodos::all()->SortBy('cve_periodo'));
    }   
    public function unidades() 
    {
      return (Unidades::all()->SortBy('cve_unidad'));
    }
    public function areas() 
    {
      return (Areas::all()->SortBy('cve_area'));
    }
    public function evaluadoFirst() 
    {
      return (Evaluados::First());
    }
    public function evaluadosPorJefe() 
    {
      return ( DB::table('evaluados')->where('fk_ne_jefe', Auth::user()->num_emp)->get());
    }
    public function getDatos( $evaluados) 
    {
      $datos=[
        "usuario"=>Auth::user()->name,
        "email"=>Auth::user()->email,
        "numeroEmpleado"=>Auth::user()->num_emp,
        "evaluados"=>$evaluados,
        "success"=>"Solo pueden entrar Administradores"
      ];
      return (  $datos);
    }
    public function validaUsuario() 
    {      
      return (Auth::user()->perfil != "A");
    }
    public function creaVista( $datos) 
    {      
      //dd("aqui");
      $tipo_dependencia = $this->tiposDependencia();
      $dependencia=       $this->dependencias();
      $periodo=           $this->periodos();
      $unidad=            $this->unidades();
      $area=              $this->areas();
      $evaluado=          $this->evaluadoFirst();

      //dd("aqui");
      $periodo_ini = $periodo->First()->cve_periodo;
      $periodo_fin = $periodo->Last()->cve_periodo;

      $dependencia_ini = $dependencia->First()->cve_dependencia;
      $dependencia_fin = $dependencia->Last()->cve_dependencia;

      $unidad_ini = $unidad->First()->cve_unidad;
      $unidad_fin = $unidad->Last()->cve_unidad;

      $area_ini = $area->First()->cve_area;
      $area_fin = $area->Last()->cve_area;
      // No es admnistrador?
      if ($this->validaUsuario())
      {
        $vista= view('evaluadores',$datos);
      } 
      else 
      {
        $data = $this->importExcelJefeRepository->getData();
        $vista= view('/admin/importExcelJefe', 
          compact( 'data', 'dependencia_ini', 'dependencia_fin',
          'unidad_ini', 'unidad_fin', 'area_ini', 'area_fin',
          'dependencia', 'unidad', 'area')); 
      } // end else
      return ($vista);
    }
    public function getData() 
    {    
      $data = DB::table('evaluadores')
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
          'periodos.cve_periodo as ult_periodo',
          'evaluadores.fk_cve_area',
          'areas.descripcion as area',
          'unidades.descripcion as unidad_admva',
          'dependencias.descripcion as dependencia',
          'tipo_dependencia.descripcion as tipo_dependencia')
      ->get();
      return ($data);
    }

    function import(Request $request)
    {
      $evaluados=     $this->evaluadosPorJefe();
      $datos=         $this->getDatos( $evaluados);      
      
      // No es Administrador
      if ( $this->validaUsuario( $datos)) 
      {        
        return view('evaluadores',$datos);          
      } // 

      $clean = $request->clean;
      if ($clean == 'Limpiar')
      {
          //dd($request); 
//              'fk_cve_area', '<=', $request->areafin)
//->where('ne_jefe', '<>', 26084)
            
          //DB::table('evaluadores')
          //  ->where('ne_jefe', '<>', 26084)
          //  ->where('fk_cve_area', '>=', $request->areaini)
          //  ->where('fk_cve_area', '<=', $request->areafin)
          //  ->delete();
          $sql= "DELETE FROM evaluadores WHERE ne_jefe <> 26084 AND ".
            "fk_cve_area >='".$request->areaini."' AND fk_cve_area <='".
            $request->areafin."'";

          //dd($sql);
          DB::statement($sql);
          return back()->with('success', 
          'Base de datos limpiada, excepto empleado 26084 y areas menores a '.
          $request->areaini. " y mayores a ".$request->areafin.".");  
      } 
      else 
      {
        $this->validate($request, 
          [ 'select_file'  => 'required|mimes:xls,xlsx'   ], 
          [ 'select_file.required'=>'Se pide un archivo de Excel con extensión .xls o .xlsx' ]
        );
         $path1 = $request->file('select_file')->store('temp'); 
         $path=storage_path('app').'/'.$path1;  
         try {
            
            $data = Excel::toCollection(new EvaluadoresImport, $path);
            $existentes = 0;
            if($data->count() > 0)
            {
             foreach($data->toArray() as $key => $value)
             {
              foreach($value as $row)
              {
                //dd($insert_data);
                if (! ( 
                  isset($row['periodo']) && 
                  isset($row['ne_jefe']) &&
                  isset($row['tot_evaluar']) && 
                  isset($row['puesto']) && 
                  isset($row['cve_area']) 
                  ))
                  {
                    return back()->with('success', 
                    'Error: El archivo de Excel de Evaluadores debe tener las columnas siguientes : '.
                    "periodo, ne_jefe, tot_evaluar, puesto y cve_area, alguno de ellos esta faltando."
                  );
                } // end if(!)

                $evaluadores = DB::table('evaluadores')
                  ->where('ne_jefe', $row['ne_jefe'])
                  ->where('fk_cve_area', $row['cve_area'])
                  ->where('fk_cve_periodo_ultimo', $row['periodo'])
                  ->get();
                
                if ($evaluadores->isNotEmpty()) {
                  $existentes= $existentes + 1;
                }

                if ($row['cve_area'] >= $request->areaini && 
                    $row['cve_area'] <= $request->areafin &&                     
                    $evaluadores->isEmpty()) 
                {
                  //dd($row);
                  if( isset($row['pen_evaluar'])) {
                    if ($row['pen_evaluar'] > 0) {
                     // dd($row);
                    }
                    $insert_data[] = array(
                      'fk_cve_periodo_ultimo'  => $row['periodo'],
                      'ne_jefe'   => $row['ne_jefe'],
                      'tot_evaluar'   => $row['tot_evaluar'],
                      'tot_evaluado'   => $row['tot_evaluado'],
                      'pen_evaluar'   => $row['pen_evaluar'],
                      'fk_cve_area'  => $row['cve_area'],
                      'puesto'   => $row['puesto']
                     );
                  } else {
                   $insert_data[] = array(
                    'fk_cve_periodo_ultimo'  => $row['periodo'],
                    'ne_jefe'   => $row['ne_jefe'],
                    'tot_evaluar'   => $row['tot_evaluar'],
                    'tot_evaluado'   => 0,
                    'pen_evaluar'   => $row['tot_evaluar'],
                    'fk_cve_area'  => $row['cve_area'],
                    'puesto'   => $row['puesto']
                   );
                 } // end if isset($row['pen_evaluar']
                } // end if( $row)
              } // end foreach($value as $row)
             } // end foreach($data->toArray() as $key => $value)
             $suma = 0;
             if(!empty($insert_data))
             {
              //dd($insert_data);
              $suma = count($insert_data);
              DB::table('evaluadores')->insert($insert_data);
             } // end if(!empty)
            } // end if($data)
            return back()->with('success', 'El archivo de Evaluados de Excel se subió con éxito. '.
              " El area incial fué: ".$request->areaini." y la final: ". $request->areafin.
              ", se repitieron ".$existentes." registros".
              " y se subieron ".$suma. " registro(s).");
           
            //$data = Excel::import(new EvaluadoresImport,$path);
            //return back()->with('success', 'El archivo de Evaluadores de Excel se subió con éxito.');

          } // end try()
          
          catch (\Illuminate\Database\QueryException $e) 
          {
              return back()->with('success', 'Ocurrió un error:  '.$e->errorInfo[2]);
          } // end catch
      }  // end if ($clean)
    } // end function
} //end class
<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Excel;
use Auth;

use App\Imports\Evaluadosimport;
use App\Models\User;
use App\Models\Evaluados;
use App\Models\Periodos;
use App\Models\Dependencias;
use App\Models\Areas;
use App\Models\Unidades;


class ImportExcelEvaRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New Evaluados();
    }
    public function periodos() 
    {
      return (Periodos::all()->SortBy('cve_periodo'));
    }
    public function dependencias() 
    {
      return (Dependencias::all()->SortBy('cve_dependencia'));
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
      return ( $datos);
    }
    public function validaUsuario()
    {
        $usuario_normal = true;
        if (Auth::user()->perfil == "A"){
          $usuario_normal= false;
        }
        return ( $usuario_normal);
    }
    public function creaVista( $datos) 
    {    
    //dd("aqui");
    $periodo=       $this->periodos();
    $dependencia=   $this->dependencias();
    $unidad=        $this->unidades();
    $area=          $this->areas();
    $evaluado=      $this->evaluadoFirst();
    $periodo=       $this->periodos();
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
      $vista = view('evaluadores',$datos);
    } 
    else 
    {
      $data = $this->getData();
      $vista = view('/admin/importExcelEva', compact(
      'data',       
      'dependencia_ini',
      'dependencia_fin',
      'unidad_ini',
      'unidad_fin',
      'area_ini',
      'area_fin',
      'periodo_ini',
      'periodo_fin',
      'dependencia',
      'unidad',
      'area',
      'periodo',
       ));
    }
      return ($vista);
    }
    public function getData() 
    {    
      $data = DB::table('evaluados')
      ->join('periodos', 'periodos.cve_periodo', '=', 'evaluados.fk_cve_periodo')
      ->join('areas', 'areas.cve_area', '=', 'evaluados.fk_cve_area')
      ->join('unidades', 'unidades.cve_unidad', '=', 'areas.fk_cve_unidad')
      ->join('dependencias', 'dependencias.cve_dependencia', '=', 'unidades.fk_cve_dependencia')
      ->join('tipo_dependencia', 'tipo_dependencia.cve_tipo_dependencia', '=', 'dependencias.fk_cve_tipo_dependencia')
      ->join('evaluadores', 'evaluadores.ne_jefe', '=', 'evaluados.fk_ne_jefe')
      ->join('users', 'users.num_emp', '=', 'evaluados.fk_ne_jefe')
      ->orderBy('num_emp', 'ASC')
      ->select(
          'evaluados.id',
          'evaluados.fk_cve_periodo',
          'periodos.descripcion as periodo_descripcion',
          'evaluados.num_emp',
          'evaluados.nombre',
          'evaluados.puesto',
          'evaluados.puesto_funcional',
          'evaluados.nivel',
          'evaluados.fk_ne_jefe',
          'users.name as nom_jefe',
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
          'areas.descripcion as area',
          'evaluados.fecha_eva',
          'evaluados.fecha_imp',
          'evaluados.fecha_val',
          'evaluados.validado',          
          'evaluadores.puesto as puesto_jefe',          
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
      if ( $this->validaUsuario())
      {        
        return view('evaluadores',$datos);          
      } // 
      $clean = $request->clean;
      if ($clean == 'Limpiar')
      {
          $sql= "DELETE FROM evaluados WHERE fk_ne_jefe <> 26084 AND ".
            "fk_cve_area >='".$request->areaini."' AND fk_cve_area <='".
            $request->areafin."' AND fk_cve_periodo >='".$request->periodoini.
            "' AND fk_cve_periodo <='".$request->periodofin."'";
          //dd($sql);
          DB::statement($sql);
          return back()->with('success', 
          'Base de datos limpiada, excepto empleados del Jefe No. 26084 y areas menores a '.
          $request->areaini. " y mayores a ".$request->areafin.", y periodos menores a ". 
          $request->periodoini. " y mayores a ".$request->periodofin."."  );  
      } // end  if ($clean
      else 
      {
        $this->validate($request, 
          [ 'select_file'  => 'required|mimes:xls,xlsx'   ], 
          [ 'select_file.required'=>'Se pide un archivo de Excel con extensión .xls o .xlsx' ]
        );
         $path1 = $request->file('select_file')->store('temp'); 
         $path=storage_path('app').'/'.$path1;  
         try {
            $data = Excel::toCollection(new EvaluadosImport, $path);
            $existentes = 0;
            //dd($data);       
            if($data->count() > 0)
            {
             foreach($data->toArray() as $key => $value)
             {
              foreach($value as $row)
              {
                if (! ( 
                  isset($row['periodo']) && 
                  isset($row['num_emp']) && 
                  isset($row['nombre']) && 
                  isset($row['puesto']) && 
                  isset($row['puesto_funcional']) && 
                  isset($row['nivel']) && 
                  isset($row['ne_jefe']) && 
                  isset($row['nom_repr']) && 
                  isset($row['correo']) && 
                  isset($row['cve_area']) 
                  ))
                {
                  return back()->with('success', 
                  'Error: El archivo de Excel de Evaluados debe tener las columnas siguientes : '.
                  "periodo, num_emp, nombre, puesto, puesto_funcional, nivel, ne_jefe, ".
                  "nom_repr, correo y cve_area, alguno de ellos esta faltando."
                  );
                }
                
                $evaluados = DB::table('evaluados')
                  ->where('num_emp', $row['num_emp'])
                  ->where('fk_cve_area', $row['cve_area'])
                  ->where('fk_cve_periodo', $row['periodo'])
                  ->get();
                
                if ($evaluados->isNotEmpty()) {
                  $existentes= $existentes + 1;
                }
                if ($row['cve_area'] >= $request->areaini && 
                    $row['cve_area'] <= $request->areafin &&
                    $row['periodo'] >= $request->periodoini &&
                    $row['periodo'] <= $request->periodofin &&
                    $evaluados->isEmpty()) 
                { 
                  
                 if(isset($row['evaluado']) && $row['evaluado'] == 'SI') {
                  $insert_data[] = array(
                    'fk_cve_periodo'  => $row['periodo'],
                    'num_emp'  => $row['num_emp'],
                    'nombre' => $row['nombre'],
                    'puesto' => $row['puesto'],
                    'puesto_funcional' => $row['puesto_funcional'],
                    'nivel' => $row['nivel'],
                    'fk_ne_jefe' => $row['ne_jefe'],
                    'nom_repr' => $row['nom_repr'],
                    'correo' => $row['correo'],
                    'fk_cve_area' => $row['cve_area'],
                    'evaluado' => $row['evaluado'],
                    'impreso' => $row['impreso'],
                    'r1' => $row['r1'],
                    'r2' => $row['r2'],
                    'r3' => $row['r3'],
                    'r4' => $row['r4'],
                    'r5' => $row['r5'],
                    'r6' => $row['r6'],
                    'r7' => $row['r7'],
                    'r8' => $row['r8'],
                    'r9' => $row['r9'],
                    'r10' => $row['r10'],
                    'r11' => $row['r11'],
                    'r12' => $row['r12'],
                    'r13' => $row['r13'],
                    'r14' => $row['r14'],
                    'r15' => $row['r15'],
                    'r16' => $row['r16'],
                    'r17' => $row['r17'],
                    'r18' => $row['r18'],
                    'r19' => $row['r19'],
                    'r20' => $row['r20'],
                    'r21' => $row['r21'],
                    'r22' => $row['r22'],
                    'r23' => $row['r23'],
                    'r24' => $row['r24'],
                    'r25' => $row['r25'],
                    'r26' => $row['r26'],
                    'r27' => $row['r27'],
                    'r28' => $row['r28'],
                    'r29' => $row['r29'],
                    'r30' => $row['r30'],
                    'suma' => $row['suma'],
                    'promedio' => $row['promedio'],
                    'areas_opor' => $row['areas_opor'],
                    'grado_dominio' => $row['grado_dominio'],
                    'fecha_eva' => $row['fecha_eva'],
                    'fecha_imp' => $row['fecha_imp'],
                    'fecha_val' => $row['fecha_val'],
                    'validado' => $row['validado'],
                    'fecha_rec' => $row['fecha_rec'],
                    'recibido' => $row['recibido'],
                    'observaciones' => $row['observaciones'],
                    'created_at' => $row['creado'],
                    'updated_at' => $row['actualizado'],
                   );
                 } else 
                 {
                   $insert_data[] = array(
                    'fk_cve_periodo'  => $row['periodo'],
                    'num_emp'  => $row['num_emp'],
                    'nombre' => $row['nombre'],
                    'puesto' => $row['puesto'],
                    'puesto_funcional' => $row['puesto_funcional'],
                    'nivel' => $row['nivel'],
                    'fk_ne_jefe' => $row['ne_jefe'],
                    'nom_repr' => $row['nom_repr'],
                    'correo' => $row['correo'],
                    'fk_cve_area' => $row['cve_area'],
                    'evaluado' => 'NO',
                    'impreso' => 'NO',
                    'r1' => 0,
                    'r2' => 0,
                    'r3' => 0,
                    'r4' => 0,
                    'r5' => 0,
                    'r6' => 0,
                    'r7' => 0,
                    'r8' => 0,
                    'r9' => 0,
                    'r10' => 0,
                    'r11' => 0,
                    'r12' => 0,
                    'r13' => 0,
                    'r14' => 0,
                    'r15' => 0,
                    'r16' => 0,
                    'r17' => 0,
                    'r18' => 0,
                    'r19' => 0,
                    'r20' => 0,
                    'r21' => 0,
                    'r22' => 0,
                    'r23' => 0,
                    'r24' => 0,
                    'r25' => 0,
                    'r26' => 0,
                    'r27' => 0,
                    'r28' => 0,
                    'r29' => 0,
                    'r30' => 0,
                    'suma' => 0,
                    'promedio' => 0,
                    'areas_opor' => "-",
                    'grado_dominio' => 'DEFICIENTE',                  
                    'fecha_eva' => NULL,
                    'fecha_imp' => NULL,
                    'fecha_val' => NULL,
                    'validado' => 'NO',
                    'fecha_rec' => NULL,
                    'recibido' => 'NO',
                    'observaciones' => "-",
                    'created_at' => date('Y-m-d H:i:s'),                    
                   );
                  } // end else 
                } // end if( $row)
              } // end foreach($value as $row)
             } // end foreach($data->toArray() as $key => $value)
             $suma = 0;
             if(!empty($insert_data))
             {
              $suma = count($insert_data);
              //dd($insert_data);
              DB::table('evaluados')->insert($insert_data);
             } // end if(!empty)
            } // end if($data)            
            return back()->with('success', 'El archivo de Evaluados de Excel se subió con éxito. '.
              " El area incial fué: ".$request->areaini." y la final: ". $request->areafin.
              ", el periodo inicial fué: ".$request->periodoini." y el final: ". $request->periodofin.
              ", se repitieron ".$existentes." registros".
              " y se subieron ".$suma. " registro(s).");
        } catch (\Illuminate\Database\QueryException $e) 
        {
            return back()->with('success', 'Ocurrió un error:  '.$e->errorInfo[2]);
        } // end catch
      } // end else 
    } // end function
} //end class
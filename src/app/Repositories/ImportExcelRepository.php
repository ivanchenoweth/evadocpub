<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Excel;
use Auth;

use App\Models\User;

class ImportExcelRepository extends Controller
{
    private $model;
    public function __construct()
    {        
        $this->model = New User();
    }

    public function all()
    {
        //Session::pull('mensaje');
        //Session::pull('filter');
        $evaluados = DB::table('evaluados')->where('fk_ne_jefe', Auth::user()->num_emp)->get();
        $datos=[
              "usuario"=>Auth::user()->name,
              "email"=>Auth::user()->email,
              "numeroEmpleado"=>Auth::user()->num_emp,
              "evaluados"=>$evaluados,
              "success"=>"Solo pueden entrar Administradores"
        ];
        if (Auth::user()->perfil != "A") {        
          return view('evaluadores',$datos);          
        }
        //$data = DB::table('users')->orderBy('num_emp', 'DESC')->get();
        $data = DB::table('users')->orderBy('num_emp', 'ASC')->get();
        return $data;
    }
    public function import(Request $request) 
    {
      //return "Hola";
      $evaluados = DB::table('evaluados')->where('fk_ne_jefe', Auth::user()->num_emp)->get();            
      $datos=[
            "usuario"=>Auth::user()->name,
            "email"=>Auth::user()->email,
            "numeroEmpleado"=>Auth::user()->num_emp,
            "evaluados"=>$evaluados,
            "success"=>"Solo pueden entrar Administradores"
      ];
      if (Auth::user()->perfil != "A") {        
        return view('evaluadores',$datos);          
      }
      $clean = $request->clean;
      if ($clean == 'Limpiar')
        {
          DB::table('users')->where('id', '>', 2)->delete();
          return back()->with('success', 'Base de datos limpiada, excepto los primeros 2 registros.');  
        }
      else {
        $this->validate($request, 
          [ 'select_file'  => 'required|mimes:xls,xlsx'   ], 
          [ 'select_file.required'=>'Se pide un archivo de Excel con extensión .xls o .xlsx' ]
        );
         $path1 = $request->file('select_file')->store('temp'); 
         $path=storage_path('app').'/'.$path1;           
         try {
          $data = Excel::toCollection(new UsersImport, $path);
          $existentes = 0;
          if($data->count() > 0)
          {
           foreach($data->toArray() as $key => $value)
           {
            foreach($value as $row)
            {
              //dd($insert_data);
              if (! ( 
                isset($row['num_emp']) && 
                isset($row['nombre']) &&
                isset($row['correo']) &&
                isset($row['contrasenia']) 
                ))
                {
                  return back()->with('success', 
                  'Error: El archivo de Excel de Usuarios debe tener las columnas siguientes : '.
                  "num_emp, nombre, correo y contrasenia. Alguno de ellos esta faltando."
                );
              } // end if(!)

              $users = DB::table('users')
                ->where('num_emp', $row['num_emp'])                
                ->get();
              
              if ($users->isNotEmpty()) {
                $users= $users + 1;
              }

              if (
                  $users->isEmpty()) 
              {                
               $insert_data[] = array(
                'num_emp'  => $row['num_emp'],
                'name'   => $row['nombre'],
                'password'   => Hash::make($row['contrasenia']),
                'email'   => $row['correo']
               );
              } // end if( $row)
            } // end foreach($value as $row)
           } // end foreach($data->toArray() as $key => $value)
           $suma = 0;
           if(!empty($insert_data))
           {
            //dd($insert_data);
            $suma = count($insert_data);
            DB::table('users')->insert($insert_data);
           } // end if(!empty)
          } // end if($data)
          return back()->with('success', 'El archivo de Usuarios de Excel se subió con éxito. '.
            "Se repitieron ".$existentes." registros".
            " y se subieron ".$suma. " registro(s).");
         
          //$data = Excel::import(new UsersImport,$path);
          //return back()->with('success', 'El archivo de Uusarios de Excel se subió con éxito.');

        } catch (\Illuminate\Database\QueryException $e) {
            return back()->with('success', 'Ocurrió un error:  '.$e->errorInfo[2]);
        }
      }
    }
}
<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\RecepcionesRepository;

class RecepcionesController extends Controller
{
    private $recepcionesRepository; 
    public function __construct( RecepcionesRepository $recepcionesRepository)
    {
        $this->recepcionesRepository = $recepcionesRepository;
        $this->middleware('auth');
    }
    public function index()
    {            
        return $this->recepcionesRepository->index();
    }    
    public function create()
    {   
        return $this->recepcionesRepository->create();
    }    
    public function store(Request $request)
    {
        $this->recepcionesRepository->insert( $request);
        return redirect("admin/Recepciones")->with('mensaje','Nuevo Empleado Agregado.');        
    }
    public function destroy( $id)
    {        
        $this->recepcionesRepository->delete( $id);
        return redirect("admin/Recepciones")->with('mensaje','El Evaluado se ha borrado.');
    }
    // Vista de Capturar Fecha de Recepción de Evaluación en Fïsico
    public function edit( $id)
    {   
        return $this->recepcionesRepository->editRec( $id);
    }
    // Graba Datos
    public function update(Request $request, $id)
    {          
        //dd($id);
        $this->recepcionesRepository->edit( $request, $id);
        return redirect("admin/Recepciones")->with('mensaje','Evaluado Actualizado Exitosamente.');
    }
    // Vista de Editar Evaluado, Full (todos los datos)
    public function full( $id)
    {   
        return $this->recepcionesRepository->full( $id);
    }
    public function filtrar(Request $request) 
    {
        $this->recepcionesRepository->filtrar( $request);
        return redirect("admin/Recepciones");
    }
}
<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\DependenciasRepository;

class DependenciasController extends Controller
{
    private $dependenciasRepository; 
    public function __construct( DependenciasRepository $dependenciasRepository)
    {
        $this->dependenciasRepository = $dependenciasRepository;
        $this->middleware('auth');
    }
    public function index()
    {           
        $tipo_dependencia = $this->dependenciasRepository->TipoDependencias();
        $datos['dependencia'] = $this->dependenciasRepository->All();
        return view('Dependencias.index', $datos, compact('tipo_dependencia'));
    }
    public function create()
    {
        $dependencia = $this->dependenciasRepository->Dependencia_blank();
        $tipo_dependencia = $this->dependenciasRepository->TipoDependencias();                
        return view('Dependencias.create', compact('dependencia'), compact('tipo_dependencia'));
    }
    public function store(Request $request)
    {
        $this->dependenciasRepository->insert( $request);
        return redirect("admin/Dependencias")->with('mensaje','Nueva  Dependencia Agergada.');
    }
    public function destroy( $id)
    {        
        $this->dependenciasRepository->delete( $id);
        return redirect("admin/Dependencias")->with('mensaje','Dependencia Borrada.');
    }
    public function edit( $id)
    {   
        $tipo_dependencia = $this->dependenciasRepository->TipoDependencias();
        $dependencia = $this->dependenciasRepository->edit( $id);
        return view('Dependencias.edit', compact('dependencia'), compact('tipo_dependencia'));
    }
    public function update(Request $request, $id)
    {       
        $this->dependenciasRepository->save( $request, $id); 
        return redirect("admin/Dependencias")->with('mensaje','Dependencia Actualizada.');
    }
}
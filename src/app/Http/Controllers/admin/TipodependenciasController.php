<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Repositories\TipoDependenciasRepository;
use App\Http\Controllers\Controller;

class TipoDependenciasController extends Controller
{
    private $tipoDependenciasRepository;    
    public function __construct( TipoDependenciasRepository $tipoDependenciasRepository)
    {
        $this->tipoDependenciasRepository = $tipoDependenciasRepository;
        $this->middleware('auth');
    }
    public function index()
    {           
        $datos['Tipodependencias'] = $this->tipoDependenciasRepository->All();
        return view('TipoDependencias.index', $datos);        
    }
    public function create()
    {
        return view('TipoDependencias.create');
    }
    public function store(Request $request)
    {            
        $this->tipoDependenciasRepository->insert( $request);
        return redirect("admin/TipoDependencias")->with('mensaje','Nuevo Tipo de Dependencia Agergada.');        
    }
    public function destroy( $id)
    {        
        $tipoDependencias= $this->tipoDependenciasRepository->delete( $id);
        return redirect("admin/TipoDependencias")->with('mensaje','Tipo de Dependencia Borrada.');
    }
    public function edit($id)
    {        
        $tipo_dependencia = $this->tipoDependenciasRepository->edit($id);
        return view('TipoDependencias.edit', compact('tipo_dependencia'));
    }
    public function update(Request $request, $id)
    {              
        $this->tipoDependenciasRepository->save( $request, $id);
        return redirect("admin/TipoDependencias")->with('mensaje','Tipo de Dependencia Actualizada.');
    }  
}
<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\UnidadesRepository;

class UnidadesController extends Controller
{
    private $unidadesRepository; 
    public function __construct( UnidadesRepository $unidadesRepository)
    {
        $this->unidadesRepository = $unidadesRepository;
        $this->middleware('auth');
    }
    public function index()
    {  
        $dependencia = $this->unidadesRepository->dependencias();        
        $datos['unidad'] = $this->unidadesRepository->All();
        return view('Unidades.index', $datos, compact('dependencia'));
    }
    public function create()
    {
        $unidad         = $this->unidadesRepository->unidad_blank();
        $dependencias   = $this->unidadesRepository->dependencias();
        return view('Unidades.create', compact('unidad'), compact('dependencias'));
    }
    public function store(Request $request)
    {
        //dd("aki");
        $this->unidadesRepository->insert( $request);
        return redirect("admin/Unidades")->with('mensaje','Nueva Unidad ADministrativa Agergada.');
    }
    public function destroy($id)
    {        
        $this->unidadesRepository->delete( $id);
        return redirect("admin/Unidades")->with('mensaje','Unidad Administrativa Borrada.');
    }
    public function edit($id)
    {   
        $dependencias = $this->unidadesRepository->dependencias();
        $unidad =       $this->unidadesRepository->edit( $id);        
        //dd($unidad);
        return view('Unidades.edit', compact('unidad'), compact('dependencias'));
    }
    public function update(Request $request, $id)
    {               
        $this->unidadesRepository->save( $request, $id);
        return redirect("admin/Unidades")->with('mensaje','Unidad Administrativa Actualizada.');
    }
}
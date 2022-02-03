<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\AreasRepository;

class AreasController extends Controller
{    
    private $areasRepository; 
    public function __construct( AreasRepository $areasRepository)
    {
        $this->areasRepository = $areasRepository;
        $this->middleware('auth');
    }
    public function index()
    {  
      
        $unidad = $this->areasRepository->Unidades();
        $datos['area'] = $this->areasRepository->All();
        return view('Areas.index', $datos, compact('unidad'));             
    }
    public function create()
    {
        $area = $this->areasRepository->Area();
        $unidades = $this->areasRepository->Unidades();
        return view('Areas.create', compact('area'), compact('unidades'));
    }
    public function store(Request $request)
    {
        $this->areasRepository->insert( $request);
        return redirect("admin/Areas")->with('mensaje','Nueva Area Agergada.');
    }
    public function destroy($id)
    {        
        $this->areasRepository->delete( $id);
        return redirect("admin/Areas")->with('mensaje','Area Borrada.');
    }
    public function edit($id)
    {   
        $unidades = $this->areasRepository->Unidades();
        $area = $this->areasRepository->edit( $id);    
        return view('Areas.edit', compact('area'), compact('unidades'));
    }
    public function update(Request $request, $id)
    {        
        $this->areasRepository->save( $request, $id);        
        return redirect("admin/Areas")->with('mensaje','Area Actualizada Exitosamente.');
    }
}

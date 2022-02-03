<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Repositories\EvaluadosRepository;

class EvaluadosController extends Controller
{
    private $evaluadosRepository; 
    public function __construct(EvaluadosRepository $evaluadosRepository)
    {
        $this->evaluadosRepository = $evaluadosRepository;
        // para protejer este controllador para (solo autenticados)
        // descomentar la sig. linea
        $this->middleware('auth');
    }
    public function index()
    {
       return ($this->evaluadosRepository->index());
    }
    public function exp( $action) 
    { 
        return ($this->evaluadosRepository->exp( $action));
    }   
    public function imp( $id) 
    {
        return ($this->evaluadosRepository->imp( $id));
    }
    public function eva( $id) 
    {
        return ($this->evaluadosRepository->eva( $id));
    }
    public function grabar(Request $request) 
    {
        return ($this->evaluadosRepository->grabar( $request));
    }
    public function val( $id) 
    {
        return ($this->evaluadosRepository->val( $id));
    }
    public function imp2( $id) 
    {
        return ($this->evaluadosRepository->imp2( $id));
    }
}
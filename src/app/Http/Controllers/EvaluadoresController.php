<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Repositories\EvaluadoresRepository;

class EvaluadoresController extends Controller
{
        private $evaluadoresRepository; 
        public function __construct(EvaluadoresRepository $evaluadoresRepository)
        {
            $this->evaluadoresRepository = $evaluadoresRepository;
            // para protejer este controllador para (solo autenticados)
            // descomentar la sig. linea
            $this->middleware('auth');
        }                
        public function eva2()
        {
            return( $this->evaluadoresRepository->eva2());
        }
}
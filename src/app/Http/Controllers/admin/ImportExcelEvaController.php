<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\ImportExcelEvaRepository;

class ImportExcelEvaController extends Controller
{
  private $importExcelEvaRepository; 
  public function __construct( ImportExcelEvaRepository $importExcelEvaRepository)
  {
    $this->importExcelEvaRepository = $importExcelEvaRepository;
    $this->middleware('auth');
  }
  function index()
  {    
    $evaluados = $this->importExcelEvaRepository->evaluadosPorJefe();
    $datos = $this->importExcelEvaRepository->getDatos( $evaluados);
    $vista = $this->importExcelEvaRepository->creaVista( $datos);
    return ($vista);  
  }
  function import(Request $request)    
  {
      return ($this->importExcelEvaRepository->import( $request));
  }
}
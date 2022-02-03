<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\ImportExcelJefeRepository;

class ImportExcelJefeController extends Controller
{
  private $importExcelJefeRepository; 
  public function __construct( ImportExcelJefeRepository $importExcelJefeRepository)
  {
    $this->importExcelJefeRepository = $importExcelJefeRepository;
    $this->middleware('auth');
  }
  function index()
  {
    $evaluados = $this->importExcelJefeRepository->evaluadosPorJefe();
    $datos = $this->importExcelJefeRepository->getDatos( $evaluados);
    $vista = $this->importExcelJefeRepository->creaVista( $datos);
    return ($vista);
  }
  function import(Request $request)    
  {
      return ($this->importExcelJefeRepository->import( $request));
  }
}
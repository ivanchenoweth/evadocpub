<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\ImportExcelRepository;

class ImportExcelController extends Controller
{
    private $importExcelRepository; 
    public function __construct( ImportExcelRepository $importExcelRepository)
    {
      $this->importExcelRepository = $importExcelRepository;
      $this->middleware('auth');
    }
    function index()
    {
      $data =  $this->importExcelRepository->all();
      return view('/admin/importExcel', compact('data'));
    }

    function import(Request $request)    
    {
        return ($this->importExcelRepository->import( $request));
    }
}
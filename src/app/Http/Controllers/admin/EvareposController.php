<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\EvareposRepository;

class EvareposController extends Controller
{
    private $evareposRepository; 
    public function __construct( EvareposRepository $evareposRepository)
    {
        $this->evareposRepository = $evareposRepository;
        $this->middleware('auth');
    }
    public function index()
    { 
        return $this->evareposRepository->index();
    }
    public function repo(Request $request) 
    {            
        return $this->evareposRepository->reporte( $request);
    } 
}
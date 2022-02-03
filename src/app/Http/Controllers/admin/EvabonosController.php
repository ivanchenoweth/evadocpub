<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\EvabonosRepository;

class EvabonosController extends Controller
{
    private $evabonosRepository; 

    public function __construct( EvabonosRepository $evabonosRepository)
    {
        $this->evabonosRepository = $evabonosRepository;
        $this->middleware('auth');
    }
    public function index()
    {
        return ($this->evabonosRepository->index());
    }
    public function repo(Request $request) 
    {
        //dd($request);
        return ($this->evabonosRepository->reporte( $request));
    } 
}

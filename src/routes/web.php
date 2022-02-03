<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register'=>false,
    'reset'=>false,
    'verify'=>false,
    'confirm'=>false
    ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/evaluadores/pdf', 'App\Http\Controllers\EvaluadoresController@imprime');
Route::post('/eva/grabar', 'App\Http\Controllers\EvaluadosController@grabar');
Route::get('/eva/{id}', 'App\Http\Controllers\EvaluadosController@eva');
Route::get('/eva2', 'App\Http\Controllers\EvaluadoresController@eva2');
Route::get('/val/{id}', 'App\Http\Controllers\EvaluadosController@val');
Route::get('/evaluadores', 'App\Http\Controllers\EvaluadoresController@index');
Route::get('/imp/{id}', 'App\Http\Controllers\EvaluadosController@imp');
Route::get('/imp2/{id}', 'App\Http\Controllers\EvaluadosController@imp2');
    
Route::prefix('admin')->group(function () {   

    Route::get('/exp/{action}', 'App\Http\Controllers\EvaluadosController@exp');

    Route::get('/import_excel', 'App\Http\Controllers\admin\ImportExcelController@index');
    Route::post('/import_excel/import', 'App\Http\Controllers\admin\ImportExcelController@import');
    
    Route::get('/import_excel_jefe', 'App\Http\Controllers\admin\ImportExcelJefeController@index');
    Route::post('/import_excel_jefe/import', 'App\Http\Controllers\admin\ImportExcelJefeController@import');
   
    Route::get('/import_excel_eva', 'App\Http\Controllers\admin\ImportExcelEvaController@index');
    Route::post('/import_excel_eva/import', 'App\Http\Controllers\admin\ImportExcelEvaController@import');
    
    Route::get('/Evarepos', 'App\Http\Controllers\admin\EvareposController@index');
    Route::post('/Evarepos/repo', 'App\Http\Controllers\admin\EvareposController@repo');

    Route::get('/Evabonos', 'App\Http\Controllers\admin\EvabonosController@index');
    Route::post('/Evabonos/repo', 'App\Http\Controllers\admin\EvabonosController@repo');

    Route::post('/Recepciones/filtrar', 'App\Http\Controllers\admin\RecepcionesController@filtrar');
    Route::get('/Recepciones/{id}/full', 'App\Http\Controllers\admin\RecepcionesController@full');
 
    Route::resource('/Periodos', App\Http\Controllers\admin\PeriodosController::class);    
    Route::resource('/Tipodependencias', App\Http\Controllers\admin\TipodependenciasController::class);
    Route::resource('/Dependencias', App\Http\Controllers\admin\DependenciasController::class);
    Route::resource('/Unidades', App\Http\Controllers\admin\UnidadesController::class);
    Route::resource('/Areas', App\Http\Controllers\admin\AreasController::class);
    Route::resource('/Recepciones', App\Http\Controllers\admin\RecepcionesController::class);

    
});
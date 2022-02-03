@extends('layouts.app')
@section('content')
<?php
    use App\Http\Controllers\EvaluadosController;
?>
  <div class="container">
     @if($success)
          <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <strong>{{ $success }}</strong>
          </div>
     @endif
    <div>Datos del Evaluador=>Nombre: {{$usuario}} , Correo: {{$email}}, NE: {{$numeroEmpleado}}
    </div>
    <table class="table table-bordered table-striped">
    <tr>
        <th>No.</th>      
        <th>Periodo</th>
        <th>NE</th>
        <th>Nombre del Empleado</th>
        <th>Puesto Funcional</th>
        <th>Nivel</th>
        <th>Estatus</th>
        <th>Impreso</th>
        <th>Enviado a Validación</th>
        <th>Puntaje Promedio</th>
    </tr>
    @foreach($evaluados as $eval)
          <tr> 
               <td>{!! $eval->id !!}</td>
               <td>{!! $eval->fk_cve_periodo !!}</td>
               <td>{!! $eval->num_emp !!}</td>
               <td>{!! $eval->nombre !!}</td>
               <td>{!! $eval->puesto_funcional !!}</td>
               <td>{!! $eval->nivel !!}</td>
               @if ($eval->validado=="NO")
                    <td>
                    @if($eval->evaluado=="SI")
                         <a href='/eva/{{ $eval->id }}' class="btn btn-warning">Evaluado</a>
                    @else
                         <a href='/eva/{{ $eval->id }}' class="btn btn-warning">Por Evaluar</a>
                    @endif
                    </td>
               @else
                    <td>Evaluado</td>
               @endif 
               <td>
                    <a href='/imp/{{ $eval->id }}' class="btn btn-warning">{!! $eval->impreso !!}</a>
               </td>
               
               @if ($eval->validado=="NO")
                    <td>
                        <a href='/val/{{ $eval->id }}' 
                        onclick='return confirm("¿Esta Segura(o) de enviar a validación? si da clic en Aceptar, ya no se permitirán cambios.")'
                        class="btn btn-warning">NO                          
                        </a>
                    </td>
               @else
                    <td>{!! $eval->validado !!}</td>
               @endif
               <td>{!! substr($eval->promedio,0,4) !!}</td>
         </tr>
    @endforeach    
    </table>
  </div>
 @endsection
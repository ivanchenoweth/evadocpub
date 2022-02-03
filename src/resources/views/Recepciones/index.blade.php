@extends('layouts.appcatalogos')
@section('content')
<div class="container">
@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <b>{{Session::get('mensaje')}}</b>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form 
    name="form2"
    method="post" 
    enctype="multipart/form-data" 
    action="{{ url('/admin/Recepciones/filtrar') }}">
    {{ csrf_field() }}

<h1> Recepcion de Evaluaciones en Físico </h1>
<label for="empleado" class="d-inline" >Número de Empleado:</label>
<input oninput="jsperiodoini();" 
       type="number" class="d-inline" name="empleado" id="empleado" 
       value="{{$empleado}}">

<label class="d-inline" for="periodo_ini">,Periodo:</label>
<select 
  oninput="jsperiodoini();"
  class="d-inline" name="periodo_ini" id="periodo_ini">
       @foreach($periodo as $per)
       <option value="{{ $periodo_ini }}" 
       <?php                   
           if( $per->cve_periodo == $periodo_ini) 
               echo 'selected="selected"'                
       ?>                     
       > 
       {{ $per->cve_periodo." ".$per->descripcion }}
       </option>
       @endforeach            
</select> 
<br>
<br>
@include('include.dep_uni_area')
<br>
<br>
<a href="{{ url('/admin/Recepciones/create') }}" class="btn btn-success"> 
  Agregar Nuevo Evaluado</a>
<input  type="submit" class="btn btn-success" Value ="Aplicar Filtro">   

<input type="hidden" id="pini" name= "pini" value="{{$periodo_ini}}">


</form>
<table class="table table-light">
  <thead class="thead-light">
	<tr>
		<th>ID</th>
		<th>Periodo</th>
    <th>N.E.</th>
    <th>Nombre</th>
    <th>Cve.Area</th>
    <th>Recibido</th>
    <th>Fecha Rec.</th>
    <th>Observaciones</th>    
		<th>Acciones</th>
	</tr>
  </thead>
  <tbody>
  @foreach ($evaluado as $eva)
	<tr>
		<td>{{ $eva->id}}</td>
    <td>{{ $eva->fk_cve_periodo}}</td>
    <td>{{ $eva->num_emp}}</td>
    <td>{{ $eva->nombre}}</td> 
    <td>{{ $eva->fk_cve_area}}</td> 
    <td>
      <?php
        if ($eva->recibido=="SI") 
        {echo " &#10004 ";
        } else 
        { 
          echo " x ";
        };
      ?>
    </td>
    <td>{{ substr($eva->fecha_rec,0,10)}}</td> 
    <td>{{ $eva->observaciones}}</td> 
		<td>        
        <a href="{{ url('/admin/Recepciones/'.$eva->id.'/edit') }}" class="btn btn-warning"> Recibir
        </a>        
        |<a href="{{ url('/admin/Recepciones/'.$eva->id.'/full') }}" class="btn btn-warning"> Editar
        </a>
        <form action="{{ url('/admin/Recepciones/'.$eva->id)}}" class="d-inline" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" 
	        value="Borrar" class="btn btn-danger">
        </form>
        </td>
	</tr>
  @endforeach
  </tbody>
</table>
{!! $evaluado->links() !!}
</div>
@endsection
@include('include.jsdep_uni_area')
<script>
function jsperiodoini() {
  var ID = document.getElementById("periodo_ini");
  var TE = ID.options[ID.selectedIndex].text  ;       
  var VA = document.getElementById("pini");
  VA.value= TE.substr(0,3);
}
</script>
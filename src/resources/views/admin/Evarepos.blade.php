@extends('layouts.appcatalogos')
@section('content')
<div class="container">
<form action="{{ url('/admin/Evarepos/repo') }}" 
    method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('POST')}}

     @if(Session::has('mensaje'))
     <div class="alert alert-success alert-dismissible" role="alert">
             {{Session::get('mensaje')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
     </div>
     @endif

  <h1> Reporte de Evaluados </h1>
  <label for="periodo_ini">Periodo Inicial:</label>
     <select
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
    <label for="periodo_fin">,     Periodo Final:</label>
    <select 
            class="d-inline" name="periodo_fin" id="periodo_fin">
            @foreach($periodo as $per)
            <option value="{{ $periodo_fin }}" 
            <?php                   
                if( $per->cve_periodo == $periodo_fin) 
                    echo 'selected="selected"'                
            ?>                     
            > 
            {{ $per->cve_periodo." ".$per->descripcion }}
            </option>
            @endforeach            
    </select>
    
    <br>

    <label for="num_emp">Número de Empleado:</label>
     <input type="text" class="form-control" name="num_emp" id="num_emp" 
    value="{{$evaluado->num_emp}}">
    <br>
    @include('include.dep_uni_area')
    <br>
    <input type="submit" class="btn btn-success" value="Generar Reporte">
    </form> 
</div>
@endsection
@include('include.jsdep_uni_area')

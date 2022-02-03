@extends('layouts.appcatalogos')
@section('content')
<div class="container">
<form action="{{ url('/admin/Evabonos/repo') }}" 
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
     <h1> Reporte de Bono </h1>     
     <label for="periodo_ini">Periodo:</label>
     <select 
       oninput="myFunctionper()"
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
     @include('include.dep_uni_area')
     <br>
    <label for="num_emp">Promedio Minimo para Pago de Bono:</label>
    <input type="text" class="form-control" name="promedio_min" id="promedio_min" 
            value="{{$promedio_min}}">
            
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Generar Reporte">
    <br>
    <input type="hidden" id="periodoini" name= "periodoini" value="{{$periodo_ini}}"> 
    </form> 
</div>
@endsection
@include('include.jsdep_uni_area')
<script>
function myFunctionper() {
    var ID = document.getElementById("periodo_ini");
   	var TE = ID.options[ID.selectedIndex].text  ;       
    var VA = document.getElementById("periodoini");
    VA.value= TE.substr(0,3);
}
</script>

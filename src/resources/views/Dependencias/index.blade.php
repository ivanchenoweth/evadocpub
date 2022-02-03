@extends('layouts.appcatalogos')
@section('content')
<div class="container">
@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="{{ url('/admin/Dependencias/create') }}" class="btn btn-success"> 
  Agregar Nueva Dependencia o Entidad</a>
<br>
<br>
<table class="table table-light">
  <thead class="thead-light">
	<tr>
		<th>ID</th>
		<th>Cve Tipo Dep.</th>
    <th>Clave de Dependencia</th>
    <th>Descripción</th>
    <th>Activa</th>
		<th>Acciones</th>
	</tr>
  </thead>
  <tbody>
  @foreach ($dependencia as $dep)
	<tr>
		<td>{{ $dep->id}}</td>
    <?php
      foreach($tipo_dependencia as $tip_dep) {
        if ($tip_dep->cve_tipo_dependencia == $dep->fk_cve_tipo_dependencia) {
          echo '<td>'.$tip_dep->descripcion.'</td>';
        }
      }
    ?>    
    <td>{{ $dep->cve_dependencia}}</td>
    <td>{{ $dep->descripcion}}</td>
    <td>
      <?php
        if ($dep->activa) 
        {echo " &#10004 ";
        } else 
        { 
          echo " x ";
        };
      ?>
    </td>
		<td>
        <a href="{{ url('/admin/Dependencias/'.$dep->id.'/edit') }}" class="btn btn-warning"> Editar
        </a>
        |
        <form action="{{ url('/admin/Dependencias/'.$dep->id)}}" class="d-inline" method="post" enctype="multipart/form-data">
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
{!! $dependencia->links() !!}
</div>
@endsection
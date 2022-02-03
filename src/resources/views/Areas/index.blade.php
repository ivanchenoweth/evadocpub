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
<a href="{{ url('/admin/Areas/create') }}" class="btn btn-success"> 
  Agregar Nueva Area</a>
<br>
<br>
<table class="table table-light">
  <thead class="thead-light">
	<tr>
		<th>ID</th>
		<th>Unidad Administrativa</th>
    <th>Clave del Area</th>
    <th>Descripción</th>
    <th>Activa</th>
		<th>Acciones</th>
	</tr>
  </thead>
  <tbody>
  @foreach ($area as $are)
	<tr>
		<td>{{ $are->id}}</td>
    <?php
      foreach($unidad as $uni) {
        if ($uni->cve_unidad == $are->fk_cve_unidad) {
          echo '<td>'.$uni->descripcion.'</td>';
        }
      }
    ?>    
    <td>{{ $are->cve_area}}</td>
    <td>{{ $are->descripcion}}</td>
    <td>
      <?php
        if ($are->activa) 
        {echo " &#10004 ";
        } else 
        { 
          echo " x ";
        };
      ?>
    </td>
		<td>
        <a href="{{ url('/admin/Areas/'.$are->id.'/edit') }}" class="btn btn-warning"> Editar
        </a>
        |
        <form action="{{ url('/admin/Areas/'.$are->id)}}" class="d-inline" method="post" enctype="multipart/form-data">
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
{!! $area->links() !!}
</div>
@endsection
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
<a href="{{ url('/admin/Unidades/create') }}" class="btn btn-success"> 
  Agregar Nueva Unidad Administrativa</a>
<br>
<br>
<table class="table table-light">
  <thead class="thead-light">
	<tr>
		<th>ID</th>
		<th>Dependencia</th>
    <th>Clave de la Unidad Administrativa</th>
    <th>Descripción</th>
    <th>Activa</th>
		<th>Acciones</th>
	</tr>
  </thead>
  <tbody>
  @foreach ($unidad as $uni)
	<tr>
		<td>{{ $uni->id}}</td>
    <?php
      foreach($dependencia as $dep) {
        if ($dep->cve_dependencia == $uni->fk_cve_dependencia) {
          echo '<td>'.$dep->descripcion.'</td>';
        }
      }
    ?>    
    <td>{{ $uni->cve_unidad}}</td>
    <td>{{ $uni->descripcion}}</td>
    <td>
      <?php
        if ($uni->activa) 
        {echo " &#10004 ";
        } else 
        { 
          echo " x ";
        };
      ?>
    </td>
		<td>
        <a href="{{ url('/admin/Unidades/'.$uni->id.'/edit') }}" class="btn btn-warning"> Editar
        </a>
        |
        <form action="{{ url('/admin/Unidades/'.$uni->id)}}" class="d-inline" method="post" enctype="multipart/form-data">
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
{!! $unidad->links() !!}
</div>
@endsection
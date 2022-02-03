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
<a href="{{ url('/admin/Tipodependencias/create') }}" class="btn btn-success"> Agregar Nuevo Tipo de Dependencia </a>
<br>
<br>
<table class="table table-light">
  <thead class="thead-light">
	<tr>
		<th>ID</th>
		<th>Cleve del Tipo de Dependencia</th>
    <th>Descripción</th>
		<th>Acciones</th>
	</tr>
  </thead>
  <tbody>
  @foreach ($Tipodependencias as $Tipo_dep)
	<tr>
		<td>{{ $Tipo_dep->id}}</td>
		<td>{{ $Tipo_dep->cve_tipo_dependencia}}</td>
    <td>{{ $Tipo_dep->descripcion}}</td>
		<td>
        <a href="{{ url('/admin/Tipodependencias/'.$Tipo_dep->id.'/edit') }}" class="btn btn-warning"> Editar
        </a>
        |
        <form action="{{ url('/admin/Tipodependencias/'.$Tipo_dep->id)}}" class="d-inline" method="post" enctype="multipart/form-data">
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
{!! $Tipodependencias->links() !!}
</div>
@endsection
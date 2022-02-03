@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Tipodependencias/'.$tipo_dependencia->id) }}" 
    method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH')}}
    @include('Tipodependencias.form',['modo'=>'Editar'])
</form>
</div>
@endsection
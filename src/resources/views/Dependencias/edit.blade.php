@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Dependencias/'.$dependencia->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH')}}
    @include('Dependencias.form',['modo'=>'Editar'])
</form>
</div>
@endsection
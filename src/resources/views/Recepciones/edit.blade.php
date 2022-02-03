@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Recepciones/'.$evaluado->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH')}}
    @include('Recepciones.form',['modo'=>'Editar'])
</form>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Recepciones')}}" method="post" enctype="multipart/form-data">
@csrf
@include('Recepciones.form',['modo'=>'Crear'])
</form>
</div>
@endsection
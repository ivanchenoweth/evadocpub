@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Dependencias')}}" method="post" enctype="multipart/form-data">
@csrf
@include('Dependencias.form',['modo'=>'Crear'])
</form>
</div>
@endsection
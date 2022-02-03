@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Unidades')}}" method="post" enctype="multipart/form-data">
@csrf
@include('Unidades.form',['modo'=>'Crear'])
</form>
</div>
@endsection
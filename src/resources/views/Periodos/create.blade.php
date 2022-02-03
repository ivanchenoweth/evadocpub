@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Periodos')}}" method="post" enctype="multipart/form-data">
@csrf
@include('Periodos.form',['modo'=>'Crear'])
</form>
</div>
@endsection
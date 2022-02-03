@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Tipodependencias')}}" method="post" enctype="multipart/form-data">
@csrf
@include('Tipodependencias.form',['modo'=>'Crear'])
</form>
</div>
@endsection
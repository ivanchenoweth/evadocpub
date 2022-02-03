@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Areas')}}" method="post" enctype="multipart/form-data">
@csrf
@include('Areas.form',['modo'=>'Crear'])
</form>
</div>
@endsection
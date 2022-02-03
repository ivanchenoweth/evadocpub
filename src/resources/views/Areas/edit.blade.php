@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/admin/Areas/'.$area->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH')}}
    @include('Areas.form',['modo'=>'Editar'])
</form>
</div>
@endsection
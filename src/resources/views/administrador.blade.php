@extends('layouts.appadmin')
@section('content')
<div class="container">
    @if($success)
          <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <strong>{{ $success }}</strong>
          </div>
     @endif
    <div>Administrador del Sistema: </div>
    <div>{{$usuario}} </div>
    <div>{{$email}}</div> 
    <div>Verson 1.4.1, fecha 8/10/21</div> 

</div>
@endsection

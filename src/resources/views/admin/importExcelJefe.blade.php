@extends('layouts.appcatalogos')
@section('content')
  <div class="container">
   <h3 align="center">Importar Archivo de Evaluadores de Excel al Sistema</h3>
    <br />
   @if(count($errors) > 0)
    <div class="alert alert-danger">
     Error de Validación al Cargar<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form       
       name="fomul"
       method="post" 
       enctype="multipart/form-data" 
       action="{{ url('/admin/import_excel_jefe/import') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Seleccione el Archivo a Cargar</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" class="btn btn-primary" value="Cargar">
       </td>
       <td width="30%" align="left">
        <input type="submit" name="clean" class="btn btn-primary" value="Limpiar">
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
     @include('include.dep_uni_area')    
    </form>
   <div class="panel-heading">
     <h3 class="panel-title">Datos de los Evaluadores</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>ID</th>
        <th>Periodo Actual</th>
        <th>NE</th>
        <th>TE</th>
        <th>Tv</th>
        <th>PE</th>        
        <th>Dependencia</th>        
        <th>Unid.Adva.</th>
        <th>Cve.Area</th>
        <th>Area</th>
        <th>Puesto</th>
       </tr>
       @foreach($data as $row)
       <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->ult_periodo }}</td>
        <td>{{ $row->ne_jefe }}</td>
        <td>{{ $row->tot_evaluar }}</td>
        <td>{{ $row->tot_evaluado }}</td>
        <td>{{ $row->pen_evaluar }}</td>
        <td>{{ $row->dependencia }}</td>        
        <td>{{ $row->unidad_admva }}</td>
        <td>{{ $row->fk_cve_area }}</td>
        <td>{{ $row->area }}</td>
        <td>{{ $row->puesto }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
   </div>
  </div>
@endsection
@include('include.jsdep_uni_area')
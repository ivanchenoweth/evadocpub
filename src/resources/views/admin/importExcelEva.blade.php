@extends('layouts.appcatalogos')
@section('content')
  <div class="container">
   <h3 align="center">Importar Archivo de Evaluados de Excel al Sistema</h3>
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
    action="{{ url('/admin/import_excel_eva/import') }}">
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
     
     <label for="periodo_ini">Periodo Inicial:</label>
     <select 
       oninput="jsperiodo()"
       class="d-inline" name="periodo_ini" id="periodo_ini">
            @foreach($periodo as $per)
            <option value="{{ $periodo_ini }}" 
            <?php                   
                if( $per->cve_periodo == $periodo_ini) 
                    echo 'selected="selected"'                
            ?>                     
            > 
            {{ $per->cve_periodo." ".$per->descripcion }}
            </option>
            @endforeach            
     </select> 
     <br>
     <label for="periodo_fin">Periodo Final:</label>
     <select 
       oninput="jsperiodo()"
       class="d-inline" name="periodo_fin" id="periodo_fin">
            @foreach($periodo as $per)
            <option value="{{ $periodo_fin }}" 
            <?php                   
                if( $per->cve_periodo == $periodo_fin) 
                    echo 'selected="selected"'                
            ?>                     
            > 
            {{ $per->cve_periodo." ".$per->descripcion  }}
            </option>
            @endforeach            
     </select>
     <br>
     @include('include.dep_uni_area') 
     
     <input type="hidden" id="periodoini" name= "periodoini" value="{{$periodo_ini}}">
     <input type="hidden" id="periodofin" name= "periodofin" value="{{$periodo_fin}}">

   </form>
   
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Datos de los Evaluados</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>ID</th>
        <th>Periodo</th>
        <th>NE</th>
        <th>Nombre del Evaluado</th>
        <th>Puesto</th>
        <th>Nivel</th>        
        <th>NE Jefe</th>
        <th>EV</th>
        <th>Nombre del Representante</th>
        <th>Impreso</th>
        <th>Cve.Area</th>
        <th>R1</th>
        <th>R2</th>
        <th>R3</th>
        <th>R4</th>
        <th>R5</th>
        <th>R6</th>
        <th>R7</th>
        <th>R8</th>
        <th>R9</th>
        <th>R10</th>
        <th>R11</th>
        <th>R12</th>
        <th>R13</th>
        <th>R14</th>
        <th>R15</th>
        <th>R16</th>
        <th>R17</th>
        <th>R18</th>
        <th>R19</th>
        <th>R20</th>
        <th>R21</th>
        <th>R22</th>
        <th>R23</th>
        <th>R24</th>
        <th>R25</th>
        <th>R26</th>
        <th>R27</th>
        <th>R28</th>
        <th>R29</th>
        <th>R30</th>
        <th>Suma</th>
        <th>Promedio</th>
        <th>Areas de Oportunidad</th>
        <th>Correo Electrónico</th>
        <th>Grado de Dominio</th>
        <th>Dependencia</th>
        <th>Unidad Admonistrativa</th>
        <th>Area</th>
       </tr>
       @foreach($data as $row)
       <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->fk_cve_periodo }}</td>
        <td>{{ $row->num_emp }}</td>
        <td>{{ $row->nombre }}</td>
        <td>{{ $row->puesto }}</td>
        <td>{{ $row->nivel }}</td>
        <td>{{ $row->fk_ne_jefe }}</td>
        <td>{{ $row->evaluado }}</td>
        <td>{{ $row->nom_repr }}</td>
        <td>{{ $row->impreso }}</td>
        <td>{{ $row->fk_cve_area }}</td>
        <td>{{ $row->r1 }}</td>
        <td>{{ $row->r2 }}</td>
        <td>{{ $row->r3 }}</td>
        <td>{{ $row->r4 }}</td>
        <td>{{ $row->r5 }}</td>
        <td>{{ $row->r6 }}</td>
        <td>{{ $row->r7 }}</td>
        <td>{{ $row->r8 }}</td>
        <td>{{ $row->r9 }}</td>
        <td>{{ $row->r10 }}</td>
        <td>{{ $row->r11 }}</td>
        <td>{{ $row->r12 }}</td>
        <td>{{ $row->r13 }}</td>
        <td>{{ $row->r14 }}</td>
        <td>{{ $row->r15 }}</td>
        <td>{{ $row->r16 }}</td>
        <td>{{ $row->r17 }}</td>
        <td>{{ $row->r18 }}</td>
        <td>{{ $row->r19 }}</td>
        <td>{{ $row->r20 }}</td>
        <td>{{ $row->r21 }}</td>
        <td>{{ $row->r22 }}</td>
        <td>{{ $row->r23 }}</td>
        <td>{{ $row->r24 }}</td>
        <td>{{ $row->r25 }}</td>
        <td>{{ $row->r26 }}</td>
        <td>{{ $row->r27 }}</td>
        <td>{{ $row->r28 }}</td>
        <td>{{ $row->r29 }}</td>
        <td>{{ $row->r30 }}</td>
        <td>{{ $row->suma }}</td>
        <td>{{ $row->promedio }}</td>
        <td>{{ $row->areas_opor }}</td>
        <td>{{ $row->correo }}</td>
        <td>{{ $row->grado_dominio }}</td>
        <td>{{ $row->dependencia }}</td>        
        <td>{{ $row->unidad_admva }}</td>
        <td>{{ $row->area }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
   </div>
  </div>
 @endsection
 @include('include.jsdep_uni_area')
 <script>
function jsperiodo() {

    var ID = document.getElementById("periodo_ini");
   	var TE = ID.options[ID.selectedIndex].text  ;       
    var VA = document.getElementById("periodoini");
    VA.value= TE.substr(0,3);

    ID = document.getElementById("periodo_fin");
   	TE = ID.options[ID.selectedIndex].text  ;       
    VA = document.getElementById("periodofin");
    VA.value= TE.substr(0,3);
}
</script>
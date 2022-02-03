<h1> Capturar Fecha de Recepción de Evaluación en Fïsico</h1>
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">

<br>
<label class="d-inline" for="fk_cve_periodo"> Periodo:
   <b>{{$evaluado->fk_cve_periodo}}-{{$evaluado->per_descripcion}}</b>
</label>
<label class="d-inline" for="num_emp">, Número de Empleado:
    <b>{{$evaluado->num_emp}}</b> 
</label>
<br>
<label for="nombre"> Nombre:
    <b>{{trim($evaluado->nombre)}}</b>
</label>
<br>
<label class="d-inline" for="puesto"> Puesto Nominal:
    <b>{{ trim($evaluado->puesto) }} </b>
</label>
<label class="d-inline" for="puesto_funcional">, Puesto Funcional:
    <b>{{ trim($evaluado->puesto_funcional) }} </b>
</label>
<br>
<label class="d-inline" for="nivel"> Nivel:
    <b>{{ trim($evaluado->nivel) }} </b>
</label>
<label class="d-inline" for="fk_ne_jefe">, Num.Emp y Nombre del Jefe: 
    <b>{{ $evaluado->fk_ne_jefe."-". $evaluado->nom_jefe}}</b>
</label>
<br>
<label  for="nom_repr"> Nombre del Representate: (si aplica):
    <b>{{ trim($evaluado->nom_repr) }} </b>
</label>
<br>
<label  class="d-inline" for="correo"> Correo Electrónico: 
    <b{{ trim($evaluado->correo) }}</b>
</label>
<label  class="d-inline" for="fk_cve_area">, Cve.Area y Area: 
    <b>{{trim($evaluado->fk_cve_area)."-". trim($evaluado->area)}}</b>
</label>
<br>
<label class="d-inline" for="fecha_eva">Capturado el: 
    <b>{{ $evaluado->fecha_eva}}</b>
    , Impresa el:
    <b>{{ $evaluado->fecha_imp}}</b>
    , Validada el:
    <b>{{ $evaluado->fecha_val}}</b>
</label>
<br>
<label for="fecha_rec"> Fecha de Recepción </label>
<input type="date" class="form-control" name="fecha_rec" id="fecha_rec" 
    value="{{ \Carbon\Carbon::createFromDate($evaluado->fecha_rec)->format('Y-m-d') }}">
<br>
<label  for="observaciones"> Observaciones </label>
<input type="text"  class="form-control" name="observaciones" id="observaciones" 
    value="{{ trim($evaluado->observaciones) }}">
<br>
<br>
<input type="submit" class="btn btn-success" value="{{$modo}} Datos">
<a href="{{ url('/admin/Recepciones') }}" class="btn btn-primary"  > Regresar </a>
<br>
</div>
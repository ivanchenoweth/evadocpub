<h1> {{$modo}} Evaluado</h1>
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
    <label class="d-inline" for="fk_cve_periodo"> Periodo </label>
    <select class="d-inline" class="form-control" name="fk_cve_periodo" id="fk_cve_periodo">
            @foreach($periodo as $per)
            <option value="{{ $per->cve_periodo }}" 
            <?php   
                $evaluado->fk_cve_periodo = trim($evaluado->fk_cve_periodo); 
                if( $per->cve_periodo == $evaluado->fk_cve_periodo)                 
                    echo 'selected="selected"';
            ?>
            > 
            {{ $per->cve_periodo." ".$per->descripcion }}
            </option>
            @endforeach
    </select>

<label class="d-inline" for="num_emp">,    Número de Empleado </label>
<input type="number" class="d-inline" class="form-control" name="num_emp" id="num_emp" 
    value="{{ trim($evaluado->num_emp) }}">
<br>
<label  for="nombre"> Nombre </label>
<input type="text"  class="form-control" name="nombre" id="nombre" 
    value="{{ trim($evaluado->nombre) }}">
<br>
<label for="puesto"> Puesto Nominal </label>
<input type="text" class="form-control" name="puesto" id="puesto" 
    value="{{ trim($evaluado->puesto) }}">
<br>
<label for="puesto_funcional"> Puesto Funcional </label>
<input type="text" class="form-control" name="puesto_funcional" id="puesto_funcional" 
    value="{{ trim($evaluado->puesto_funcional) }}">
<br>
<label for="nivel"> Nivel </label>
<input type="text" class="d-inline" name="nivel" id="nivel" 
    value="{{ trim($evaluado->nivel) }}">

<label class="d-inline" for="fk_ne_jefe"> N.E.Jefe </label>
    <select class="d-inline" class="form-control" name="fk_ne_jefe" id="fk_ne_jefe">
            @foreach($evaluador as $evar)
            <option value="{{ $evar->ne_jefe }}" 
            <?php                   
                if( $evar->ne_jefe == $evaluado->fk_ne_jefe)
                    echo 'selected="selected"';
            ?>
            > 
            {{ $evar->ne_jefe." ".$evar->nombre }}
            </option>
            @endforeach
</select>
<br>
<label  for="nom_repr"> Nombre del Representate (si aplica) </label>
<input type="text"  class="form-control" name="nom_repr" id="nom_repr" 
    value="{{ trim($evaluado->nom_repr) }}">
<br>
<label  for="correo"> Correo Electrónico </label>
<input type="email"  class="form-control" name="correo" id="correo" 
    value="{{ trim($evaluado->correo) }}">
<br>
<br>
<label class="d-inline" for="fk_cve_area"> Area </label>
<select class="d-inline" name="fk_cve_area" id="fk_cve_area">
            @foreach($area as $are)
            <option value="{{ $are->cve_area }}" 
            <?php   
                $evaluado->fk_cve_area = trim($evaluado->fk_cve_area);                 
                if( $are->cve_area == $evaluado->fk_cve_area) 
                    echo 'selected="selected"';
            ?>                     
            > 
            {{ $are->cve_area." ".substr($are->descripcion,0,120) }}
            </option>
            @endforeach            
    </select>
<br>
<label for="fecha_val"> Fecha de Validación </label>
<input type="date" class="form-control" name="fecha_val" id="fecha_val" 
    value="{{ \Carbon\Carbon::createFromDate($evaluado->fecha_val)->format('Y-m-d') }}">
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


<h1> {{$modo}} Tipo de Dependencia</h1>
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br>
<div class="form-group">

<label for="cve_tipo_dependencia"> Clave de Tipo de Dependencia </label>
<input type="text" class="form-control" name="cve_tipo_dependencia" id="cve_tipo_dependencia" 
    value="{{ isset($tipo_dependencia->cve_tipo_dependencia)?trim($tipo_dependencia->cve_tipo_dependencia):old('cve_tipo_dependencia') }}">
<br>
<label for="descripcion"> Descripción </label>
<input type="text" class="form-control" name="descripcion" id="descripcion" 
    value="{{ isset($tipo_dependencia->descripcion)?trim($tipo_dependencia->descripcion):old('descripcion') }}">
<br>
<br>
<input type="submit" class="btn btn-success" value="{{$modo}} Datos">
<a href="{{ url('/admin/Tipodependencias') }}" class="btn btn-primary"  > Regresar </a>
</div>

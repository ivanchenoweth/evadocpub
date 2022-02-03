<h1> {{$modo}} Dependencia o Entidad</h1>
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
    <label for="fk_cve_tipo_dependencia"> Tipo de Dependencia </label>
    <select class="form-control" name="fk_cve_tipo_dependencia" id="fk_cve_tipo_dependencia">
            @foreach($tipo_dependencia as $tip_dep)
            <option value="{{ $tip_dep->cve_tipo_dependencia }}" 
            <?php   
                if (isset($dependencia->fk_cve_tipo_dependencia)) {
                    $dependencia->fk_cve_tipo_dependencia = trim($dependencia->fk_cve_tipo_dependencia); }
                else {
                    $dependencia->fk_cve_tipo_dependencia = old('cve_dependencia');
                }                
                if( $tip_dep->cve_tipo_dependencia == $dependencia->fk_cve_tipo_dependencia) 
                    echo 'selected="selected"'                
            ?>                     
            > 
            {{ $tip_dep->descripcion }}
            </option>
            @endforeach            
    </select>
<br>    
<label for="cve_dependencia"> Clave de Dependencia </label>
<input type="text" class="form-control" name="cve_dependencia" id="cve_dependencia" 
    value="{{ isset($dependencia->cve_dependencia)?trim($dependencia->cve_dependencia):old('cve_dependencia') }}">
<br>
<label for="descripcion"> Descripción </label>
<input type="text" class="form-control" name="descripcion" id="descripcion" 
    value="{{ isset($dependencia->descripcion)?trim($dependencia->descripcion):old('descripcion') }}">
<br>
<label for="activa"> Activa </label>
<input onInput="jsactiva();" type="checkbox" id="activa" name="activa" value="{{ $dependencia->activa }}"
<?php
    if ($dependencia->activa) echo " checked "
?>
> 
<br>
<input type="submit" class="btn btn-success" value="{{$modo}} Datos">
<a href="{{ url('/admin/Dependencias') }}" class="btn btn-primary"  > Regresar </a>
<br>
<input type="hidden" id="activao" name= "activao" value="{{ $dependencia->activa }}">
</div>
@include('include.jsactiva')
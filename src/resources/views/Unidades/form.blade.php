<h1> {{$modo}} Unidades Administrativas</h1>
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
    <label for="fk_cve_dependencia"> Dependencia </label>
    <select class="form-control" name="fk_cve_dependencia" id="fk_cve_dependencia">
            @foreach($dependencias as $dep)
            <option value="{{ $dep->cve_dependencia }}" 
            <?php   
                if (isset($unidad->fk_cve_dependencia)) {
                    $unidad->fk_cve_dependencia = trim($unidad->fk_cve_dependencia); }
                else {
                    $unidad->fk_cve_dependencia = old('fk_cve_dependencia');
                }                
                if( $dep->cve_dependencia == $unidad->fk_cve_dependencia) 
                    echo 'selected="selected"'                
            ?>                     
            > 
            {{ $dep->descripcion }}
            </option>
            @endforeach            
    </select>
<br>    
<label for="cve_unidad"> Clave de la Unidad Administrativa </label>
<input type="text" class="form-control" name="cve_unidad" id="cve_unidad" 
    value="{{ isset($unidad->cve_unidad)?trim($unidad->cve_unidad):old('cve_unidad') }}">
<br>
<label for="descripcion"> Descripción </label>
<input type="text" class="form-control" name="descripcion" id="descripcion" 
    value="{{ isset($unidad->descripcion)?trim($unidad->descripcion):old('descripcion') }}">
<br>
<label for="activa"> Activa </label>
<input onInput="jsactiva();" type="checkbox" id="activa" name="activa" value="{{ $unidad->activa }}"
<?php
    if ($unidad->activa) echo " checked "
?>
> 
<br>
<input type="submit" class="btn btn-success" value="{{$modo}} Datos">
<a href="{{ url('/admin/Unidades') }}" class="btn btn-primary"  > Regresar </a>
<br>
<input type="hidden" id="activao" name= "activao" value="{{ $unidad->activa }}">
</div>
@include('include.jsactiva')
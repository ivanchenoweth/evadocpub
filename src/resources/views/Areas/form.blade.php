<h1> {{$modo}} Areas</h1>
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
    <label for="fk_cve_unidad"> Unidad Administrativa </label>
    <select class="form-control" name="fk_cve_unidad" id="fk_cve_unidad">
            @foreach($unidades as $uni)
            <option value="{{ $uni->cve_unidad }}" 
            <?php   
                if (isset($area->fk_cve_unidad)) {
                    $area->fk_cve_unidad = trim($area->fk_cve_unidad); }
                else {
                    $area->fk_cve_unidad = old('fk_cve_unidad');
                }                
                if( $uni->cve_unidad == $area->fk_cve_unidad) 
                    echo 'selected="selected"'                
            ?>                     
            > 
            {{ $uni->cve_unidad . "|" .$uni->descripcion }}
            </option>
            @endforeach            
    </select>
<br>    
<label for="cve_area"> Clave del Area </label>
<input type="text" class="form-control" name="cve_area" id="cve_area" 
    value="{{ isset($area->cve_area)?trim($area->cve_area):old('cve_area') }}">
<br>
<label for="descripcion"> Descripción </label>
<input type="text" class="form-control" name="descripcion" id="descripcion" 
    value="{{ isset($area->descripcion)?trim($area->descripcion):old('descripcion') }}">
<br>
<label for="activa"> Activa </label>
<input onInput="jsactiva();" type="checkbox" id="activa" name="activa" value="{{ $area->activa }}"
<?php
    if ($area->activa) echo " checked "
?>
> 
<br>
<input type="submit" class="btn btn-success" value="{{$modo}} Datos">
<a href="{{ url('/admin/Areas') }}" class="btn btn-primary"  > Regresar </a>
<br>
<input type="hidden" id="activao" name= "activao" value="{{ $area->activa }}">
</div>
@include('include.jsactiva')
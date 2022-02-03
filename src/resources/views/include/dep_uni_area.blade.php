<label for="dependencia_ini">Dependencia Inicial:</label>
<select 
  oninput="jsdep_uni_area()"
  class="d-inline" name="dependencia_ini" id="dependencia_ini">
       @foreach($dependencia as $dep)
       <option value="{{ $dependencia_ini }}" 
       <?php                   
           if( $dep->cve_dependencia == $dependencia_ini) 
               echo 'selected="selected"'                
       ?>                     
       > 
       {{ $dep->cve_dependencia." ".$dep->descripcion }}
       </option>
       @endforeach            
</select> 
<br>
<label for="dependencia_fin">Dependencia Final:</label>
<select 
  oninput="jsdep_uni_area()"
  class="d-inline" name="dependencia_fin" id="dependencia_fin">
       @foreach($dependencia as $dep)
       <option value="{{ $dependencia_fin }}" 
       <?php                   
           if( $dep->cve_dependencia == $dependencia_fin) 
               echo 'selected="selected"'                
       ?>                     
       > 
       {{ $dep->cve_dependencia." ".$dep->descripcion  }}
       </option>
       @endforeach            
</select>
<br>
<label for="unidad_ini">Unidad Admva.Inicial:</label>
<select 
  oninput="jsdep_uni_area()"
  class="d-inline" name="unidad_ini" id="unidad_ini">
       @foreach($unidad as $uni)
       <option value="{{ $unidad_ini }}" 
       <?php                   
           if( $uni->cve_unidad == $unidad_ini) 
               echo 'selected="selected"'                
       ?>                     
       > 
       {{ $uni->cve_unidad." ".substr($uni->descripcion,0,80) }}
       </option>
       @endforeach            
</select> 
<br>
<label for="unidad_fin">Unidad Admva.Final:</label>
<select 
  oninput="jsdep_uni_area()"
  class="d-inline" name="unidad_fin" id="unidad_fin">
       @foreach($unidad as $uni)
       <option value="{{ $unidad_fin }}" 
       <?php                   
           if( $uni->cve_unidad == $unidad_fin) 
               echo 'selected="selected"'                
       ?>                     
       > 
       {{ $uni->cve_unidad." ".substr($uni->descripcion,0,80) }}
       </option>
       @endforeach
</select>
<br>
<label for="area_ini">Area Inicial:</label>
<select 
  oninput="jsdep_uni_area()"
  class="d-inline" name="area_ini" id="area_ini">
       @foreach($area as $are)
       <option value="{{ $area_ini }}" 
       <?php                   
           if( $are->cve_area == $area_ini) 
               echo 'selected="selected"'                
       ?>                     
       > 
       {{ $are->cve_area." ".substr($are->descripcion,0,80) }}
       </option>
       @endforeach            
</select> 
<br>
<label for="area_fin">Area Final:</label>
<select 
  oninput="jsdep_uni_area()"
  class="d-inline" name="area_fin" id="area_fin">
       @foreach($area as $are)
       <option value="{{ $area_fin }}" 
       <?php                   
           if( $are->cve_area == $area_fin) 
               echo 'selected="selected"'                
       ?>                     
       > 
       {{ $are->cve_area." ".substr($are->descripcion,0,80) }}
       </option>
       @endforeach
</select>
<p hidden>

<input type="hidden" id="dependenciaini" name= "dependenciaini" value="{{$dependencia_ini}}">
<input type="hidden" id="dependenciafin" name= "dependenciafin" value="{{$dependencia_fin}}">

<input type="hidden" id="unidadini" name= "unidadini" value="{{$unidad_ini}}">
<input type="hidden" id="unidadfin" name= "unidadfin" value="{{$unidad_fin}}">

<input type="hidden" id="areaini" name= "areaini" value="{{$area_ini}}">
<input type="hidden" id="areafin" name= "areafin" value="{{$area_fin}}">


<select name="dependencias" id="dependencias" disabled>
       @foreach($dependencia as $dep)
       <option value="{{ $dependencia_ini }}" >       
       {{ $dep->cve_dependencia." ".substr($dep->descripcion,0,80) }}
       </option>
       @endforeach
</select> 

<select name="unidades" id="unidades" disabled>
       @foreach($unidad as $uni)
       <option value="{{ $unidad_ini }}" >       
       {{ $uni->cve_unidad." ".substr($uni->descripcion,0,80) }}
       </option>
       @endforeach 
</select> 
<select name="areas" id="areas" disabled>
       @foreach($area as $are)
       <option value="{{ $area_ini }}" >
       {{ $are->cve_area." ".substr($are->descripcion,0,80) }}
       </option>
       @endforeach            
</select> 
</p>
<?php
//<input type="hidden" id="dependenciaini" name= "dependenciaini" value="{{$dependencia_ini}}">
//<input type="hidden" id="dependenciafin" name= "dependenciafin" value="{{$dependencia_fin}}">

//<input type="hidden" id="unidadini" name= "unidadini" value="{{$unidad_ini}}">
//<input type="hidden" id="unidadfin" name= "unidadfin" value="{{$unidad_fin}}">

//<input type="hidden" id="areaini" name= "areaini" value="{{$area_ini}}">
//<input type="hidden" id="areafin" name= "areafin" value="{{$area_fin}}">

?>
<script>
function jsdep_uni_area() {

    var actEle = document.activeElement;     
    var actEleID = actEle.id;

    var ID = document.getElementById("dependencia_ini");
    var TE = ID.options[ID.selectedIndex].text  ;       
    var VA = document.getElementById("dependenciaini");
    VA.value= TE.substr(0,2);
  
   ///////////////////////////////////////////////////////////////
    // dio clic en dependencia inicial?
    //
    if (actEleID === "dependencia_ini") {
      var IDn = document.getElementById("dependencia_fin");
     
      // limpia el combo dependencia_fin
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }      
      //window.alert("|"+ID.options.length+"|"+VA.value+"|");
      var j = 0;
      // recorre los elementos de dependencia_ini
      for (var i = 0; i < ID.options.length ; i++) {
        //window.alert("|"+ID.options[i].text.substring(0,2)+ "|"+ ID.options[i].text +"|"+ID.options.length+"|"+VA.value+"|"); 
        // si dependencia_ini >= dependenciaini? inserta en dependencia_fin
        if (ID.options[i].text.substring(0,2) >= VA.value) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,2);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      // selecciona el ultimo elemento en dependencia_fin
      IDn.selectedIndex = j - 1;
      
      var IDn = document.getElementById("unidad_ini");
      // limpia el combo unidad_ini
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("unidades");
      // recorre todas las unidades
      for (var i = 0; i < ID.options.length ; i++) {
         // si la dependencia > dependenciaini?  inserta en unidad_ini
        if (ID.options[i].text.substring(0,2) >= VA.value) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,4);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
         }
      } 
      IDn.selectedIndex = 0;

      var IDn = document.getElementById("area_ini");
      // limpia el combo area_ini
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("areas");
      // recorre todas las areas
      for (var i = 0; i < ID.options.length ; i++) {
        // si el area >=  dependenciaini inserta en area_ini
        if (ID.options[i].text.substring(0,2) >= VA.value) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,6);
            option.text = ID.options[i].text;
            //window.alert(option.text);
            IDn.appendChild(option);
         }
      } 
      IDn.selectedIndex = 0;
      var IDn = document.getElementById("unidad_fin");
      var IDx = document.getElementById("dependencia_fin");
      var TEf = IDx.options[IDx.selectedIndex].text.substring(0,2);

      // borra todo de unidad_fin
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("unidades");
      var j = 0;
      // recorre todas las unidades
      for (var i = 0; i < ID.options.length ; i++) {
         // si la unidad >= dependenciaini y <= dependencia_fin,sekected, entonces inserta en unidad_fin
        if (ID.options[i].text.substring(0,2) >= VA.value &&
        ID.options[i].text.substring(0,2) <= TEf
          ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,4);
            option.text = ID.options[i].text;            
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      // pone la seleccion en el aultimo de unidad_fin
      IDn.selectedIndex = j - 1; 


      var IDn = document.getElementById("area_fin");
      var IDx = document.getElementById("dependencia_fin");
      var TEf = IDx.options[IDx.selectedIndex].text.substring(0,2);
      
      // borra todo en area_fin
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("areas");
      var j = 0;
      // recorre todas las areas
      for (var i = 0; i < ID.options.length ; i++) {
         // si el area >= dependenciaini y <= dependencia_fin-selected, agrega a area_fin
        if (ID.options[i].text.substring(0,2) >= VA.value &&
        ID.options[i].text.substring(0,2) <= TEf
          ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,6);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      // selecciona en area_fin el ultimo elemento
      IDn.selectedIndex = j - 1; 
 }

ID = document.getElementById("dependencia_fin");
TE = ID.options[ID.selectedIndex].text  ;       
VA = document.getElementById("dependenciafin");
VA.value= TE.substr(0,2);

///////////////////////////////////////////////////////////////
// dio clic en dependencia final?
//
if (actEleID === "dependencia_fin") {
      var IDn = document.getElementById("unidad_fin");
      var IDx = document.getElementById("dependencia_ini");
      var TEf = IDn.options[IDx.selectedIndex].text.substring(0,2);
      // elimina todo lo de unidad_final
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("unidades");
      var j = 0;
      // recorre todas las unidades
      for (var i = 0; i < ID.options.length ; i++) {
       // si la unidad es >= dependencia_ini y <= dependenciafin
        if (ID.options[i].text.substring(0,2) <= VA.value &&
          ID.options[i].text.substring(0,2) >= TEf
            ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,4);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      // selecciona el ultimo elemento en unidad_fin
      IDn.selectedIndex = j - 1; 

      var IDn = document.getElementById("area_fin");
      var j = 0;
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("areas");
      for (var i = 0; i < ID.options.length ; i++) {
        if (ID.options[i].text.substring(0,2) <= VA.value &&
            ID.options[i].text.substring(0,2) >= TEf
            ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,4);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      IDn.selectedIndex = j - 1;


      var IDn = document.getElementById("unidad_ini");
      var IDx = document.getElementById("dependencia_ini");
      var TEf = IDn.options[IDx.selectedIndex].text.substring(0,2);
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("unidades");
      var j = 0;
      for (var i = 0; i < ID.options.length ; i++) {
        if (ID.options[i].text.substring(0,2) <= VA.value &&
          ID.options[i].text.substring(0,2) >= TEf
            ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,4);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      IDn.selectedIndex = 0; 

      var IDn = document.getElementById("area_ini");
      var IDx = document.getElementById("dependencia_ini");
      var TEf = IDn.options[IDx.selectedIndex].text.substring(0,2);
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("areas");
      var j = 0;
      for (var i = 0; i < ID.options.length ; i++) {
        if (ID.options[i].text.substring(0,2) <= VA.value &&
          ID.options[i].text.substring(0,2) >= TEf
            ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,6);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            //window.alert(option.value);
            j = j + 1;
         }
      } 
      IDn.selectedIndex = 0; 


    }

    ID = document.getElementById("unidad_ini");
   	TE = ID.options[ID.selectedIndex].text  ;       
    VA = document.getElementById("unidadini");
    VA.value= TE.substr(0,4);


    
  // dio clic en unidad inicial?
    if (actEleID === "unidad_ini") {
      //window.alert("unidad_ini");
      var IDn = document.getElementById("unidad_fin");
      var TEf = IDn.options[IDn.selectedIndex].text.substring(0,4);
      //options[ID.selectedIndex].text.substring(0,4);
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      var ID = document.getElementById("unidades");
      var j = 0;
      //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      for (var i = 0; i < ID.options.length ; i++) {
        if (ID.options[i].text.substring(0,4) >= VA.value
            && ID.options[i].text.substring(0,4) <= TEf
            ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,4);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      IDn.selectedIndex = j - 1;    
      
      
            //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      var IDn = document.getElementById("area_ini");
      var TEf = IDn.options[IDn.options.length-1].text.substring(0,6);
      //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      var ID = document.getElementById("areas");
      //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      for (var i = 0; i < ID.options.length ; i++) {
        if (ID.options[i].text.substring(0,4) >= VA.value
            && ID.options[i].text.substring(0,6) <= TEf
            ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,6);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            //window.alert(option.value);
         }
      } 
      IDn.selectedIndex = 0;

      //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      var IDn = document.getElementById("area_fin");
      var IDx = document.getElementById("unidad_fin");
      var TEf = IDx.options[IDn.selectedIndex].text.substring(0,4);
      //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }
      //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      var ID = document.getElementById("areas");
      //window.alert("|VA.value="+VA.value+"|TEf="+TEf);
      var j = 0;
      for (var i = 0; i < ID.options.length ; i++) {
        if (ID.options[i].text.substring(0,4) >= VA.value &&
            ID.options[i].text.substring(0,4) <= TEf
            ) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,6);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      IDn.selectedIndex = j - 1;   
    }



ID = document.getElementById("unidad_fin");
TE = ID.options[ID.selectedIndex].text  ;       
VA = document.getElementById("unidadfin");
VA.value= TE.substr(0,4);

// dio clic en unidad final?
if (actEleID === "unidad_fin") {
      //window.alert("|VA.value="+VA.value+"|TE="+TE);
      var IDn = document.getElementById("unidad_ini");
      var TEf = IDn.options[IDn.selectedIndex].text.substring(0,4);

      var IDn = document.getElementById("area_fin");
      //var TEl = IDn.options.length.toString();
      //window.alert("|TEl=" + TEl + "|TEf=" + TEf + "|");
      //window.alert(IDn.options.length);
      for (var i = IDn.options.length; i >= 0; i--) {
         IDn.remove(i);
      }

      var ID = document.getElementById("areas");
      var j = 0;
      for (var i = 0; i < ID.options.length ; i++) {
        if (ID.options[i].text.substring(0,4) <= VA.value  && 
          ID.options[i].text.substring(0,4) >= TEf) {
            var option = document.createElement('option');
            option.value = ID.options[i].text.substring(0,6);
            option.text = ID.options[i].text;
            IDn.appendChild(option);
            j = j + 1;
         }
      } 
      IDn.selectedIndex = j - 1;

}

var ID1 = document.getElementById("area_ini");   	
var TE1 = ID1.options[ID1.selectedIndex].text  ;       
var VA1 = document.getElementById("areaini");
VA1.value= TE1.substr(0,6);

var ID2 = document.getElementById("area_fin");   	
var TE2 = ID2.options[ID2.selectedIndex].text  ;       
var VA2 = document.getElementById("areafin");
VA2.value= TE2.substr(0,6);
//window.alert("VA1.value="+VA1.value+"|"+"VA2.value="+VA2.value);

}
</script>

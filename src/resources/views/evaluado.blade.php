@extends('layouts.app')
@section('content')
<style>
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073732485 9 0 511 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h2
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"T�tulo 2 Car";
	mso-style-next:Normal;
	margin:0cm;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:14.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Tahoma",sans-serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;
	font-weight:normal;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"Encabezado Car";
	margin:0cm;
	mso-pagination:widow-orphan;
	tab-stops:center 212.6pt right 425.2pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
span.Ttulo2Car
	{mso-style-name:"T�tulo 2 Car";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"T�tulo 2";
	mso-ansi-font-size:14.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Tahoma",sans-serif;
	mso-ascii-font-family:Tahoma;
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
span.EncabezadoCar
	{mso-style-name:"Encabezado Car";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Encabezado;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-ascii-font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:70.85pt 3.0cm 70.85pt 3.0cm;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
</style>
<style>
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073732485 9 0 511 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h2
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"T�tulo 2 Car";
	mso-style-next:Normal;
	margin:0cm;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:14.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Tahoma",sans-serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;
	font-weight:normal;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"Encabezado Car";
	margin:0cm;
	mso-pagination:widow-orphan;
	tab-stops:center 212.6pt right 425.2pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
span.Ttulo2Car
	{mso-style-name:"T�tulo 2 Car";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"T�tulo 2";
	mso-ansi-font-size:14.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Tahoma",sans-serif;
	mso-ascii-font-family:Tahoma;
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
span.EncabezadoCar
	{mso-style-name:"Encabezado Car";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Encabezado;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-ascii-font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:70.85pt 3.0cm 70.85pt 3.0cm;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
</style>
<?php
    use App\Http\Controllers\EvaluadosController;
?>
<div class="container">
     <?php                         
          if( isset($success)) {
               echo '<div class="alert alert-success alert-block">';
               echo '<button type="button" class="close" data-dismiss="alert">×</button>';
               echo '<strong> '.$success.' </strong>';
               echo '</div>';
          }
     ?>
     <form method="post" enctype="multipart/form-data" action="{{ url('/eva/grabar') }}">
     {{ csrf_field() }}     
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>                                  
          <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
               mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
               height:17.35pt'>
               <input oninput="myFunction();"  disabled id="BtnGrabar" type="submit" 
                     class="btn btn-primary" value="Grabar">
           </td>
           <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
               mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
               height:17.35pt'>
               <a href='/imp/{{ $eval->id }}' class="btn btn-primary">Imprimir</a>
          </td>
           <td width=10 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
               mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
               height:17.35pt'>
               <input onclick="myFunction();" id="BtnModificar" 
               type="button" 
               class="btn btn-primary" value="Modificar">
           </td>
           <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
               mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
               height:17.35pt'>
               <a href="{{ url('/eva2') }}" class="btn btn-primary"
                    onclick="return confirm('¿Esta Segura(o) de regresar? si da clic en Aceptar y no ha Grabado, los cambios se perderán.')"
               >Regresar</a>
           </td>
     </tr>
     <br>
     <br>
     <table class="table table-bordered table-striped">                              
          <tr>
                    <th>NE</th>
                    <th>Nombre del Evaluado</th>
                    <th>Nivel</th>
                    <th>Puesto Funcional</th>                    
          </tr>
          <tr>              
                    <td>{!! $eval->num_emp !!}</td>
                    <td>{!! $eval->nombre !!}</td>
                    <td>{!! $eval->nivel !!}</td>
                    <td>{!! $eval->puesto_funcional !!}</td>                    
               </tr> 
     </table>
          <br>
          <p class=MsoHeader align=center style='margin-left:-36.0pt;text-align:center'><b
               style='mso-bidi-font-weight:normal'><span lang=ES style='mso-bidi-font-size:
               10.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;letter-spacing:
               6.0pt'>INSTRUCCIONES<o:p></o:p></span></b>
          </p>
          <p class=MsoHeader align=center style='margin-left:-36.0pt;text-align:center'><b
               style='mso-bidi-font-weight:normal'><span lang=ES style='font-size:11.0pt;
               mso-bidi-font-size:10.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:
               Tahoma;letter-spacing:6.0pt'><o:p>&nbsp;</o:p></span></b>
          </p>

          <p class=MsoHeader style='text-align:justify'><span lang=ES style='font-size:
               11.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:
               Tahoma'>Llenar todos los apartados de la evaluación. <span
               style='mso-spacerun:yes'> </span>En el apartado I se presentan <span
               class=GramE>30 <span style='mso-spacerun:yes'> </span>reactivos</span> que
               deben de ser llenados con <b style='mso-bidi-font-weight:normal'>puntaje del 1
               al 5</b> según sea el grado de dominio de la capacidad, como se indica a
               continuación:<o:p></o:p></span>
          </p>
          <p class=MsoHeader style='margin-right:-35.1pt;text-align:justify'><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span>
          </p>
          <div align=center>
          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=485
               style='width:363.75pt;background:#F3F3F3;border-collapse:collapse;border:none;
               mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
               mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
                    <td width=107 style='width:80.25pt;border:solid windowtext 1.0pt;mso-border-alt:
                      solid windowtext .5pt;background:#E0E0E0;padding:0cm 3.5pt 0cm 3.5pt'>
                         <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
                         style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
                         mso-bidi-font-family:Tahoma'>Puntaje<o:p></o:p></span></b>
                         </p>
                    </td>
                    <td width=180 style='width:135.0pt;border:solid windowtext 1.0pt;border-left:
                         none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                         background:#E0E0E0;padding:0cm 3.5pt 0cm 3.5pt'>
                         <h2><b>
                         <span lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;
                         font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black;
                         mso-color-alt:windowtext'>Grado de dominio de la capacidad
                         </span></b><b>
                         <span
                         lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
                         mso-bidi-font-family:Tahoma'><o:p></o:p></span></b></h2>
                    </td>
                    <td width=198 style='width:148.5pt;border:solid windowtext 1.0pt;border-left:
                         none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                    background:#E0E0E0;padding:0cm 3.5pt 0cm 3.5pt'>
                    <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
                    style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
                    mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>Definición de la Conducta o Comportamiento</span></b><b><span lang=ES style='font-size:
                    9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:
                    Tahoma'><o:p></o:p></span></b></p>
          </td>
          </tr>
          <tr style='mso-yfti-irow:1;height:10.4pt'>
          <td width=107 style='width:80.25pt;border:solid windowtext 1.0pt;border-top:
               none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
               padding:0cm 3.5pt 0cm 3.5pt;height:10.4pt'>
               <p class=MsoNormal align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>1</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=180 style='width:135.0pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.4pt'>
          <p class=MsoHeader align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>Deficiente</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=198 style='width:148.5pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.4pt'>
          <p class=MsoNormal><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
               8.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;
               color:black;mso-color-alt:windowtext'>Negligencia e irresponsabilidad </span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          </tr>
          <tr style='mso-yfti-irow:2;height:14.2pt'>
          <td width=107 style='width:80.25pt;border:solid windowtext 1.0pt;border-top:
               none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
               padding:0cm 3.5pt 0cm 3.5pt;height:14.2pt'>
          <p class=MsoNormal align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>2</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=180 style='width:135.0pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.2pt'>
          <p class=MsoHeader align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>Insuficiente</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=198 style='width:148.5pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.2pt'>
          <p class=MsoNormal><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
               8.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;
               color:black;mso-color-alt:windowtext'>Inconsistencia </span><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          </tr>
          <tr style='mso-yfti-irow:3;height:13.0pt'>
          <td width=107 style='width:80.25pt;border:solid windowtext 1.0pt;border-top:
               none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
               padding:0cm 3.5pt 0cm 3.5pt;height:13.0pt'>
          <p class=MsoNormal align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>3</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=180 style='width:135.0pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.0pt'>
          <p class=MsoHeader align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>Suficiente</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=198 style='width:148.5pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.0pt'>
          <p class=MsoNormal><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
               8.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;
               color:black;mso-color-alt:windowtext'>Consistencia</span><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          </tr>
          <tr style='mso-yfti-irow:4;height:13.9pt'>
          <td width=107 style='width:80.25pt;border:solid windowtext 1.0pt;border-top:
               none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
               padding:0cm 3.5pt 0cm 3.5pt;height:13.9pt'>
          <p class=MsoNormal align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>4</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=180 style='width:135.0pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.9pt'>
          <p class=MsoHeader align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>Competente</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=198 style='width:148.5pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.9pt'>
          <p class=MsoNormal><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
               8.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;
               color:black;mso-color-alt:windowtext'>Constante y apropiada </span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          </tr>
          <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:14.1pt'>
          <td width=107 style='width:80.25pt;border:solid windowtext 1.0pt;border-top:
               none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
               padding:0cm 3.5pt 0cm 3.5pt;height:14.1pt'>
          <p class=MsoNormal align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>5</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=180 style='width:135.0pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.1pt'>
          <p class=MsoHeader align=center style='text-align:center'><span lang=ES
               style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma;color:black;mso-color-alt:windowtext'>Sobresaliente</span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          <td width=198 style='width:148.5pt;border-top:none;border-left:none;
               border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
               mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.1pt'>
          <p class=MsoNormal><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
               8.0pt;font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;
               color:black;mso-color-alt:windowtext'>Perseverancia y tenacidad </span><span
               lang=ES style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:"Calibri",sans-serif;
               mso-bidi-font-family:Tahoma'><o:p></o:p></span></p>
          </td>
          </tr>
          </table>
          </div>
          <div>
          <br>
          <br>
          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
          style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
          mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
               height:8.6pt'>
                    <td width=560 style='width:1.0cm;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:7.6pt'>               
                   <b>
                       <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                             mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                             APARTADO I:      EVALUACIÓN DE LA CAPACIDAD GENERAL Y VISIÓN DE GOBIERNO
                        </span>
                    </b>
               </td>
               </tr>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
               height:8.6pt'>
               <td width=560 style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                             mso-bidi-font-family:Arial'>
               <strong> CAPACIDAD GENERAL: 
               </strong>
               CONJUNTO DE HABILIDADES QUE ESTÁN FUNDAMENTALMENTE REFERIDAS
               A LAS CARACTERÍSTICAS DEL COMPORTAMIENTO GENERAL DEL SUJETO EN EL PUESTO DE TRABAJO
               </td>
               </tr>

          </table>
          <br>       
          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
                style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
               mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
                    <td width=617 style='width:19.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Tahoma'>Capacidad organizativa: Consiste en planear,
                                   ordenar y coordinar las acciones de trabajo; sean propias o ajenas.
                              </span>
                         </b>
                    </td>
                     <td width=16 style='width:1.0cm;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Puntaje 
                              </span>
                         </b>
                    </td>
               </tr>
               <tr style='mso-yfti-irow:1;height:13.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:13.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>1. Conoce
                              muy bien las responsabilidades, funciones y objetivo de su puesto.
                         </p>
                    </td>
                    <td width=6 style='width:2.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:13.35pt'>  
                         <input min="1" max="5" step="1" type="number" 
                         onblur= "myFunction2();" onInput="myFunction();" maxlength="1" id="r1"  name= "r1" 
                         value="{{$eval->r1}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:2;height:16.55pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.55pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>2. Organiza
                              sus tareas y actividades a corto plazo distribuyendo el tiempo adecuadamente.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.55pt'>
                         <input disabled min="1" max="5" step="1"  type="number" 
                         onblur= "myFunction2();" onInput="myFunction();" maxlength="1" id="r2" name="r2" 
                         value="{{$eval->r2}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:3;height:17.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:17.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>3. Realiza
                              y termina su trabajo oportunamente y se preocupa por ponerlo al corriente
                              cuando por cualquier circunstancia se haya retrasado y haya ocasionado
                              rezago.
                         </p>  
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         <input disabled  min="1" max="5" step="1" type="number" 
                         onblur= "myFunction2();"  onInput="myFunction();" maxlength="1" id="r3" name= "r3" value="{{$eval->r3}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:4;height:15.0pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>4. Informa
                              de los resultados a su jefe inmediato.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:15.0pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r4"  name= "r4" value="{{$eval->r4}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:5;height:16.15pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.15pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>5. Apoya
                              a su jefe inmediato en las actividades propias del área.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.15pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r5" name= "r5" value="{{$eval->r5}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:6;height:15.95pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:15.95pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>6. Presenta
                              una actitud abierta a los nuevos retos o variables que se le presentan.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:15.95pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number"
                         onchange="myFunction();" maxlength="1" id="r6"  name= "r6" value="{{$eval->r6}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:20.3pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:20.3pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>7. Antepone
                              el trabajo a las actividades personales.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:20.3pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r7" name= "r7"  value="{{$eval->r7}}">
                    </td>
               </tr>
          </table>

          <br>
          <br>

          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
               style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
               mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif;
                                        mso-bidi-font-family:Tahoma'>Actitud de Servicio: Hace el trabajo con una mentalidad de 
                                        eficiente atención al usuario, considerando a éste último como cualquier persona que 
                                        requiera de su servicio.
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Puntaje 
                              </span>
                         </b>
                    </td>
               </tr>
               <tr style='mso-yfti-irow:1;height:13.35pt'>
                    <td width=617 style='width:65.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:13.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>8. Crea y mantiene una buena 
                              relación con quienes podrían requerir de sus servicios.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:13.35pt'>  
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r8" name= "r8"  value="{{$eval->r8}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:2;height:16.55pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.55pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>9. Toma la iniciativa 
                              y se preocupa por escuchar y atender las demandas de sus usuarios.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.55pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r9" name= "r9" value="{{$eval->r9}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:3;height:17.35pt'>
                    <td width=567 style='width:15.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:17.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>10. Es atento(a) 
                              y observador(a) ante lo que se le solicita.
                         </p>  
                    </td>
                    <td width=76 style='width:2.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r10" name= "r10" value="{{$eval->r10}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:4;height:15.0pt'>
                    <td width=567 style='width:15.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
                         <p class=MsoListParagraph  style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>11. Se interese 
                              por conocer la información que se necesita para el logro de sus tareas.
                         </p>
                    </td>
                    <td width=76 style='width:2.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:15.0pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r11" name= "r11" value="{{$eval->r11}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:5;height:16.15pt'>
                    <td width=567 style='width:15.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.15pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>12. Brinda 
                              una adecuada orientación a sus usuarios, proporcionando información confiable.
                         </p>
                    </td>
                    <td width=76 style='width:2.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.15pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r12" name= "r12" value="{{$eval->r12}}">
                    </td>
               </tr>
          </table>

          <br>
          <br>
     
          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
               style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
               mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Tahoma'>Toma de Decisiones: Capacidad para tomar decisiones acertadas y oportunas, empleando la experiencia y el análisis de las situaciones considerando los siguientes aspectos: certeza, control, orden y rapidez.
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Puntaje 
                              </span>
                         </b>
                    </td>
               </tr>
               <tr style='mso-yfti-irow:2;height:16.55pt'>
                    <td width=567 style='width:15.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.55pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>13. Actúa, 
                              en tiempo y forma, evitando demoras y agravamientos de los problemas.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.55pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r13" name= "r13" value="{{$eval->r13}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:3;height:17.35pt'>
                    <td width=567 style='width:15.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:17.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>14. Ayuda 
                              a solucionar problemas que entorpecen su tarea cotidiana.
                         </p>  
                    </td>
                    <td width=76 style='width:2.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r14" name= "r14" value="{{$eval->r14}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:4;height:15.0pt'>
                    <td width=567 style='width:15.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
                         <p class=MsoListParagraph  style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>15. Propone 
                              nuevas ideas para mejorar sus actividades, el servicio o los procesos.
                         </p>
                    </td>
                    <td width=76 style='width:2.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:15.0pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r15" name= "r15" value="{{$eval->r15}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:5;height:16.15pt'>
                    <td width=567 style='width:15.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.15pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>16. Toma 
                              decisiones acertadas respecto de sus actividades aun y cuando se encuentra bajo presión.
                         </p>
                    </td>
                    <td width=76 style='width:2.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.15pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r16" name= "r16" value="{{$eval->r16}}">
                    </td>
               </tr>
          </table>

          <br>
          <br>
     
          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
               style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
               mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Tahoma'>Trabajo en equipo: Capacidad para trabajar 
                                   con otras personas de manera armónica y eficiente con orientación al 
                                   logro de las tareas y objetivos definidos.
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Puntaje 
                              </span>
                         </b>
                    </td>
               </tr>
               <tr style='mso-yfti-irow:1;height:13.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:13.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>17. Es participativo 
                              y está siempre dispuesto al intercambio de información con sus compañeros de equipo.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:13.35pt'>  
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r17" name= "r17" value="{{$eval->r17}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:2;height:16.55pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.55pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>18. Antepone 
                              los intereses grupales a los personales.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.55pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r18" name= "r18" value="{{$eval->r18}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:3;height:17.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:17.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>19. Presenta 
                              una actitud abierta a los nuevos retos o variables que se le presentan.
                         </p>  
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r19" name= "r19" value="{{$eval->r19}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:4;height:15.0pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
                         <p class=MsoListParagraph  style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>20. Es abierto 
                              a recibir a nuevos compañeros en su área de trabajo..
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:15.0pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         onchange="myFunction();" maxlength="1" id="r20" name= "r20" value="{{$eval->r20}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:5;height:16.15pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.15pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>21. Trabaja 
                              en los proyectos del área cumpliendo con las expectativas planteadas.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.15pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r21" name= "r21" value="{{$eval->r21}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:5;height:16.15pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.15pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>22. Evita 
                              actos u omisiones que pudieran poner en peligro el desempeño, la seguridad y la integridad física y moral de sus compañeros de trabajo.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.15pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                          maxlength="1" id="r22" name= "r22" value="{{$eval->r22}}">
                    </td>
               </tr>
          </table>

          <br>
          <br>

          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
               style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
               mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Tahoma'>Manejo de herramientas de trabajo: 
                                   Capacidad para manejar eficientemente las herramientas de trabajo 
                                   (Equipo, programas computacionales, maquinaria, mobiliario, vehículos 
                                   y útiles de trabajo) que permitan el desarrollo efectivo de las 
                                   funciones de su puesto.
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Puntaje 
                              </span>
                         </b>
                    </td>
               </tr>
               <tr style='mso-yfti-irow:1;height:13.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:13.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>23. Utiliza 
                              de manera eficiente y productiva las herramientas de trabajo para la realización de 
                              sus actividades.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:13.35pt'>  
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r23" name= "r23"  value="{{$eval->r23}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:2;height:16.55pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.55pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>24. Se interesa 
                              por mejorar el conocimiento y dominio de las herramientas de trabajo.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.55pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r24" name= "r24" value="{{$eval->r24}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:3;height:17.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:17.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>25. Trata 
                              con cuidado y conserva las herramientas que se le han proporcionado para el desempeño 
                              de sus funciones.
                         </p>  
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r25" name= "r25" value="{{$eval->r25}}">
                    </td>
               </tr>               
          </table>
          
          <br>

          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
          style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
          mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>               
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
               height:8.6pt'>
               <td width=560 style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                             mso-bidi-font-family:Arial'>
          <strong>VISIÓN DE GOBIERNO:
          </strong>
          <br> SE EVALÚA QUE SE DESEMPEÑE UN TRABAJO INSTITUCIONAL  EN APEGO A LA NORMATIVIDAD  
          <br> QUE COMO SERVIDOR PÚBLICO DEBA DE ACATAR.
               </td>
               </tr>

          </table>

          <br>

          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
               style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
               mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Tahoma'>Trabajo institucional..
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Puntaje 
                              </span>
                         </b>
                    </td>
               </tr>
               <tr style='mso-yfti-irow:1;height:13.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:13.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>26. En 
                              su actuar diario se refleja el apego al cumplimiento de la normatividad que como 
                              servidor público debe de acatar.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:13.35pt'>  
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r26" name= "r26" value="{{$eval->r26}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:2;height:16.55pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:16.55pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>27. Reconoce 
                              abiertamente sus errores y se responsabiliza de las consecuencias negativas de los 
                              mismos realizando acciones para su corrección.
                         </p>
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:16.55pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r27" name= "r27" value="{{$eval->r27}}">
                    </td>
               </tr>
               <tr style='mso-yfti-irow:3;height:17.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:17.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>28. Asume 
                              como propios los objetivos institucionales, sintiéndose totalmente identificado con 
                              ellos y busca constantemente mejorar la calidad y la eficiencia de su área.
                         </p>  
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r28" name= "r28" value="{{$eval->r28}}">
                    </td>
               </tr>               
               <tr style='mso-yfti-irow:3;height:17.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:17.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>29. Se 
                              preocupa por mejorar la imagen del Gobierno del Estado y guarda reserva en relación 
                              con los asuntos que conozca con motivo de su trabajo.
                         </p>  
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r29" name= "r29" value="{{$eval->r29}}">
                    </td>
               </tr>               
               <tr style='mso-yfti-irow:3;height:17.35pt'>
                    <td width=617 style='width:16.0cm;padding:0cm 3.5pt 0cm 3.5pt;height:17.35pt'>
                         <p class=MsoListParagraph style='font-size:9.0pt;
                              font-family:"Calibri",sans-serif;mso-bidi-font-family:Tahoma;color:black'>30. Desempeña 
                              su trabajo con la intensidad, cuidado y esmero apropiados, guardando siempre la 
                              subordinación debida a sus superiores.
                         </p>  
                    </td>
                    <td width=26 style='width:1.0cm;border:none;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         <input onblur= "myFunction2();" oninput="myFunction();" disabled min="1" max="5" step="1" type="number" 
                         maxlength="1" id="r30" name= "r30" value="{{$eval->r30}}">
                    </td>
               </tr>               
          </table>

          <br>
          
          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
          style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
          mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
               height:8.6pt'>
               <td width=560 style='width:1.0cm;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:7.6pt'>               
                   <b>
                       <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                             mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>APARTADO II:   
                             RESULTADOS
                        </span>
                    </b>
               </td>
              </tr>
     </table>

     <br>
     
          <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
               style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
               mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:8.6pt'>
                    <td width=560 style='width:1.0cm;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:7.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>CAPACIDAD 
                                   GENERAL: CONJUNTO DE HABILIDADES QUE ESTÁN FUNDAMENTALMENTE REFERIDAS A 
                                   LAS CARACTERÍSTICAS DEL COMPORTAMIENTO GENERAL DEL SUJETO EN EL PUESTO 
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>MAXIMO DE PUNTOS 
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>PUNTAJE OBTENIDO
                              </span>
                         </b>
                    </td>
               </tr>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>               
                         <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>
                         
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Capacidad 
                                   organizativa: Consiste en planear, ordenar y coordinar las acciones de trabajo; 
                                   sean propias o ajenas.
                         </span>          
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>35 
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span 
                                   id = "IDcap_org" 
                                   lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   {{$eval->r1+$eval->r2+$eval->r3+$eval->r4+$eval->r5+$eval->r6+$eval->r7}} 
                              </span>
                         </b>
                    </td>                    
               </tr>

               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
                    <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:17.35pt'>
                         
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Actitud 
                                   de Servicio: Hace el trabajo con una mentalidad de eficiente atención al 
                                   usuario, considerando a éste último como cualquier persona que requiera 
                                   de su servicio.
                         </span>          
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>25 
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span
                                   id = "IDact_ser"  
                                   lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   {{$eval->r8+$eval->r9+$eval->r10+$eval->r11+$eval->r12}} 
                              </span>
                         </b>
                    </td>                    
               </tr>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>               
                         <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>
                         
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Toma de 
                                   Decisiones: Capacidad para tomar decisiones acertadas y oportunas, empleando 
                                   la experiencia y el análisis de las situaciones considerando los siguientes 
                                   aspectos: certeza, control, orden y rapidez.
                         </span>          
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>20 
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span 
                                   id = "IDtom_des"  
                                   lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   {{$eval->r13+$eval->r14+$eval->r15+$eval->r16}} 
                              </span>
                         </b>
                    </td>                    
               </tr>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>               
                         <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>
                         
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Trabajo 
                                   en equipo: Capacidad para trabajar con otras personas de manera armónica 
                                   y eficiente con orientación al logro de las tareas y objetivos definidos.
                         </span>          
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>30 
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span 
                                   id = "IDtra_equ"  
                                   lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   {{$eval->r17+$eval->r18+$eval->r19+$eval->r20+$eval->r21+$eval->r22}} 
                              </span>
                         </b>
                    </td>                    
               </tr>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>               
                         <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>                         
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>Manejo 
                                   de herramientas de trabajo: Capacidad para manejar eficientemente las 
                                   herramientas de trabajo (Equipo, programas computacionales, maquinaria, 
                                   mobiliario, vehículos y útiles de trabajo) que permitan el desarrollo 
                                   efectivo de las funciones de su puesto.
                         </span>          
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>15
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span 
                                   id = "IDman_her"  
                                   lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   {{$eval->r23+$eval->r24+$eval->r25}} 
                              </span>
                         </b>
                    </td>                    
               </tr>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>                                  
                    <td width=560 style='width:1.0cm;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:7.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>VISIÓN DE 
                                   GOBIERNO: SE EVALUA QUE SE DESEMPEÑE UN TRABAJO INSTITUCIONAL EN APEGO A LA 
                                   NORMATIVIDAD QUE COMO SERVIDOR PÚBLICO DEBA DE ACATAR.
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>MAXIMO DE PUNTOS 
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>PUNTAJE OBTENIDO
                              </span>
                         </b>
                    </td>         
               </tr>
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>               
                    <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>                         
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   Trabajo institucional.
                        </span>          
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>25
                              </span>
                         </b>
                    </td>
                    <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                         <b>
                              <span 
                                   id = "IDtra_ins"  
                                   lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   {{$eval->r26+$eval->r27+$eval->r28+$eval->r29+$eval->r30}}
                              </span>
                         </b>
                    </td>                    
               </tr>
          </table>
     </div>
     <div>

     <br>
     <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
          style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
          mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
               height:8.6pt'>
               <td width=26 style='width:1.0cm;text-align:right;border:none;padding:0cm 3.5pt 0cm 3.5pt;
                    height:18.6pt'>
                  <b>
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>TOTAL DE PUNTOS:
                         </span>
                  </b>
               </td>
               <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                    height:18.6pt'>
                  <b>
                         <span id = "IDsuma" lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                           mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                              {{$eval->suma}}
                         </span>                         
                    </b>
               </td>
          </tr>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
               height:8.6pt'>
               <td width=26 style='width:1.0cm;text-align:right;border:none;padding:0cm 3.5pt 0cm 3.5pt;
                    height:18.6pt'>
                  <b>
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                PUNTUACIÓN PROMEDIO:
                         </span>
                  </b>
               </td>
               <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
                    height:18.6pt'>
                  <b>
                         <span id= "IDpromedio" lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                           mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                           {{$eval->promedio}}
                         </span>
                    </b>
               </td>
          </tr>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
               height:8.6pt'>
               <td width=26 style='width:1.0cm;text-align:right;border:none;padding:0cm 3.5pt 0cm 3.5pt;
                    height:18.6pt'>
                  <b>
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>GRADO DE DOMINIO:
                         </span>
                  </b>
               </td>
               <td width=26 style='width:1.0cm;text-align:center;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:18.6pt'>
                  <b>
                         <span id= "IDgrado_dominio"                               
                              lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                           mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                           {{$eval->grado_dominio}}
                         </span>
                    </b>
               </td>
          </tr>          
     </table>
     <br>
     <br>
     <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
          style='margin-left:3.5pt;border-collapse:collapse;mso-table-layout-alt:fixed;
          mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
               height:8.6pt'>
               <td width=560 style='width:1.0cm;border:solid windowtext 1.0pt;background:#D9D9D9;mso-background-themecolor:
                         background1;mso-background-themeshade:217;padding:0cm 3.5pt 0cm 3.5pt;
                         height:7.6pt'>               
                   <b>
                       <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                             mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>APARTADO III:   AREAS DE OPORTUNIDAD
                        </span>
                    </b>
               </td>
          </tr>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>                                  
               <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>                         
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   Breve descripción de las áreas de oportunidad que requiere el evaluado para fortalecer 
                                   su desempeño como  servidor público, ya sea mediante acciones de capacitación u otro 
                                   tipo de acciones de desarrollo.
                        </span>          
               </td>
          </tr>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>                                  
               <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>
                         <textarea  oninput="myFunction();" disabled 
                              id="areas_opor" name="areas_opor" cols="80" rows="5" >
                             {{$eval->areas_opor}}
                         </textarea>
               </td>
          </tr>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
               <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>                         
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                                   Nombre del Representante Sindical (si aplica).
                        </span>
               </td>
          <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>
               <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                         mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
                         mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
                         height:17.35pt'>
                         <span lang=ES style='font-size:8.0pt;font-family:"Calibri",sans-serif;
                                   mso-bidi-font-family:Arial;color:black;mso-color-alt:windowtext'>
                              <input type="text" id="nom_repr"  name= "nom_repr" value="{{$eval->nom_repr}}">
                         </span>
               </td>
          </tr>          
     </table>
     <br>
     <br>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
                    height:18.6pt'>                                  
          <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
               mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
               height:17.35pt'>
               <input oninput="myFunction();"  disabled id="BtnGrabar2" type="submit" 
                     class="btn btn-primary" value="Grabar">
           </td>
           <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
               mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
               height:17.35pt'>
               <a href='/imp/{{ $eval->id }}' class="btn btn-primary">Imprimir</a>
          </td>
           <td width=10 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
               mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
               height:17.35pt'>
               <input onclick="myFunction();" id="BtnModificar2" 
               type="button" 
               class="btn btn-primary" value="Modificar">
           </td>
           <td width=570 style='width:1.0cm;border:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
               mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
               mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;                         
               height:17.35pt'>
               <a href="{{ url('/eva2') }}" class="btn btn-primary">Regresar</a>
           </td>
     </tr>
     <br>
     <br>     
     <table class="table table-bordered table-striped">                              
          <tr>
                    <th>NE</th>
                    <th>Nombre del Evaluado</th>                    
                    <th>Nivel</th>
                    <th>Puesto Funcional</th>
          </tr>
          <tr>              
                    <td>{!! $eval->num_emp !!}</td>
                    <td>{!! $eval->nombre !!}</td>
                    <td>{!! $eval->nivel !!}</td>
                    <td>{!! $eval->puesto_funcional !!}</td>                    
               </tr> 
     </table>
     <input type="hidden" id="id" name="id"  value="{{$eval->id}}">
     <input type="hidden" id="fk_cve_periodo" name="fk_cve_periodo"  value="{{$eval->fk_cve_periodo}}">
     <input type="hidden" id="num_emp" name="num_emp"  value="{{$id}}">
     <input type="hidden" id="nombre"  name="nombre" value="{{$eval->nombre}}">
     <input type="hidden" id="puesto_funcional"  name="puesto_funcional" value="{{$eval->puesto_funcional}}">
     <input type="hidden" id="nivel"   name="nivel" value="{{$eval->nivel}}">
     <input type="hidden" id="evaluado"  name="evaluado" value="{{$eval->evaluado}}">
     <input type="hidden" id="fk_ne_jefe"  name="fk_ne_jefe" value="{{$eval->fk_ne_jefe}}">
     <input type="hidden" id="impreso"  name="impreso" value="{{$eval->impreso}}">          
     <input type="hidden" id="correo"  name="correo" value="{{$eval->correo}}">          
     <input type="hidden" id="fk_cve_area"  name="area" value="{{$eval->fk_cve_area}}">
     <input type="hidden" id="validado"  name="validado" value="{{$eval->validado}}">
     <input type="hidden" id="suma"  name= "suma" value="{{$eval->suma}}">
     <input type="hidden" id="promedio"  name= "promedio" value="{{$eval->promedio}}">
     <input type="hidden" id="grado_dominio" name= "grado_dominio" value="{{$eval->grado_dominio}}">

     </form>
</div>
@endsection

<script>
function myFunction() {
     
     var actEle = document.activeElement;     
     var actEleID = actEle.id;

     if (document.getElementById("r1").value > 0 & 
          document.getElementById("r1").value < 6) {  
          document.getElementById("r2").disabled = false;          
     } 
     if (document.getElementById("r2").value > 0 &
          document.getElementById("r2").value < 6 ) {  
          document.getElementById("r3").disabled = false;
     }
     if (document.getElementById("r3").value > 0 &
          document.getElementById("r3").value < 6) {  
          document.getElementById("r4").disabled = false;
     }
     if (document.getElementById("r4").value > 0 &
          document.getElementById("r4").value < 6) {  
          document.getElementById("r5").disabled = false;
     }
     if (document.getElementById("r5").value > 0 &
          document.getElementById("r5").value < 6) {  
          document.getElementById("r6").disabled = false;
     }
     if (document.getElementById("r6").value > 0 &
          document.getElementById("r6").value < 6) {  
          document.getElementById("r7").disabled = false;
     }
     if (document.getElementById("r7").value > 0 &
          document.getElementById("r7").value < 6) {  
          document.getElementById("r8").disabled = false;
     }
     if (document.getElementById("r8").value > 0 &
          document.getElementById("r8").value < 6) {  
          document.getElementById("r9").disabled = false;
     }
     if (document.getElementById("r9").value > 0 &
          document.getElementById("r9").value < 6) {  
          document.getElementById("r10").disabled = false;
     }
     if (document.getElementById("r10").value > 0 &
          document.getElementById("r10").value < 6) {  
          document.getElementById("r11").disabled = false;
     }
     if (document.getElementById("r11").value > 0 &
          document.getElementById("r11").value < 6) {  
          document.getElementById("r12").disabled = false;
     }
     if (document.getElementById("r12").value > 0 &
          document.getElementById("r12").value < 6) {  
          document.getElementById("r13").disabled = false;
     }
     if (document.getElementById("r13").value > 0 &
          document.getElementById("r13").value < 6) {  
          document.getElementById("r14").disabled = false;
     }
     if (document.getElementById("r14").value > 0 &
          document.getElementById("r14").value < 6) {  
          document.getElementById("r15").disabled = false;
     }
     if (document.getElementById("r15").value > 0 &
          document.getElementById("r15").value < 6) {  
          document.getElementById("r16").disabled = false;
     }
     if (document.getElementById("r16").value > 0 &
          document.getElementById("r16").value < 6) {  
          document.getElementById("r17").disabled = false;
     }
     if (document.getElementById("r17").value > 0 &
          document.getElementById("r17").value < 6) {  
          document.getElementById("r18").disabled = false;
     }
     if (document.getElementById("r18").value > 0 &
          document.getElementById("r18").value < 6) {  
          document.getElementById("r19").disabled = false;
     }
     if (document.getElementById("r19").value > 0 &
          document.getElementById("r19").value < 6) {  
          document.getElementById("r20").disabled = false;
     }
     if (document.getElementById("r20").value > 0 &
          document.getElementById("r20").value < 6) {  
          document.getElementById("r21").disabled = false;
     }
     if (document.getElementById("r21").value > 0 &
          document.getElementById("r21").value < 6) {  
          document.getElementById("r22").disabled = false;
     }
     if (document.getElementById("r22").value > 0 &
          document.getElementById("r22").value < 6) {  
          document.getElementById("r23").disabled = false;
     }
     if (document.getElementById("r23").value > 0 &
          document.getElementById("r23").value < 6) {  
          document.getElementById("r24").disabled = false;
     }
     if (document.getElementById("r24").value > 0 &
          document.getElementById("r24").value < 6) {  
          document.getElementById("r25").disabled = false;
     }
     if (document.getElementById("r25").value > 0 &
          document.getElementById("r25").value < 6) {  
          document.getElementById("r26").disabled = false;
     }
     if (document.getElementById("r26").value > 0 &
          document.getElementById("r26").value < 6) {  
          document.getElementById("r27").disabled = false;
     }
     if (document.getElementById("r27").value > 0 &
          document.getElementById("r27").value < 6) {  
          document.getElementById("r28").disabled = false;
     }
     if (document.getElementById("r28").value > 0 &
          document.getElementById("r28").value < 6) {  
          document.getElementById("r29").disabled = false;
     }
     if (document.getElementById("r29").value > 0 &
          document.getElementById("r29").value < 6) {  
          document.getElementById("r30").disabled = false;
     }

     if (document.getElementById("r30").value > 0 &
          document.getElementById("r30").value < 6) {  
          document.getElementById("areas_opor").disabled = false;
     }   

     var r1 = Number(document.getElementById("r1").value);
     var r2 = Number(document.getElementById("r2").value);
     var r3 = Number(document.getElementById("r3").value);
     var r4 = Number(document.getElementById("r4").value);
     var r5 = Number(document.getElementById("r5").value);
     var r6 = Number(document.getElementById("r6").value);
     var r7 = Number(document.getElementById("r7").value);
     var r8 = Number(document.getElementById("r8").value);
     var r9 = Number(document.getElementById("r9").value);
     var r10 = Number(document.getElementById("r10").value);
     var r11 = Number(document.getElementById("r11").value);
     var r12 = Number(document.getElementById("r12").value);
     var r13 = Number(document.getElementById("r13").value);
     var r14 = Number(document.getElementById("r14").value);
     var r15 = Number(document.getElementById("r15").value);
     var r16 = Number(document.getElementById("r16").value);
     var r17 = Number(document.getElementById("r17").value);
     var r18 = Number(document.getElementById("r18").value);
     var r19 = Number(document.getElementById("r19").value);
     var r20 = Number(document.getElementById("r20").value);
     var r21 = Number(document.getElementById("r21").value);
     var r22 = Number(document.getElementById("r22").value);
     var r23 = Number(document.getElementById("r23").value);
     var r24 = Number(document.getElementById("r24").value);
     var r25 = Number(document.getElementById("r25").value);
     var r26 = Number(document.getElementById("r26").value);
     var r27 = Number(document.getElementById("r27").value);
     var r28 = Number(document.getElementById("r28").value);
     var r29 = Number(document.getElementById("r29").value);
     var r30 = Number(document.getElementById("r30").value);

     var suma = r1 + r2 + r3 + r4 +r5 + r6 + r7 + r8 + r9 + r10 + 
          r11 + r12 + r13 + r14 +r15 + r16 + r17 + r18 + r19 + r20 + 
          r21 + r22 + r23 + r24 +r25 + r26 + r27 + r28 + r29 + r30  ;

     var suma2 = suma;

     var IDsuma = document.getElementById("IDsuma"); 
     IDsuma.innerHTML = suma;

     var DBsuma = document.getElementById("suma");
     DBsuma.value = suma2;

     var IDcap_org = document.getElementById("IDcap_org"); 
     IDcap_org.innerHTML = r1 + r2 + r3 + r4 +r5 + r6 + r7;

     var IDact_ser = document.getElementById("IDact_ser"); 
     IDact_ser.innerHTML = r8 + r9 + r10 + r11 +r12;

     var IDtom_des = document.getElementById("IDtom_des"); 
     IDtom_des.innerHTML = r13+ r14 + r15 + r16;

     var IDtra_equ = document.getElementById("IDtra_equ"); 
     IDtra_equ.innerHTML = r17+ r18 + r19 + r20 + r21 + r22;

     var IDman_her = document.getElementById("IDman_her"); 
     IDman_her.innerHTML = r23 + r24 + r25;
     
     var IDtra_ins = document.getElementById("IDtra_ins"); 
     IDtra_ins.innerHTML = r26 + r27 +r28+ r29 + r30;


     var prom = suma / 30;
     var prom2 = prom;
     var prom3 = prom2.toString().substring(0,5);
     

     var IDpromedio = document.getElementById("IDpromedio");
     IDpromedio.innerHTML = prom3;

     var DBpromedio = document.getElementById("promedio");
     DBpromedio.value = prom2;


     var IDgrado_dominio = document.getElementById("IDgrado_dominio");
     
     IDgrado_dominio.innerHTML = "SOBRESALIENTE";

     if (prom < 5) {
          IDgrado_dominio.innerHTML = "COMPETENTE";
     } 
     if (prom < 4) {
          IDgrado_dominio.innerHTML = "SUFICIENTE";
     }
     if (prom < 3) {
          IDgrado_dominio.innerHTML = "INSUFICIENTE";     
     }
     if (prom < 2) {
          IDgrado_dominio.innerHTML = "DEFICIENTE";
     }
     
     var grado_dominio2 = IDgrado_dominio.innerHTML;
     var grado_dominio = document.getElementById("grado_dominio");
     grado_dominio.value = grado_dominio2;
     
    
     var IDareas = document.getElementById("areas_opor");
     var IDareas_opor = IDareas.value.trim();
     var IDareas_len= IDareas_opor.length;

     if  ( IDareas_len > 20) {
          document.getElementById("BtnGrabar").disabled = false;
          document.getElementById("BtnGrabar2").disabled = false;
     } else{
          document.getElementById("BtnGrabar").disabled = true;
          document.getElementById("BtnGrabar2").disabled = true;
     }

     
     var actDis = document.getElementById("areas_opor").disabled;
     
     //window.alert(actDis);  

     if ( actEleID === "r1")  {         
          window.alert("Deberá capturar los 30 parámetros para abrir el campo de Areas de oportunidad");

     }
     if ( actEleID === "r30")  {                  
          window.alert("Deberá capturar al menos 20 caracteres en Areas de Oportunidad para activar el botón de Guardar");
          var IDr1 = document.getElementById("areas_opor");
          IDr1.focus();
          document.getElementById("areas_opor").disabled = false;
     }

     if( actEleID==="BtnModificar" | actEleID==="BtnModificar2" ) {
          document.getElementById("r1").disabled = false;
          document.getElementById("r2").disabled = false;
          document.getElementById("r3").disabled = false;
          document.getElementById("r4").disabled = false;
          document.getElementById("r5").disabled = false;
          document.getElementById("r6").disabled = false;
          document.getElementById("r7").disabled = false;
          document.getElementById("r8").disabled = false;
          document.getElementById("r9").disabled = false;
          document.getElementById("r10").disabled = false;
          document.getElementById("r11").disabled = false;
          document.getElementById("r12").disabled = false;
          document.getElementById("r13").disabled = false;
          document.getElementById("r14").disabled = false;
          document.getElementById("r15").disabled = false;
          document.getElementById("r16").disabled = false;
          document.getElementById("r17").disabled = false;
          document.getElementById("r18").disabled = false;
          document.getElementById("r19").disabled = false;
          document.getElementById("r20").disabled = false;
          document.getElementById("r21").disabled = false;
          document.getElementById("r22").disabled = false;
          document.getElementById("r23").disabled = false;
          document.getElementById("r24").disabled = false;
          document.getElementById("r25").disabled = false;
          document.getElementById("r26").disabled = false;
          document.getElementById("r27").disabled = false;
          document.getElementById("r28").disabled = false;
          document.getElementById("r29").disabled = false;
          document.getElementById("r30").disabled = false;
          var IDr1 = document.getElementById("r1");
          IDr1.focus();     
     }
    // aqui entra desde r1 a r30
    if ( substr(actEleID,0,1) === "r") {
          // todos tienen maxLemght = 1
          if(actEle.value.length > actEle.maxLength) {          
               actEle.value = actEle.value.slice(0, actEle.maxLength);
          }
     }    
}


function myFunction2() {
     //window.alert("Blur");
     var IDr1 = document.getElementById("r1");
     var IDr2 = document.getElementById("r2");
     var IDr3 = document.getElementById("r3");
     var IDr4 = document.getElementById("r4");
     var IDr5 = document.getElementById("r5");
     var IDr6 = document.getElementById("r6");
     var IDr7 = document.getElementById("r7");
     var IDr8 = document.getElementById("r8");
     var IDr9 = document.getElementById("r9");
     var IDr10 = document.getElementById("r10");
     var IDr11 = document.getElementById("r11");
     var IDr12 = document.getElementById("r12");
     var IDr13 = document.getElementById("r13");
     var IDr14 = document.getElementById("r14");
     var IDr15 = document.getElementById("r15");
     var IDr16 = document.getElementById("r16");
     var IDr17 = document.getElementById("r17");
     var IDr18 = document.getElementById("r18");
     var IDr19 = document.getElementById("r19");
     var IDr20 = document.getElementById("r20");
     var IDr21 = document.getElementById("r21");
     var IDr22 = document.getElementById("r22");
     var IDr23 = document.getElementById("r23");
     var IDr24 = document.getElementById("r24");
     var IDr25 = document.getElementById("r25");
     var IDr26 = document.getElementById("r26");
     var IDr27 = document.getElementById("r27");
     var IDr28 = document.getElementById("r28");
     var IDr29 = document.getElementById("r29");
     var IDr30 = document.getElementById("r30");
     // todos tienen maxLemght = 1

     if (IDr30.value < 1 || IDr30.value > 5) {
          IDr30.focus();
          return;
     }
     if (IDr29.value < 1 || IDr29.value > 5) {
          IDr29.focus();
          return;
     }
     if (IDr28.value < 1 || IDr28.value > 5) {
          IDr28.focus();
          return;
     }
     if (IDr27.value < 1 || IDr27.value > 5) {
          IDr27.focus();
          return;
     }
     if (IDr26.value < 1 || IDr26.value > 5) {
          IDr26.focus();
          return;
     }

     if (IDr25.value < 1 || IDr25.value > 5) {
          IDr25.focus();
          return;
     }
     
     if (IDr24.value < 1 || IDr24.value > 5) {
          IDr24.focus();
          return;
     }
     if (IDr23.value < 1 || IDr23.value > 5) {
          IDr23.focus();
          return;
     }
     if (IDr22.value < 1 || IDr22.value > 5) {
           IDr22.focus();
           return;
     }
     if (IDr21.value < 1 || IDr21.value > 5) {
           IDr21.focus();
           return;
     }
     if (IDr20.value < 1 || IDr20.value > 5) {
          IDr20.focus();
          return;
     }
     if (IDr19.value < 1 || IDr19.value > 5) {
          IDr19.focus();
          return;
     }
     if (IDr18.value < 1 || IDr18.value > 5) {
          IDr18.focus();
          return;
     }
     if (IDr17.value < 1 || IDr17.value > 5) {
          IDr17.focus();
          return;
     }
     if (IDr16.value < 1 || IDr16.value > 5) {
          IDr16.focus();
          return;
     }

     if (IDr15.value < 1 || IDr15.value > 5) {
          IDr15.focus();
          return;
     }
     
     if (IDr14.value < 1 || IDr14.value > 5) {
          IDr14.focus();
          return;
     }
     if (IDr13.value < 1 || IDr13.value > 5) {
          IDr13.focus();          
          return;
     }
     if (IDr12.value < 1 || IDr12.value > 5) {
           IDr12.focus();
           return;
     }
     if (IDr11.value < 1 || IDr11.value > 5) {
           IDr11.focus();
           return;
     }

     if (IDr10.value < 1 || IDr10.value > 5) {
          IDr10.focus();
          return;
     }
     if (IDr9.value < 1 || IDr9.value > 5) {
          IDr9.focus();
          return;
     }
     if (IDr8.value < 1 || IDr8.value > 5) {
          IDr8.focus();
          return;
     }
     if (IDr7.value < 1 || IDr7.value > 5) {
          IDr7.focus();
          return;
     }
     if (IDr6.value < 1 || IDr6.value > 5) {
          IDr6.focus();
          return;
     }

     if (IDr5.value < 1 || IDr5.value > 5) {
          IDr5.focus();
          return;
     }
     
     if (IDr4.value < 1 || IDr4.value > 5) {
          IDr4.focus();
          return;
     }
     if (IDr3.value < 1 || IDr3.value > 5) {
          IDr3.focus();          
          return;
     }
     if (IDr2.value < 1 || IDr2.value > 5) {
           IDr2.focus();
           return;
     }
     if (IDr1.value < 1 || IDr1.value > 5) {
           IDr1.focus();
           return;
     }
}
</script>
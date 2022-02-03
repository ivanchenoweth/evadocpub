<?php 
   // dd($evaluado);
?>

@foreach($evaluado as $eva)
@endforeach

<?php 
    //dd($eva);
?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns:m="https://schemas.microsoft.com/office/2004/12/omml"
xmlns="https://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">

<style>
    /* Hereda la variable evaluado 

    'evaluados.id',
            'evaluados.fk_cve_periodo',
            'periodos.cve_periodo',
            'periodos.descripcion as des_periodo',
            'evaluados.num_emp',
            'evaluados.nombre',
            'evaluados.puesto',
            'evaluados.puesto_funcional',
            'evaluados.nivel',
            'evaluados.fk_ne_jefe',
            'evaluados.evaluado',
            'evaluados.nom_repr',
            'evaluados.impreso',
            'evaluados.r1 a r30',
            'evaluados.suma',
            'evaluados.promedio',
            'evaluados.areas_opor',
            'evaluados.correo',
            'evaluados.grado_dominio',
            'dependencias.descripcion as dependencia',
            'unidades.descripcion as unidad_admva',
            'areas.descripcion as area',
            'evaluados.fecha_eva',
            'evaluados.fecha_imp',
            'evaluados.fecha_val',
            'tipo_dependencia.descripcion as tipo_dependencia'
    */

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
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
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
p.msonormal0, li.msonormal0, div.msonormal0
	{mso-style-name:msonormal;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
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
@page WordSection1
	{size:1008.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:36.0pt 36.0pt 36.0pt 36.0pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
</style>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Tabla normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
</style>

</head>

<body lang=ES-MX style='tab-interval:35.4pt;word-wrap:break-word'>

<div class=WordSection1>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=1134
 style='width:850.55pt;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.0pt'>
  <td width=101 nowrap valign=bottom style='width:75.5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'>
 
  <table cellpadding=0 cellspacing=0 align=left>
   <tr>
    <td width=21 height=5></td>
   </tr>
   <tr>
    <td></td>
    <td><img width=69 height=69 src="/images/escudo.png"
    alt="untitled.png" v:shapes="Imagen_x0020_3"></td>    
   </tr>
  </table>
  </span>
  <span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'><o:p>&nbsp;</o:p></span></p>
  <br style='mso-ignore:vglayout' clear=ALL>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
   style='mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
    height:15.0pt'>
    <td width=99 nowrap valign=bottom style='width:74.0pt;border:solid white 1.0pt;
    mso-border-alt:solid white .5pt;padding:0cm 0cm 0cm 0cm;height:15.0pt'>
    <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
    style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
    mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
    mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0cm'><o:p></o:p></p>
  </td>
  <td width=339 nowrap valign=bottom style='width:254.05pt;border:solid white 1.0pt;
  border-left:none;mso-border-top-alt:solid white .5pt;mso-border-bottom-alt:
  solid white .5pt;mso-border-right-alt:solid white .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 nowrap valign=bottom style='width:97.0pt;border:solid white 1.0pt;
  border-left:none;mso-border-top-alt:solid white .5pt;mso-border-bottom-alt:
  solid white .5pt;mso-border-right-alt:solid white .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=140 nowrap valign=bottom style='width:105.0pt;border:solid white 1.0pt;
  border-left:none;mso-border-top-alt:solid white .5pt;mso-border-bottom-alt:
  solid white .5pt;mso-border-right-alt:solid white .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=93 nowrap valign=bottom style='width:70.0pt;border:solid white 1.0pt;
  border-left:none;mso-border-top-alt:solid white .5pt;mso-border-bottom-alt:
  solid white .5pt;mso-border-right-alt:solid white .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=143 nowrap style='width:107.0pt;border:solid white 1.0pt;
  border-left:none;mso-border-top-alt:solid white .5pt;mso-border-bottom-alt:
  solid white .5pt;mso-border-right-alt:solid white .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=189 nowrap valign=bottom style='width:142.0pt;border:solid white 1.0pt;
  border-left:none;mso-border-top-alt:solid white .5pt;mso-border-bottom-alt:
  solid white .5pt;mso-border-right-alt:solid white .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:15.0pt'>
  <td width=101 nowrap valign=bottom style='width:75.5pt;border:solid white 1.0pt;
  border-top:none;mso-border-left-alt:solid white .5pt;mso-border-bottom-alt:
  solid white .5pt;mso-border-right-alt:solid white .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=339 nowrap valign=bottom style='width:254.05pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>SUBSECRETARÍA DE RECURSOS HUMANOS<o:p></o:p></span></b></p>
  </td>
  <td width=129 nowrap valign=bottom style='width:97.0pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=140 nowrap valign=bottom style='width:105.0pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=93 nowrap valign=bottom style='width:70.0pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=143 nowrap valign=bottom style='width:107.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>Fecha:<o:p></o:p></span></b></p>
  </td>
  <td width=189 nowrap valign=bottom style='width:142.0pt;border-top:none;
  border-left:solid white 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:solid white 1.0pt;mso-border-left-alt:solid white .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>{{ substr(date("d-m-Y H:i:s"),0,10) }}&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:3;height:15.0pt'>
  <td width=101 nowrap valign=bottom style='width:75.5pt;border:solid white 1.0pt;
  border-top:none;mso-border-left-alt:solid white .5pt;mso-border-bottom-alt:
  solid white .5pt;mso-border-right-alt:solid white .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=339 nowrap valign=bottom style='width:254.05pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><u><span
  style='font-size:9.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-fareast-language:ES-MX'>REPORTE PERSONAL DE
  EVALUACIÓN DEL DESEMPEÑO<o:p></o:p></span></u></b></p>
  </td>
  <td width=339 nowrap valign=bottom style='width:254.05pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right;
  line-height:normal'><span style='font-family:"Arial",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 nowrap valign=bottom style='width:97.0pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=140 nowrap valign=bottom style='width:105.0pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right;
  line-height:normal'><span style='font-family:"Arial",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=93 nowrap valign=bottom style='width:70.0pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=143 nowrap valign=bottom style='width:107.0pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right;
  line-height:normal'><span style='font-family:"Arial",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=189 nowrap valign=bottom style='width:142.0pt;border-top:none;
  border-left:none;border-bottom:solid white 1.0pt;border-right:solid white 1.0pt;
  mso-border-bottom-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:15.0pt'>
  <td width=101 nowrap valign=bottom style='width:75.5pt;border-top:none;
  border-left:solid white 1.0pt;border-bottom:none;border-right:solid white 1.0pt;
  mso-border-left-alt:solid white .5pt;mso-border-right-alt:solid white .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=339 nowrap valign=bottom style='width:254.05pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>NO. DE EMPLEADO<o:p></o:p></span></b></p>
  </td>
  <td width=129 nowrap valign=bottom style='width:97.0pt;border:solid windowtext 1.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'>
    <span>{{ $eva->num_emp }}</span></p>
  </td>
  <td width=140 nowrap valign=bottom style='width:105.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;text-align:right;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>NOMBRE:<o:p></o:p></span></b></p>
  </td>
  <td width=425 nowrap colspan=3 valign=bottom style='width:319.0pt;border-top:
  none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>{{ $eva->nombre }}&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:15.0pt'>
 </tr>
 <tr style='mso-yfti-irow:6;height:15.0pt'>  
 </tr>
 <tr style='mso-yfti-irow:7;height:30.0pt'>
  <td width=101 style='width:75.5pt;border:solid windowtext 1.0pt;border-top:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>EVALUACIÓN <o:p></o:p></span></b></p>
  </td>
  <td width=339 style='width:254.05pt;border-top:solid windowtext 1.0pt;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>DEPENDENCIA<o:p></o:p></span></b></p>
  </td>
  <td width=129 style='width:97.0pt;border-top:solid windowtext 1.0pt;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>UNIDAD ADMINISTRATIVA<o:p></o:p></span></b></p>
  </td>
  <td width=140 style='width:105.0pt;border-top:solid windowtext 1.0pt;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>PUESTO FUNCIONAL <o:p></o:p></span></b></p>
  </td>
  <td width=93 style='width:70.0pt;border-top:solid windowtext 1.0pt;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  #A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>PUNTUACIÓN PROMEDIO <o:p></o:p></span></b></p>
  </td>
  <td width=143 style='width:107.0pt;border-top:solid windowtext 1.0pt;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>NIVEL DE DESEMPEÑO<o:p></o:p></span></b></p>
  </td>
  <td width=189 style='width:142.0pt;border-top:solid windowtext 1.0pt;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal'><b><span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-fareast-language:ES-MX'>ÁREAS DE OPORTUNIDAD<o:p></o:p></span></b></p>
  </td>
 </tr>
 @foreach($evaluado as $eva)


 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:15.0pt'>
  <td width=101 nowrap valign=bottom style='width:75.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>{{$eva->fk_cve_periodo}}&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=339 nowrap valign=bottom style='width:254.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>{{$eva->dependencia}}&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 nowrap valign=bottom style='width:97.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>{{$eva->unidad_admva}}&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=140 nowrap valign=bottom style='width:105.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>{{$eva->puesto_funcional}}&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=93 nowrap valign=bottom style='width:70.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>{{$eva->promedio}}&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=143 nowrap valign=bottom style='width:107.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>{{$eva->grado_dominio}}&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=189 nowrap valign=bottom style='width:142.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-fareast-language:ES-MX'>{{$eva->areas_opor}}&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 @endforeach

</table>
<br>
<br>
<td width=10 >
			   <button onclick="display()" type="button">Imprimir</button>
</td>
<td width=10 >
			   <button onclick="regresar()" type="button">Regresar</button>               
</td>
<script>
    function display() {
      window.print();
    }
	function regresar() {
		window.history.back();
    }
</script>

</div>
</body>
</html>


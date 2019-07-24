<!DOCTYPE html>
<html>
<head>

	<title></title>

<script>
function myFunction() {
   print();
}
</script>

</head>

<body onload="myFunction()">
 <img src="<?php echo base_url('public/img/logo.png')?>"> 
<p align="center"><strong>ACTA  DE  ASIGNACIÓN   DEVOLUCIÓN  PRÉSTAMO  </strong><br>
<div>
  
 
</div>

<p><strong>CAMBIO  DE  ACTIVOS   TECNOLÓGICOS     </strong>
</p>
</p>
<table border="1" cellspacing="0" cellpadding="0" align="left" width="385">
  <tr>
    <td width="87" valign="top"><p>tipo funcionario </p></td>
    <td width="33" valign="top"><p> <?php echo  $data[0]['Tipofuncionario'] ?></p></td>
  </tr>
</table>


<p>&nbsp;</p>
<table border="1" cellspacing="0" cellpadding="0" align="left" width="710">
  <tr>
    <td width="194" valign="top"><p>Nombre Funcionario</p></td>
    <td width="516" valign="top"><p><?php echo  $data[0]['nombres'] ?></p></td>
  </tr>
  <tr>
    <td width="194" valign="top"><p>Dependencia </p></td>
    <td width="516" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="194" valign="top"><p>Nombre Equipo</p></td>
    <td width="516" valign="top"><p> 
<?php echo  $data[0]['NombredelEquipo'] ?>
    </p></td>
  </tr>
  <tr>
    <td width="194" valign="top"><p>Extensión </p></td>
    <td width="516" valign="top"><p>
    <?php echo  $data[0]['ExtensiondelUsuario'] ?>
    </p></td>
  </tr>
  <tr>
    <td width="194" valign="top"><p>Caso</p></td>
    <td width="516" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="194" valign="top"><p>Piso</p></td>
    <td width="516" valign="top"><p>&nbsp;</p></td>
  </tr>
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <th width="22%" valign="top"><p align="center"><u>ELEMENTOS</u></p></th>
    <th width="11%" valign="top"><p align="center"><u>MARCA</u></p></th>
    <th width="21%" valign="top"><p align="center"><u>MODELO</u></p></th>
    <th width="24%" valign="top"><p align="center"><u>SERIAL</u></p></th>
    <th width="9%" valign="top"><p align="center"><u>PLACA</u></p></th>
  </tr>
  <tbody>
  <?php  foreach ($data as $elementos) {
    # code...
  ?>
    <tr>
    <td align="center"> <?php echo $elementos['elementos']?></td>
    <td align="center"><?php echo $elementos['marca']?> </td>
    <td align="center"><?php echo $elementos['modelo']?> </td>
    <td align="center"><?php echo $elementos['serial']?> </td>
    <td align="center"><?php echo $elementos['placa']?> </td>
    </tr>
 <?php } ?> 
 </tbody>
    
</table>
<p>&nbsp;</p>
<p>Yo___________________________________________________________________,  hago entrega al departamento de Sistemas los elementos identificados en la  sección dos del presente formato. Por consiguiente, los elementos fueron  revisados por el ingeniero en sitio, están funcionando correctamente y sin  ningún deterioro.<br>
  Observaciones:  ________________________________________________________________________________________<br>
  <br>
  _________________________                   ________________________                  __________________________<br>
  Nombre del Funcionario               Nombre del Técnico                         Administrador de  Activos<br>
CC:                                             CC:                                                  CC:</p>
</body>
</html>

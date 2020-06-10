<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vCiudad = $_POST['Ciudad'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM ciudades WHERE ciudad ='$vCiudad' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
 echo ("Ciudad Inexistente<br>");
 echo ("<A href='FormModiIni.php'>Continuar</A>");
}
else{
?>
<FORM action="Modi.php" method="POST" name="FormModi">
<table width="356">
<tr>
 <td width="103"> Id: </td>
 <td width="243"> <input type="text" name="Id" readonly value="<?php echo($fila['idciudades']); ?>">
 </td>
</tr>
<tr>
 <td width="103"> Ciudad: </td>
 <td width="243"> <input type="text" name="Ciudad" value="<?php
echo($fila['ciudad']); ?>">
 </td>
</tr>
<tr>
 <td width="103"> País: </td>
 <td width="243"> <input type="TEXT" name="Pais" size="20" maxlength="20"
 value="<?php echo($fila['pais']); ?>">
 </td>
 </tr>
 <tr>
 <td width="103"> Habitantes: </td>
 <td width="243"> <input type="number" name="Hab" size="20" maxlength="40"
 value="<?php echo($fila['habitantes']); ?>">
 </td>
</tr>
<tr>
 <td width="103"> Superficie: </td>
 <td width="243"> <input type="number" name="Sup" size="20" maxlength="40"
 value="<?php echo($fila['superficie']); ?>">
 </td>
 </tr>
 <tr>
 <td width="103"> Tiene metro: </td>
 <td width="243"> <input type="number" name="Metro" size="20" maxlength="40"
 value="<?php echo($fila['tienemetro']); ?>">
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
value="Modificar">
 </td>
 </tr>
</table>
</FORM>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
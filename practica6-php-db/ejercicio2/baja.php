<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include ("conexion.inc");
$vCiudad = $_POST ['Ciudad'];
$vSql = "SELECT * FROM ciudades WHERE ciudad='$vCiudad' ";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0)
 {
 echo ("Ciudad Inexistente <br>");
 echo ("<A href='FormBajaIni.php'>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM ciudades WHERE ciudad = '$vCiudad' ";
mysqli_query($link, $vSql);
 echo("La ciudad fue Borrada<br>");
 echo("<A href='index.php'>Volver al Menú del ABM</A>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>
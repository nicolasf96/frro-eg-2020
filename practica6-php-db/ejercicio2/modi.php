<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vId = $_POST['Id'];
$vCiudad = $_POST['Ciudad'];
$vPais = $_POST['Pais'];
$vHab = $_POST['Hab'];
$vSup = $_POST['Sup'];
$vMetro = $_POST['Metro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE ciudades set ciudad='$vCiudad', pais='$vPais', habitantes='$vHab', superficie='$vSup', tienemetro='$vMetro' where
idciudades='$vId'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("El Usuario fue Modificado<br>");
echo("<A href= 'index.php'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>
<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
$vCiudad = $_POST['Ciudad'];
$vPais = $_POST['Pais'];
$vHab = $_POST['Hab'];
$vSup = $_POST['Sup'];
$vMetro = $_POST['Metro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(ciudad) as canti FROM ciudades WHERE ciudad='$vCiudad'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantCiudades = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantCiudades ['canti']!=0){
 echo ("La ciudad ya Existe<br>");
 echo ("<A href='index.php'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO ciudades (ciudad,pais,habitantes,superficie,tienemetro)
values ('$vCiudad','$vPais', '$vHab', '$vSup', '$vMetro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
echo("<div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-12'>

                <div class='w-50 mx-auto mt-5'>
                    <h4 class='my-4 text-center'>La ciudad fue registrada</h1>
                    <A href='index.php'>Volver al menú</A>
                </div>
            </div>
        </div>
    </div>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>

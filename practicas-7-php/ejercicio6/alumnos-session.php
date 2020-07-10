<?php
session_start();
include ("conexion.inc");
//Captura datos desde el Form anterior
$vMailAlumno = $_POST['MailAlumno'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM alumnos WHERE mail ='$vMailAlumno' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
    unset($_SESSION['Alumno']);
}else{
    $_SESSION["Alumno"] = $fila['nombre'];
}
header('Location: index.php');
?>
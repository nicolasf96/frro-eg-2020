<?php
session_start();
include("conexion.inc");
if(!(isset($_GET['id']))){
    header("Location: catalogo.php");
}
if(!isset($_GET['cantidad'])){
    $cantidad=1;
}elseif($_GET['cantidad']==""){
    header("Location: borrarCar.php?id=".$_GET['id']);
    die();
}else{
    $cantidad=$_GET['cantidad'];
}
$sql = 
"SELECT
    *
FROM catalogo
WHERE
    id=".$_GET['id'];
$resp = mysqli_query($link,$sql);
$row = mysqli_fetch_array($resp);
if(isset($_SESSION['carro'])){
    $carro=$_SESSION['carro'];
}
$carro[$_GET['id']] = array(
    'identificador' => $row['id'],
    'id' => $row['id'],
    'cantidad' => $cantidad,
    'producto' => $row['producto'],
    'precio' => $row['precio']
);
$_SESSION['carro'] = $carro;
if(isset($_GET['imageField_x'])){
    header("Location: verCarro.php");
}else {
    header("Location: catalogo.php");
}
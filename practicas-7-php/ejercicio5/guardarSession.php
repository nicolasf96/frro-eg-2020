<?php
session_start();
if(isset($_GET['usuario'])&&isset($_GET['password'])){
    $_SESSION['nombre'] = $_GET['usuario'];
    $_SESSION['password'] = $_GET['password'];
    header("Location: mostrarSession.php");
}else{
    header("Location: form.php");
}
?>
<?php
    session_start();
    $id = $_GET['id'];
    if(!isset($_SESSION['carro'])){
        header("Location: catalogo.php");
    }
    $carro = $_SESSION['carro'];
    unset($carro[$id]);
    $_SESSION['carro'] = $carro;
    header("Location: catalogo.php");
    ?>
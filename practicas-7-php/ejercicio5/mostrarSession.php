<?php
    session_start();
    if(isset($_SESSION['nombre'])&&isset($_SESSION['password'])){
        echo "Usuario: ".$_SESSION['nombre']." <br> Contraseña: ".$_SESSION['password'];
        echo "<br><a href=form.php>Volver al formulario</a>";
    }else{
        header("Location: form.php");
    }
?>
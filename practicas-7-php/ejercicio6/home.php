<?php 
    session_start();
    if (!isset($_SESSION["Alumno"])){
        $rta = "Lo sentimos, usted no puede visitar esta página";
    }
    else{
        $rta = "Hola ".$_SESSION["Alumno"]."! Bienvenido al sitio";
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="mx-auto">
                <h1 class="text-center">Sitio</h1>
                <h2> <?php echo $rta; ?>  </h2>
                <div class="mt-4 mx-auto text-center">
                  <a href="index.php"> Salir </a>
                </div>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>
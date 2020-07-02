<?php  session_start(); ?>
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
                <form action="alumnos-session.php" method="post">
                    <h1 class="text-center">Ejemplo Alumnos</h1>
                    <p class="text-center">Ingresa tus datos para continuar:</p>
                    <input type="email" name="MailAlumno" placeholder="Correo electrónico">
                    <input type="submit" value="Abrir sesión">
                </form>
                <div class="mt-4 mx-auto text-center">
                  <a href="home.php"> Ingrese al sitio </a>
                </div>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>
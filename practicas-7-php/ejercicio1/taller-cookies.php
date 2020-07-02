<?php 
if(isset($_POST["estilo"])){
    $estilo=$_POST["estilo"];
    setcookie("estilo",$estilo,time()+(60*60*24*90));
}
else{
    if(isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php 
    if(isset($estilo)){
        echo '<link rel="stylesheet" type="text/css" href="' .$estilo. '.css">';
    }
    ?>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="mx-auto">
                <form action="taller-cookies.php" method="post">
                    <h1 class="text-center"> <?php echo 'Ejemplo Cookies (' .$estilo.')' ?> </h1>
                    <p class="text-center">Selecciona el estilo de colores que prefieras para la página:</p>
                    <select name="estilo">
                    <option value="oscuro">Oscuro</option>
                    <option value="claro">Claro</option>
                    <option value="colorido">Colorido</option>
                    </select>
                    <input type="submit" value="Actualizar el estilo">
                </form>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>
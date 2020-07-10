
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <?php
        if(isset($_GET['nombre'])&&$_GET['nombre']!=""){
            setcookie('nombreUsuario',$_GET['nombre'],time()+86400*365);         
            echo "<label>Ultimo usuario ingresado: ".$_GET['nombre']."</label><br>";
        }elseif(isset($_COOKIE['nombreUsuario'])){
            echo "<label>Ultimo usuario ingresado: ".$_COOKIE['nombreUsuario']."</label><br>";
        }
        ?>
        <label >Nombre de usuario</label>
        <input name="nombre" type="text">
        <button>Enviar</button>
    </form>
</body>
</html>
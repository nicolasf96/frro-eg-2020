  GNU nano 4.8                                                     test2.php                                                                  
<?php

# Ejercicio 4:
# Analizar la siguiente función, y escribir un script para probar su funcionamiento:

<<<<<<< HEAD

=======
>>>>>>> 9f99bd132f11a765083becc3f7d42020d91246f4

function comprobar_nombre_usuario($nombre_usuario){
    //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
    //compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
    _";
    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }
    echo $nombre_usuario . " es válido<br>";
    return true;
}

<<<<<<< HEAD

=======
>>>>>>> 9f99bd132f11a765083becc3f7d42020d91246f4

for($i=0;$i<=20;$i++){
    $nombre_test=substr(str_shuffle("01234+5678+9abcdefgh+ijklmnopqrstu&vwxyz+ABCDEFGHIJK+LMNOPQRS%TUV+WXYZ"), 0,$i);
    comprobar_nombre_usuario($nombre_test);

}
?>

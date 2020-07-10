<?php

# En cada caso indicar la salida correspondiente
echo "Práctica 4 parte 2 </br> </br>";
echo "ejericio 2 </br> </br>";
echo "a) </br> </br>";

$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];  # Salida => "bar"
echo $matriz[12];   # Salida => 1 - Porque el valor true se convierte en integer 1

echo "</br> </br>";

echo "b) </br> </br>";

$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];   # Salida => 5
echo $matriz["unamatriz"][13];  # Salida => 9
echo $matriz["unamatriz"]["a"]; # Salida => 42


echo "</br> </br>";

echo "c) </br> </br>";

$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;                                            # Se agrega al array el valor 56. Como la clave es opcional, si no se especifica, PHP usará el incremento de la clave de tipo integer mayor utilizada anteriormente.
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);      # La funcion unset destruye las variables especificadas



echo "</br> </br>";

?>
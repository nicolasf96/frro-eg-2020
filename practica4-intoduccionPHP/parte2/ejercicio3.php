<?php

# En cada caso indicar la salida correspondiente
echo "Práctica 4 parte 2 </br> </br>";
echo "ejericio 3 </br> </br>";
echo "a) </br> </br>";

$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";

# Muestra en pantalla la hora, minutos y segundos en el que estraste en la página, mediante la función getdate()

echo "</br> </br>";

echo "b) </br> </br>";

function sumar($sumando1,$sumando2){
$suma=$sumando1+$sumando2;
echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);

# Muestra en pantalla los parámetro de la función sumar y luego el signo = y el resultado ( En este caso 11 ) 

echo "</br> </br>";



?>
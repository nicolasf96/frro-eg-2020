<?php

#Ejercicio 4:
#Si el archivo datos.php contiene el código que sigue:
#Indicar las salidas que produce el siguiente código. Justificar.
echo "Ejercicio 4   </br> </br>";

echo "El $flor $color \n"; # La salida de este fragmento de código es 'Undefined Variable' ya que las variables no estan definidas al querer mostrarlas en pantalla
include 'datos.php';
echo " El $flor $color";  # La salida de este código es "El clavel blanco" ya que al agregar la línea de arriba, se incluye el archivo datos.php donde las variables $flor y $color están definidas





?>
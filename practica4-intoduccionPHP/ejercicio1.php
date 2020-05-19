<?php 


/* Ejercicio 1:
En el siguiente código identificar:
• las variables y su tipo
• los operadores
• las funciones y sus parámetros
• las estructuras de control
• cuál es la salida por pantalla
*/


function doble($i) {    # Funcion "doble" - Con parámetro i
return $i*2;            # Operador binario * - multiplicación 
}                       # La sentencia especial return indica que la función devuelve el doble del parámetro que recibe


$a = TRUE;          # Variable a de tipo boolean
$b = "xyz";         # Variable b de tipo string - Las comillas dobles detectan los caracteres especiales
$c = 'xyz';         # Variable c de tipo string - Las comillas simples no detectan caracteres especiales
$d = 12;            # Variables d de tipo integer


echo gettype($a);   # Funcion gettype() - devuelve el tipo de dato de la variable a = // echo - muestra el resultado de la funcion
echo gettype($b);   # Funcion gettype() - devuelve el tipo de dato de la variable b // echo - muestra el resultado de la funcion
echo gettype($c);   # Funcion gettype() - devuelve el tipo de dato de la variable c // echo - muestra el resultado de la funcion
echo gettype($d);   # Funcion gettype() - devuelve el tipo de dato de la variable d // echo - muestra el resultado de la funcion


if (is_int($d)) {   # Estructura de control if - Función is_int (devuelve true si el parámetro $d es int)
$d += 4;            # Operador binario - Suma el número 4 a la variable $d
}


if (is_string($a)) {    # Estructura de control if - Función is_string (devuelve true si el parámetro $a es un string)
echo "Cadena: $a";      # Muestra en pantalla: "Cadena: $a" Sustituyendo $a por su valor si es string
}


$d = $a ? ++$d : $d*3;  # Operador ternario
$f = doble($d++);       # Asigna a la variable $f el resultado de la ejecución de la función doble()
$g = $f += 10;          
echo $a, $b, $c, $d, $f , $g;


?>
<?php


# Ejercicio 1:
# Indicar si los siguientes códigos son equivalentes.

# Los siguientes fragmentos de código son equivalentes
# Son distintas formas de definir un array
echo "Práctica 4 parte 2 - ejericio 1) </br>";

$a = array( 'color' => 'rojo',
'sabor' => 'dulce',
'forma' => 'redonda',
'nombre' => 'manzana',
4
);

echo('<pre>');
var_dump($a);
echo('</pre>');

$b['color'] = 'rojo';
$b['sabor'] = 'dulce';
$b['forma'] = 'redonda';
$b['nombre'] = 'manzana';
$b[] = 4;

echo('<pre>');
var_dump($b);
echo('</pre>');

?>
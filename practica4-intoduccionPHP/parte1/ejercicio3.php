<html>
<head><title>Ejercicio 3</title></head>
<body>
<?php

echo "Ejercicio 3 - a)  </br> </br>";

# El siguiente código se utiliza para crear una tabla de manera automática y fácil.
# La ventaja de crear una tabla de esta manera, es la facilidad para agregar filas o columnas ya que es cambiar el valor de una variable.


echo "<table width = 90% border = '1' >";
$row = 5;
$col = 2;
for ($r = 1; $r <= $row; $r++) {
echo "<tr>";
for ($c = 1; $c <= $col;$c++) {
echo "<td>&nbsp;</td>\n";
} echo "</tr>\n";
}
echo "</table>\n";
echo "</br> </br>";
?>


<?php

echo "Ejercicio 3 - b)  </br> </br>";


# Este fragmento de código muestra un formulario con un input edad(age) en el cual se puede ingresar un numero de 2 digitos
# Al ingresar la edad y presionar el boton "Ir" (input submit) nos dirá si el usuario que ingresó su edad es Mayor de edad o Menor de edad

if (!isset($_POST['submit'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Edad: <input name="age" size="2">
<input type="submit" name="submit" value="Ir">
</form>
<?php
}
else {
$age = $_POST['age'];
if ($age >= 21) {
echo 'Mayor de edad';
}
else {
echo 'Menor de edad';
}
}
?>

</body></html>




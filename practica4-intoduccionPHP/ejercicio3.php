<html>
<head><title>Documento 1</title></head>
<body>
<?php

echo "Ejercicio 3 - a)  </br> </br>";
echo "El siguiente código se utiliza para crear una tabla </br>";

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




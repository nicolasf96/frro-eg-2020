<?php

# EJERCICIO 2 -INDICAR SI LOS SIGUIENTES FRAGMENTOS DE CÓDIGO SON EQUIVALENTES

# A) -------------------------------------------------------------------------------------

# Todos los fragmentos de código son equivalentes

echo" Ejercicio 2 <br /> <br /> a)   <br /> <br />";

$i = 1;
while ($i <= 10) {
print $i++;
}

echo"    <br />";

$i = 1;
while ($i <= 10):
print $i;
$i++;
endwhile;

echo"    <br />";

$i = 0;
do {
print ++$i;
} while ($i<10);

echo"    <br /> <br />";

# B) -------------------------------------------------------------------------------------

echo "b)   <br /> <br />";

for ($i = 1; $i <= 10; $i++) {
print $i;
}

echo"    <br />";

for ($i = 1; ;$i++) {
if ($i > 10) {
break;
}
print $i;
}

echo"    <br />";

$i = 1;
for (;;) {
if ($i > 10) {
break;
}
print $i;
$i++;
}

echo"    <br />";

for ($i = 1; $i <= 10; print $i, $i++) ;

echo"  <br />   <br />";


# c) -------------------------------------------------------------------------------------

echo "C)   <br /> <br />";

$i = 0;

if ($i == 0) {
print "i equals 0";
} elseif ($i == 1) {
print "i equals 1";
} elseif ($i == 2) {
print "i equals 2";
}


echo"    <br />";

switch ($i) {
case 0:
print "i equals 0";
break;
case 1:
print "i equals 1";
break;
case 2:
print "i equals 2";
break;
}


echo"    <br />";



?>

<?php
$link = mysqli_connect("localhost", "gonzalo", "TUCONTRASEÑA") or die ("Problemas de conexión a la base de
datos");
mysqli_select_db($link, "Compras");
?>
<?php
session_start();
include("conexion.inc");
if(isset($_SESSION['carro'])){
    $carro = $_SESSION['carro'];
}else{
    $carro = false;
}
$sql = 
"SELECT 
    *
FROM catalogo
ORDER BY producto asc";
$resp = mysqli_query($link,$sql);
?>
<html>
<head>
<title>CAT&Aacute;LOGO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.catalogo {
 font-family: Verdana, Arial, Helvetica, sans-serif;
 font-size: 9px;
 color: #333333;
}
-->
</style>
</head>
<body>
<a href="verCarro.php">VER CARRITO</a>
<table width="272" align="center" cellpadding="0" cellspacing="0" style="border: 1px
solid #000000;">
    <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo">
        <td width="170"><strong>Producto</strong></td>
        <td width="77"><strong>Precio</strong></td>
        <td width="25" align="right"><a href="vercarrito.php?<?php echo SID ?>"
        title="Ver el contenido del carrito"><img src="vercarrito.gif" width="25" height="21"
        border="0"></a></td>
    </tr>
<?php 
while($row = $resp->fetch_array(MYSQLI_ASSOC)){
?>
    <tr valign="middle" class="catalogo">
    <td><?php echo $row['producto'] ?></td>
    <td><?php echo $row['precio'] ?></td>
    <td align="center">
    <?php
        if(!$carro || !isset($carro[$row['id']]['producto']) ||
        $carro[$row['id']]['producto']!=$row['producto']){ 
    ?>
            <a href="agregarCar.php?id=<?php echo $row['id'];
            ?>">Agregar al carrito</a>
            <?php }
        else{
            ?><a href="borrarCar.php?id=<?php echo $row['id'];
            ?>">Eliminar del carrito</a>
        <?php
            } ?>
            </td>
            </tr>
<?php 
} 
?>
</table>
</body>
</html>
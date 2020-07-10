<!DOCTYPE html PUBLIC "‐//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1‐transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http‐equiv="Content‐Type" content="text/html; charset=utf‐8" />
<title>Untitled Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<?php
include("conexion.inc");
$pal=$_POST['Palabra'];
if($pal){
    $vSql = "select * from buscador where canciones LIKE '%".$pal."%'";
    $resp = mysqli_query($link, $vSql) or die (mysqli_error($link));
    if(mysqli_num_rows($resp) == "0") {
     echo '<div class="container">
            <div class="row mt-5">
                <div class="mx-auto">
                        <h1 class="my-4">No hay resultados</h1>
                </div>
            </div>
        </div>';
    } else {
            echo '<div class="container">
                    <div class="row mt-5">
                        <div class="mx-auto">
                            <h1 class="my-4">Resultados de búsqueda</h1>';
                   while($cat = mysqli_fetch_array($resp)) {?>
                   <p class="text-center"><?php echo ($cat['canciones']); ?></p>
     <?php  echo '      </div>
                    </div>
                </div>'
      ?>
      <?php           }            } ?>
  <div class="mx-auto text-center">

          <p><a href="FormBuscador.html">Volver al Buscador de Canciones</a></p> 

      </div>
  <?php
}else{
echo '<div class="container">
            <div class="row mt-5">
                <div class="mx-auto">
                    <FORM  action="buscador.php" method="POST" name="FormBuscador">
                        <h1 class="my-4">Buscador de Canciones</h1>
                        <TABLE width="225" class="mx-auto">
                            <TR>  
                            <TD> Palabra: </TD>
                            <TD> <input type="TEXT"  name="Palabra" size="20" maxlength="40"></TD>
                            </TR>
                            <TD colspan="2" align="center"> <INPUT TYPE="SUBMIT"  class="my-3" name="Submit" value="Buscar!"> 
                            </TD>
                        </TABLE>
                    </FORM> 
                </div>
            </div>
        </div>';
}?>

</body>

</html>
<?php include "head.php"?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="w-75 mx-auto mt-5">
                    <h1 class="mb-4 4 text-center">Listado Completo Paginado</h1>
                    <?php
                      include("conexion.inc");
                      $Cant_por_Pag = 2;
                      $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
                      if (!$pagina) {
                      $inicio = 0;
                      $pagina=1;
                      }
                      else {
                      $inicio = ($pagina - 1) * $Cant_por_Pag;
                      }// total de páginas
                      $vSql = "SELECT * FROM ciudades";
                      $vResultado = mysqli_query($link, $vSql);
                      $total_registros=mysqli_num_rows($vResultado);
                      $total_paginas = ceil($total_registros/ $Cant_por_Pag);
                      echo "<div class='text-center my-4 mx-auto'><b>Numero de registros encontrados: " . $total_registros . "<br>";
                      echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
                      echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "</b></div>";
                      $vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
                      $vResultado = mysqli_query($link, $vSql);
                      $total_registros=mysqli_num_rows($vResultado);
                    ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">País</th>
                            <th scope="col">habitantes</th>
                            <th scope="col">Superficie</th>
                            <th scope="col">Tiene Metro</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                    while ($fila = mysqli_fetch_array($vResultado))
                    {
                    ?>
                    <tr>
                        <th scope="row"><?php echo ($fila['idciudades']); ?></th>
                        <td><?php echo ($fila['ciudad']); ?></td>
                        <td><?php echo ($fila['pais']); ?></td>
                        <td><?php echo ($fila['habitantes']); ?></td>
                        <td><?php echo ($fila['superficie']); ?></td>
                        <td><?php echo ($fila['tienemetro']); ?></td>
                    </tr>
                    <?php
                    }
                    // Liberar conjunto de resultados
                    mysqli_free_result($vResultado);
                    // Cerrar la conexion
                    mysqli_close($link);
                    ?>
                    </tbody>
                    </table>
                    <?php
                    if ($total_paginas > 1){
                    for ($i=1;$i<=$total_paginas;$i++){
                    if ($pagina == $i)
                    //si muestro el índice de la página actual, no coloco enlace
                    echo $pagina . " ";
                    else
                    //si la página no es la actual, coloco el enlace para ir a esa página
                    echo "<a href='Listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
                    <p>&nbsp;</p>
                    <p align="center"><a href="index.php">Volver al menú del ABM</a></p>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>
    
</body>

</html>
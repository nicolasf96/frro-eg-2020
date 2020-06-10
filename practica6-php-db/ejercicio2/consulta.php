<?php include "head.php"?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="w-75 mx-auto mt-5">
                    <h1 class="mb-4 4 text-center">Listado Completo</h1>
                    <?php
                    include("conexion.inc");
                    $vSql = "SELECT * FROM ciudades";
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
<?php include "head.php"?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="w-75 mx-auto mt-5">
                    <h1 class="mb-4 4 text-center">Baja</h1>
                    <form action="Baja.php" method="POST" name="FormBajaIni">
                        <table  class="mx-auto">
                            <tr>
                                <td> Ciudad a dar de Baja : </td>
                                <td>
                                    <input type="TEXT" name="Ciudad" size="20" maxlength="20">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input class="my-3" type="SUBMIT" name="Submit" value="Borrar">
                                    <p><a href="index.php">Volver al menú del ABM</a></p>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>

</body>

</html>
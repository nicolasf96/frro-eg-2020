<?php include "head.php"?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="w-75 mx-auto mt-5">
                    <h1 class="mb-4 4 text-center">Alta</h1>
                    <FORM action="Alta.php" method="POST" name="FormAlta">
                        <TABLE class="mx-auto" width="225">
                            <TR>
                                <TD> Ciudad:</TD>
                                <TD> <input type="TEXT" name="Ciudad" size="20" maxlength="40">
                            </TR>
                            <TR>
                                <TD> País:</TD>
                                <TD> <input type="TEXT" name="Pais" size="20" maxlength="20"> </TD>
                            </TR>
                            <TR>
                                <TD> Habitantes: </TD>
                                <TD> <input type="number" name="Hab"></TD>
                            </TR>
                            <TR>
                                <TD> Superficie: </TD>
                                <TD> <INPUT TYPE="number" name="Sup"> </TD>
                            </TR>
                            <TR>
                                <TD> Tiene metro?: </TD>
                                <TD> <INPUT TYPE="number" name="Metro"> </TD>
                            </TR>
                            <TR>
                                <TD colspan="2" align="center"> <INPUT class="my-3" TYPE="SUBMIT" name="Submit" value="Agregar">
                                <p><a href="index.php">Volver al menú del ABM</a></p>
                            </TD>
                            </TR>
                        </TABLE>
                    </FORM>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>
    
</body>

</html>
<?php  session_start(); ?>
<?php include "head.php"?>
<?php include "header.php"?>
<body>
<?php
if (!isset($_SESSION["contador"])){
 $_SESSION["contador"] = 1;
}else{
 $_SESSION["contador"]++;
}
?>
<!-- Formulario para envio de mail -->
<div class="container-fluid"> 
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="w-50 mx-auto mt-5">
                <h1 class="mb-3">Email de prueba</h1>
                <form action="enviar.php" method="post">
                <div class="form-group">
                    <label for="email">Enviar email de prueba a:</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" size="25">
                </div>
                <button name="enviar" type="submit" class="btn btn-primary btn-sm">Enviar</button>
                </form>
            </div>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
</div>


    
</body>
</html>
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
                <h1 class="mb-3">Contacto</h1>
                <form action="enviar.php" method="post">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" size="25">
                </div>
                <div class="form-group">
                    <label for="comment">Consulta</label>
                    <textarea type="text" class="form-control form-control-sm" id="comment" name="comment" cols="32" rows="6"></textarea>
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
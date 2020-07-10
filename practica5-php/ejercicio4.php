<?php  session_start(); ?>
<?php include "head.php"?>
<?php include "header.php"?>
<body>

<!-- Formulario para envio de mail -->
<div class="container-fluid"> 
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="w-50 mx-auto mt-5">
                <h1 class="mb-3">Contador</h1>
                    <div class="card card-body">
                        <?php echo "Has visitado " .$_SESSION["contador"] . " paginas"; ?>
                    </div>
            </div>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
</div>


    
</body>
</html>



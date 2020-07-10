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
                <h1 class="mb-4">Links Tree</h1>
                
                <ul>
                 <li><h2><a href="ejercicio1.php"> Ejercicio 1</a></h2></li>
                 <li><h2><a href="ejercicio2.php"> Ejercicio 2</a></h2></li>
                 <li><h2><a href="ejercicio3.php"> Ejercicio 3</a></h2></li>
                 <li><h2><a href="ejercicio4.php"> Ejercicio 4</a></h2></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
</div>


    
</body>
</html>
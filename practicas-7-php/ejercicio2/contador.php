<?php
if(isset($_COOKIE['contador'])){
    setcookie('contador',$_COOKIE['contador']+1,time()+86400*365);
    echo "Ingreso a la p&aacute;gina ".$_COOKIE['contador']." veces anteriormente";
}else{
    echo "bienvenido";
    setcookie('contador',1,time()+86400*365);
}
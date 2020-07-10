<?php
class ControladorBase{
    public function __construct(){
        session_start();
        require_once 'conectar.php';
        require_once 'entidadBase.php';
        require_once 'modeloBase.php';
        //incluimos todos los modelos del sistema
        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
    }
    public function view($vista,$datos){
        /*
        DESC: renderizar vistas
        PARAM: vista, array de datos
        RESP: carga nueva vista
        */
        foreach($datos as $id_assoc => $valor){
            ${$id_assoc}=$valor;
        }
        require_once 'core/ayudaVistas.php';
        $helper = new AyudaVistas();
        require_once 'view/'.$vista.'.php';
    }
    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }

}
?>
<?php
class Vistas extends ModeloBase{
    private $id,$nombre,$controller,$accion;
    public function __construct($adapter){
        $table = "vistas";
        parent::__construct($table, $adapter);
    }
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getController() {
        return $this->controller;
    }
    public function getAccion() {
        return $this->accion;
    }
    public function setVariables($vistaData){
        $this->id = $vistaData->id;
        $this->nombre = $vistaData->nombre;
        $this->controller = $vistaData->controller;
        $this->accion = $vistaData->accion;
    }
    public function getNavBar(){
        $usuario = $_SESSION['usuario'];
        $tipoUsuario = $usuario->getTipoUsuario();
        $sql = "SELECT 
                        * 
                FROM vistas v
                INNER JOIN vistas_usuarios vu
                ON v.id=vu.vista_id
                WHERE vu.tipo_id=".$tipoUsuario;
        $vistaData = $this->ejecutarSql($sql);
        $resp = "";
        foreach($vistaData as $vd){
            require_once 'core/ayudaVistas.php';
            $helper = new AyudaVistas();
            $resp .= '<a class="dropdown-item" href="'.$helper->url($vd->controller,$vd->accion).'">'.$vd->nombre.'</a>';
        }
        return $resp;
    }
}

?>
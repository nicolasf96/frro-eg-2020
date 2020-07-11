<?php
class Usuario extends ModeloBase{
    private $id,$email,$password,$tipo_usuario,$nombre,$legajo;
    public function __construct($adapter){
        $table = "usuarios";
        parent::__construct($table, $adapter);
    }
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getTipoUsuario() {
        return $this->tipo_usuario;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getLegajo() {
        return $this->legajo;
    }
    public function setVariables($usuarioData){
        $this->id = $usuarioData->id;
        $this->nombre = $usuarioData->nombre;
        $this->tipo_usuario = $usuarioData->tipo_usuario;
        $this->email = $usuarioData->email;
        $this->password = $usuarioData->password;
        $this->legajo = $usuarioData->legajo;
    }
}
?>
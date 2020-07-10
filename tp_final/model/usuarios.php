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
    public function setId($id) {
        $this->id = $id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getTipoUsuario() {
        return $this->tipo_usuario;
    }
    public function setTipoUsuario($tipo_usuario) {
        $this->tipo_usuario = $tipo_usuario;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getLegajo() {
        return $this->legajo;
    }
    public function setLegajo($legajo) {
        $this->legajo = $legajo;
    }
    public function save(){
        $query = "INSERT INTO usuarios(email,nombre,legajo,password,tipo_usuario)
        VALUES(
            '".$this->email."',
            '".$this->nombre."',
            '".$this->legajo."',
            '".$this->password."',
            '".$this->tipo_usuario."',
        )";
        $save = $this->ejecutarSql($query);
        return $save;
    }
}
?>
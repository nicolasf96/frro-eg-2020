<?php
class UsuariosController extends ControladorBase{
    public function __construct(){
        parent::__construct();

        $this->conectar=new Conectar();
        $this->adapter = $this->conectar->conexion();
    }
    public function index(){
        if(isset($_SESSION['usuario'])){
            $vistas = new Vistas($this->adapter);
            $navbar = $vistas->getNavBar();
            $this->view("index",array("navbar"=>$navbar));
        }else{
            $this->login();
        }
    }
    public function logout(){
        $_SESSION['usuario'] = null;
        $this->index();
    }
    public function login(){
        if(isset($_POST['email'])&&isset($_POST['password'])){
            $usuario = new Usuario($this->adapter);
            $usuarioData = $usuario->getBy(
                array("email","password"),array($_POST['email'],$_POST['password'])
            );
            if(isset($usuarioData->id)){
                $usuario->setVariables($usuarioData);
                $_SESSION['usuario'] = $usuario;
                $this->index();
            }else{
                $_SESSION['usuario'] = null;
                $this->view("login",array("error"=>1));
            }
        }else{
            $this->view("login",array());
        }
    }
}
?>
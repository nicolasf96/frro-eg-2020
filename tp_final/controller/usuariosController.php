<?php
class UsuariosController extends ControladorBase{
    public function __construct(){
        parent::__construct();

        $this->conectar=new Conectar();
        $this->adapter = $this->conectar->conexion();
    }
    public function index(){
        if(isset($_SESSION['id'])){
            $this->view("index",array());
        }else{
            $this->login();
        }
    }
    public function logout(){
        $_SESSION['id'] = null;
        $_SESSION['nombre'] = null;
        $this->index();
    }
    public function login(){
        if(isset($_POST['email'])&&isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT 
                            * 
                    FROM usuarios 
                    WHERE email='$email' AND password='$password'";
            $usuario = new Usuario($this->adapter);
            $usuarioData = $usuario->ejecutarSql($sql);
            if(isset($usuarioData->id)){
                $_SESSION['id'] = $usuarioData->id;
                $_SESSION['nombre'] = $usuarioData->nombre;
                $this->index();
            }else{
                $_POST['email']=null;
                $_POST['password']=null;
                $this->view("login",array("error"=>1));
            }
        }else{
            $this->view("login",array());
        }
    }
}
?>
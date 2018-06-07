<?php
class CursosController extends ControladorBase{
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function index() {

        //Creamos el objeto curso
        $curso=new Curso($this->adapter);

        //Conseguimos todos los cursos
        $allcourses=$curso->getAll();

        foreach ($allcourses as $curso) {
          $horarios = new Horario($this->adapter);
          $curso->horarios = $horarios->getHorariosCurso($curso->id);
        }

        //Cargamos la vista index y le pasamos valores
        $this->view("cursos",array(
            "allcourses"=>$allcourses
        ));
    }

    /*public function crear(){
        if(isset($_POST["nombre"])){

            //Creamos un usuario
            $usuario=new Usuario($this->adapter);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];

            $usuario=new Usuario($this->adapter);
            $usuario->deleteById($id);
        }
        $this->redirect();
    }*/

}
?>

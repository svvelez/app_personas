<?php
require_once("models/persona.php");

class personaController{
    private $model;
    function __construct()
    {
        $this->model=new Modelo();
    }

    function index(){
        $dato=$this->model->mostrar("personas","1005935335");
        require_once("views/index.php");
    }

   // Método que llama la vista views/insertar.php
function nuevo(){
    require_once("views/insertar.php");
    }
    //Método que llama al modelo para insertar datos
    function guardar(){
    $documento_identidad = $_REQUEST['documento_identidad'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $email = $_REQUEST['email'];
    $telefono = $_REQUEST['telefono'];
    $data = "'".$documento_identidad."','".$nombre."','".$apellido."','".
    $email."',".$telefono."";
    $dato = $this->model->insertar("personas",$data);
    header("location: index.php");
    }

    function editar(){
        $id=$_REQUEST['id'];
        $dato=$this->model->mostrar("personas","id=".$id);
        require_once("views/editar.php");
        }
        function update(){
            $id = $_REQUEST['id'];
            $documento_identidad = $_REQUEST['documento_identidad'];
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $email = $_REQUEST['email'];
            $telefono = $_REQUEST['telefono'];
            $data = "documento_identidad='".$documento_identidad."',nombre='".$nombre."',apellido='".$apellido."',email='".$email."',telefono=".$telefono."";
            $condicion = "id=".$id;
            $dato = $this->model->actualizar("personas",$data,$condicion);
            header("location: index.php");
            }
            function eliminar(){
                $id = $_REQUEST['id'];
                $condicion = "id=".$id;
                $dato = $this->model->eliminar("personas",$condicion);
                header("location: index.php");
                }

}

?>
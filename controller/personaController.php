<?php
require_once( 'models/huesped.php' );

class personaController {
    private $model;

    function __construct()
 {
        $this->model = new Modelo();
    }

    function index() {
        $dato = $this->model->mostrar( 'huesped', null );
        require_once( 'views/index.php' );
    }

    // Método que llama la vista views/insertar.php

    function nuevo() {
        require_once( 'views/insertar.php' );
    }
    //Método que llama al modelo para insertar datos

    function guardar() {

        $nombre = $_REQUEST[ 'nombre' ];
        $apellidos = $_REQUEST[ 'apellidos' ];
        $numero_identificacion = $_REQUEST[ 'numero_identificacion' ];
        $genero = $_REQUEST[ 'genero' ];
        $telefono_contacto = $_REQUEST[ 'telefono_contacto' ];
        $direccion_residencia = $_REQUEST[ 'direccion_residencia' ];
        $email = $_REQUEST[ 'email' ];

        $data = "'".$nombre."','".$apellidos."',".$numero_identificacion.",'".$genero."',".$telefono_contacto.",'".$direccion_residencia."','".$email."'";
        $dato = $this->model->insertar( 'huesped', $data );
        header( 'location: index.php' );
    }

    function editar() {
        $id = $_REQUEST[ 'id' ];
        $dato = $this->model->mostrar( 'huesped', 'id='.$id );
        require_once( 'views/editar.php' );
    }

    function update() {
        $id = $_REQUEST[ 'id' ];
        $nombre = $_REQUEST[ 'nombre' ];
        $apellido = $_REQUEST[ 'apellidos' ];
        $numero_identificacion = $_REQUEST[ 'numero_identificacion' ];
        $genero = $_REQUEST[ 'genero' ];
        $telefono_contacto = $_REQUEST[ 'telefono_contacto' ];
        $direccion_residencia = $_REQUEST[ 'direccion_residencia' ];
        $email = $_REQUEST[ 'email' ];

        $data = "nombre = '".$nombre."', apellidos = '".$apellido."', numero_identificacion = ".$numero_identificacion.", genero = '".$genero."', telefono_contacto = ".$telefono_contacto.", direccion_residencia = '".$direccion_residencia."', email = '".$email."'";
        $condicion = 'id='.$id;
        $dato = $this->model->actualizar( 'huesped', $data, $condicion );
        header( 'location: index.php' );
    }

    function eliminar() {
        $id = $_REQUEST[ 'id' ];
        $condicion = 'id='.$id;
        $dato = $this->model->eliminar( 'huesped', $condicion );
        header( 'location: index.php' );
    }

}

?>
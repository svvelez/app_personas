<?php

class Modelo{
    private $Modelo;
    private $db;
    

    public function __construct()
    {
        $this->Modelo=array();
        $this->personas = array();
        $this->tabla= "huesped";
        $this->db=new PDO('mysql:host=localhost;dbname=crudd',"root","");
    }
    public function mostrar($tabla,$condicion){
        if($condicion != null){
            $consul="select * from " .$tabla." where ".$condicion.";";
        }else{
            $consul="select * from " .$tabla.";";
        }
        
        $resu=$this->db->query($consul);
        while($filas=$resu->fetchAll(PDO::FETCH_ASSOC)){
            $this->huesped[]=$filas;
        }
        return $this->huesped;
    }

    
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." (nombre,apellidos,numero_identificacion,genero,telefono_contacto,direccion_residencia,email) values(". $data .");";
        //echo $consulta;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
        return true;
        }else {
        return false;
        }
        }

        public function actualizar($tabla, $data, $condicion){
            $consulta="update ".$tabla." set ". $data ." where ".$condicion.";";
            //echo $consulta;
            $resultado=$this->db->query($consulta);
            if ($resultado) {
            return true;
            }else {
            return false;
            }
            }
            public function eliminar($tabla, $condicion){
                $eli="delete from ".$tabla." where ".$condicion;
                $res=$this->db->query($eli);
                if ($res) {
                return true;
                }else {
                return false;
                }
                }

}

?>
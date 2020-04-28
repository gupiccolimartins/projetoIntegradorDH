<?php

class Conexion{

    private $conexion;
    public function __construct()

    {
        $this->conexion=new mysqli('localhost', 'root','admin','usuarios');
    }

    public function getUsers(){
        $this->$onexion->query('SELECT * FROM usuarios');
        $resultadoQuery=[];
        $i=0;

        while ($res = $query->fetch_assoc()){
            $resultadoQuery[$i] =$res;
            $i++;
        }

        return $resultadoQuery;
    }
}
?>
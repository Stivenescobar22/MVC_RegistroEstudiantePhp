<?php 

 class Conexion{


    public function getConexion(){

        $conexion = new mysqli("localhost", "root","","bdestudiante");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

 }




?>
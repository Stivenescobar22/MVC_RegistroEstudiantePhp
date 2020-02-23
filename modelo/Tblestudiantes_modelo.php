<?php 

class Tblestudiantes_modelo{

  private $bd;
  private $tblestudiantes;

  public function __construct(){
      $this->bd = Conexion :: getConexion();
      $this->tblestudiantes = array();
  }

  public function consultar($accion_sql){
 
    $consulta2 = $this->bd->query($accion_sql);
    while($fila = $consulta2->fetch_assoc()){
        $this->tblestudiantes[] = $fila;
    }
    return $this->tblestudiantes;
  }

  public function consultarPorTipodoc(){
    
    $consulta2 = $this->bd->query($accion_sql);
    $fila = $consulta2->fetch_assoc();
    $this->tblestudiantes[] = $fila;
    return $this->tblestudiantes;

  }

  public function actualizarEstudiantes($dato){
 
    $tipodoc = $dato['tipodoc'];
    $numero = $dato['numero'];
    $nombreest = $dato['nombres'];
    $fnacimiento = $dato['f_nacimiento'];
    $consulta2 = "UPDATE tblestudiante set numero = '$numero',nombre = '$nombreest', f_nacimiento = '$fnacimiento' where tipodoc = $tipodoc";
    mysqli_query($this->bd, $consulta2) or die ("Error al actualizar los datos");

  }

  public function eliminarEstudiantes($tipodoc){
   
    $consulta2 = "DELETE FROM tblestudiante WHERE tipodoc = $tipodoc";
    mysqli_query($this->bd, $consulta2) or die ("Error al eliminar un dato");

  }

  public function insertEstudiantes($dato){

   $numero = $dato['numero'];
   $nombreest = $dato['nombres'];
   $fnacimiento = $dato['f_nacimiento'];
   $consulta2 = "INSERT INTO tblestudiante (numero, nombre, f_nacimiento) VALUES ($numero, $nombreest, $fnacimiento)";
   mysqli_query($this->bd, $consulta2) or die ("Error al insertar los datos");
   
  }



}





?>
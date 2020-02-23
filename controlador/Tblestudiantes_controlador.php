<?php 

require_once 'modelo/Tblestudiantes_modelo.php';

class Tblestudiantes_controlador{

  private $modelo_estudiantes;

  public function __construct(){
      $this->modelo_estudiantes = new Tblestudiantes_modelo();
  }

  public function index2(){

     $consulta2 = $this->modelo_estudiantes->consultar("SELECT * FROM tblestudiante");
     require_once 'vista/tblestudiantes_vista.php';
  }

  public function modificar2(){

    $tipodoc = $_REQUEST['tipodoc'];
    $consulta2 = $this->modelo_estudiantes->consultarPorTipodoc("SELECT * FROM tblestudiante where tipodoc = $tipodoc");
    require_once 'vista/tblestudiantes_modificar.php';

  }

  public function guardarCambiosEstudiante(){

    $dato['tipodoc'] = $_POST['txttipodoc'];
    $dato['numero'] = $_POST['txtnumero'];
    $dato['nombres'] = $_POST['txtnombres'];
    $dato['fnacimiento'] = $_POST['txtfnacimiento'];
    $this->modelo_estudiantes->actualizarEstudiantes($dato);
    $this->index2();

  }


  public function eliminar2(){

    $tipodoc = $_REQUEST['tipodoc'];
    $this->modelo_estudiantes->eliminarEstudiantes($tipodoc);
    $this->index2();

  }

  public function guardar2(){

    $dato['numero'] = $_POST["txtnumero"];
    $dato['nombres'] = $_POST["txtnombres"];
    $dato['f_nacimiento'] = $_POST["txtfnacimiento"];
    $this->modelo_estudiantes->insertEstudiantes($dato);
    $this->index2();
  }


}




?>
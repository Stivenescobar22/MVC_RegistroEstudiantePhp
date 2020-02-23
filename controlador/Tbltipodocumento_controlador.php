<?php 

require_once 'modelo/Tbltipodocumento_modelo.php';

class Tbltipodocumento_controlador{

    private $model_tipodocumento;

    public function __construct(){
        $this->model_tipodocumento = new Tbltipodocumento_modelo();
    }

    public function index(){
        $consulta = $this->model_tipodocumento->consultar("SELECT * FROM tbltipodocumento");
        require_once 'vista/tbltipodocumento_vista.php';
    }

    public function modificar(){
        $id = $_REQUEST['id'];
        $consulta = $this->model_tipodocumento->consultarPorId("SELECT * FROM tbltipodocumento WHERE idtipo=$id");
        require_once 'vista/tbltipodocumento_modificar.php';
    }

    public function guardarCambiosTipoDocumento(){
        $dato['id']  = $_POST["txtid"];
        $dato['nombre'] = $_POST["txtnombre"];
        $this->model_tipodocumento->actualizarTipoDocumento($dato);
        $this->index();
    }

    public function eliminar(){
        $id = $_REQUEST['id'];
        $this->model_tipodocumento->eliminarTipoDocumento($id);
        $this->index();
    }

    public function guardar(){
        $dato['nombre'] = $_POST["txtnombre"];
        $this->model_tipodocumento->insertTipoDocumento($dato);
        $this->index();
    }
}
?>
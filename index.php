
<?php 

header('location: http://localhost/mvc_trabajo1/principal.php');

require_once 'conexion/Conexion.php';
require_once 'controlador/Tbltipodocumento_controlador.php';

$controlador = new Tbltipodocumento_controlador();

if(!empty($_REQUEST['accion'])){
    $metodo = $_REQUEST['accion'];

    if(method_exists($controlador, $metodo)){
        $controlador->$metodo();
    }else{
        $controlador->index();
    }

}else{
    $controlador->index();
}





?>
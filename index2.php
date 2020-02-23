
<?php 



require_once 'conexion/Conexion.php';
require_once 'controlador/Tblestudiantes_controlador.php';

$controlador2 = new Tblestudiantes_controlador();

if(!empty($_REQUEST['accionEstudiante'])){
    $metodo2 = $_REQUEST['accionEstudiante'];

    if(method_exists($controlador2, $metodo2)){
        $controlador2->$metodo2();
    }else{
        $controlador2->index2();
    }

}else{
    $controlador2->index2();
}





?>
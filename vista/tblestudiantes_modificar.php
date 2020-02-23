<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" url="http://localhost/mvc_trabajo1/principal.php" content="text/html"; charset="utf-8" />
    <title>Registro Estudiante</title>
    </head>
    <body>
        <?php foreach($consulta2 as $datos): ?>
        <h1>Modificar información 2</h1>
        <br>
        <form name="form2" method="post" action="index2.php?accionEstudiante=guardarCambiosEstudiante">
            <p>Id: <input type="text" name="txttipodoc" value="<?php echo $_REQUEST['tipodoc']; ?>" readonly></p>
            <p>Numero: <input type="text" name="txtnumero" value="<?php echo $datos['numero']; ?>"></p>
            <p>Nombre2: <input type="text" name="txtnombres" value="<?php echo $datos['nombres']; ?>"></p>
            <p>Fecha_Nacimiento: <input type="date" name="txtfnacimiento" value="<?php echo $datos['fnacimiento']; ?>"></p>
            <p><input type="submit" name="btnguardarcambios2" value="Guardar Cambios"></p>
        </form>
        <?php endforeach; ?>
    </body>
</html>
    
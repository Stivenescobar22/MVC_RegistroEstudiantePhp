<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" url="http://localhost/mvc_trabajo1/principal.php" content="text/html"; charset="utf-8" />
    <title>Registro Estudiantes</title>
    </head>
    <body>

            <h1>Nuevo registro</h1>
            <br>
            <form name="form2" method="post" action="index2.php?accionEstudiante=guardar2">
                <p>Numero: <input type="text" name="txtnumero"></p>
                <p>Nombre: <input type="text" name="txtnombres"></p>
                <p>F_nacimiento: <input type="date" name="txtfnacimiento">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </p>
                <p><input type="submit" name="btnguardar" value="Guardar"></p>
            </form>

            <br>

        <table>
            <thead>
                <tr>
                    <th>Tipodoc</th>
                    <th>Numero documento</th>
                    <th>Nombre</th>
                    <th>Fecha_Nacimiento</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consulta2 as $datos): ?>
                <tr>
                    <td><?php echo $datos['tipodoc']; ?></td>
                    <td><?php echo $datos['numero']; ?></td>
                    <td><?php echo $datos['nombre']; ?></td>
                    <td><?php echo $datos['f_nacimiento']; ?></td>
                    <td><a href="index2.php?accion=modificar2&tipodoc=<?php echo $datos['tipodoc']; ?>">Modificar</a></td>
                    <td><a href="index2.php?accion=eliminar2&tipodoc=<?php echo $datos['tipodoc']; ?>">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html> 
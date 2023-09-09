<?php
include_once 'conexion.php';
$sentencia_select=$cnx->prepare('SELECT *FROM tablausuarios ORDER BY id DESC');
$sentencia_select->execute();
$rta=$sentencia_select->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport"content="width=device-width, initial-scale1.0">
        <link  rel="stylesheet" href="estilo.css">
        <title>CRUD</title>
    </head>
    <body>
        <div class="contenedor">
            <h2>PRUEBA CRUD</h2>
            <div class=".barra_buscador">
                <form action="" class="formulario" method="post">
                    <input type="text" name="buscar" placeholder="buscar nombre" class="input_text">
                    <input type="submit" class="btn" name="btn_buscar" value="Buscar">
                    <a href="insert.php" class="btn btn_nuevo">Nuevo</a>
                </form>
            </div>
            <table>
                <tr class="head">
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td>Telefono</td>
                    <td>Contraseña</td>
                    <td colspan="2">Acción</td>
                </tr>
                <?php foreach($rta as $fila):?>
                    <tr>
                        <td> <?php echo $fila['id'];?></td>
                        <td> <?php echo $fila['nombre'];?></td>
                        <td> <?php echo $fila['correo'];?></td>
                        <td> <?php echo $fila['telefono'];?></td>
                        <td> <?php echo $fila['contraseña'];?></td>
                    <td class="contenedor">
                        <a href="upadte.php?id=<?php echo $fila['id'];?>"class="btn_update">Editar</a>
                        <a href="delate.php?id=<?php echo $fila['id'];?>"class="btn_delete">Eliminar</a>
                    </td>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>
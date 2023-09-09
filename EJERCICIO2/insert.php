<?php
include_once 'conexion.php';
if (isset($POST['guardar'])){
    $nombre=$POST['nombre'];
    $correo=$POST['correo'];
    $telefono=$POST['telefono'];
    $contraseña=$POST['contraseña'];

    if(!empty($nombre) && !empty($correo) && !empty($telefono) && !empty($contraseña)){
    }else{
        echo '<script language="javascript">';
        echo 'alert("Los campos estan vacios")';
        echo '</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport"content="width=device-width, initial-scale1.0">
        <link  rel="stylesheet" href="estilo.css">
        <title>Nuevo Usuario</title>
    </head>
    <body>
        <div class="contenedor">
            <h2>PRUEBA CRUD</h2>
            <form action="" method ="post">
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="Nombre" class="input_text">
                    <input type="text" name="correo" placeholder="Correo" class="input_text">
                </div>
                <div class="form-group">
                    <input type="text" name="telefono" placeholder="Telefono" class="input_text">
                    <input type="text" name="contraseña" placeholder="Contraseña" class="input_text">
                </div>
                <div class="brn_group">
                    <a href="indes.php" class="btn btn_danger" >Cancelar</a>
                    <input type="submit" name="guardar" value="Guardar" class="btn btn_primary">
                </div>
            </form>
            </table>
        </div>
    </body>
</html>
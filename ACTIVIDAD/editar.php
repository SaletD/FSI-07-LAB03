<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport"content="width=device-width, initial-scale1.0">
        <title>Documento</title>
    </head>
    <body>
        <?php
        $id=$_GET['id'];
        $nom=$_GET['nom'];
        $au=$_GET['au'];
        $isbn=$_GET['isbn'];
        $descri=$_GET['descri'];
        ?>
        <div> 
            <form action="sp_editar.php" method="post">
                <table border="1"> 
                    <tr> 
                        <td> Ingresar Datos: </td>
                        <td><input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>"> </td>
                    </tr>
                    <tr>
                        <td>Nombre de libro:</td>
                        <td><input type="text" name="nom" id="" value="<?=$nom?>"></td>
                    </tr>
                    <tr>
                        <td>Autor:</td>
                        <td><input type="text" name="au" id="" value="<?=$au?>"></td>
                    </tr>
                    <tr>
                        <td>ISBN:</td>
                        <td><input type="text" name="isbn" id="" value="<?=$isbn?>"></td>
                    </tr>
                    <tr>
                        <td>Descripcion:</td>
                        <td><input type="text" name="descri" id="" value="<?=$descri?>"></td>
                    </tr>
                    <tr> 
                        <td><input type="submit" value="Actualizar"></td>
                        <td><a href="index.php">Cancelar</a</td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
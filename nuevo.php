<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport"content="width=device-width, initial-scale1.0">
        <title>Documento</title>
    </head>
    <body>
        <div> 
            <form action="sp_insertar.php" method="post">
                <table border="1"> 
                    <tr> 
                        <td> Ingresar Datos: </td>
                    </tr>
                    <tr>
                        <td>Nombre de libro:</td>
                        <td><input type="text" name="nom" id=""></td>
                    </tr>
                    <tr>
                        <td>Autor:</td>
                        <td><input type="text" name="au" id=""></td>
                    </tr>
                    <tr>
                        <td>ISBN:</td>
                        <td><input type="text" name="isbn" id=""></td>
                    </tr>
                    <tr>
                        <td>Descripcion:</td>
                        <td><input type="text" name="descri" id=""></td>
                    </tr>
                    <tr> 
                        <td><input type="submit" value="Guardar"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

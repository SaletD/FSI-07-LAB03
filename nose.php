<!DOCTYPE html>
<html>
    <head>
        <title>Registrar</title>
    </head>
    <body>
        <?php
            $servidor='localhost';
            $database='dbformulario';
            $usuario='root';
            $clave='';
            $conn=mysqli_connect($servidor,$database,$usuario,$clave)
                 or die ("Error en la conexión");
            $Nombre=$_POST['txtNombre'];
            $Autor=$_POST['txtAutor'];
            $ISBN=$_POST['txtISBN'];
            $Descripcion=$_POST['txtDescripcion'];

            $insertar="INSERT into tablalibro values ('$Nombre','$Autor','$Autor','$Descripcion')";

            $rta=mysqli_query($conn,$insertar)
                or die ("Error al insertar los registros");
            mysqli_close($conn);
            echo "Datos insertados correctamente";
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Inicio</title>
    </head>
    <body>
        <form action="Registro.php" method="POST">
            Nombre del libro:<input type ="text" name="txtNombre"><br/>
            Autor:<input type ="text" name="txtAutor"><br/>
            ISBN:<input type ="text" name="txtISBN"><br/>
            Descripcion:<input type ="text" name="txtDescripcion"><br/>
            <input type ="submit" value="Registrar" name="btnRegistar"><br/>
        </form>
    </body>
</html>

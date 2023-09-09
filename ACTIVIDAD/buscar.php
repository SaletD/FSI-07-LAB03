<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport"content="width=device-width, initial-scale1.0">
        <title>Modificar y Eliminar </title>
    </head>
    <body>
        <div>
            <form action="buscar.php" method ="post">
                <input type ="text" name="buscar" id="">
                <input type ="submit" value="Buscar">
                <a href="nuevo.php">Nuevo</a>
            </form>
        </div>
        <div>
            <table border ="1">
                <tr>
                    <td>ID</td>
                    <td>Nombre del libro:</td>
                    <td>Autor:</td>
                    <td>ISBN:</td>
                    <td>Descripción:</td>
                    <td>Eliminar:</td>
                    <td>Modificar:</td>
                </tr>
                <?php
                $buscar=$_POST['buscar'];
                $cnx=mysqli_connect("localhost","root","","dbformulario");
                $sql="SELECT id,nom, au, isbn, descri FROM tablalibro where nom like '$buscar' '%' or isbn like '$buscar' '%' order by id desc";
                $rta=mysqli_query($cnx,$sql);
                while ($mostrar=mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar['0']?></td>
                    <td><?php echo $mostrar['1']?></td>
                    <td><?php echo $mostrar['2']?></td>
                    <td><?php echo $mostrar['3']?></td>
                    <td><?php echo $mostrar['4']?></td>
                    <td>
                        <a href="sp_eliminar.php? id=<?php echo $mostrar['0']?>">Eliminar</a>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0']?>
                        & nom=<?php echo $mostrar['1']?> 
                        & au=<?php echo $mostrar['2']?> 
                        & isbn=<?php echo $mostrar['3']?>
                        & descri=<?php echo $mostrar['4']?>">Editar</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </body>

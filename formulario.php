<!DOCTYPE html>
<html>
    <head>
        <title>Modificar y Eliminar </title>
    </head>
    <body>
        <form method ="post">
            <input type ="text" name="Editar">
            <input type ="text" name="Eliminar">
            <input type ="submit">
        </form>
        <div>
            <table>
                <tr>
                    <td>Nombre libro:</td>
                    <td>Autor:</td>
                    <td>ISBN:</td>
                    <td>Descripción:</td>
                </tr>
                <?php
                $servidor='localhost';
                $database='login';
                $usuario='root';
                $clave='';

                $conn=new mysqli($servidor,$database,$usuario,$clave);
                if ($conn->connect_error){
                    die("Connection failed: ".$conn->connect_error);
                }
                $sql="SELECT nom,au,isbn,descri FROM tablalibro by id desc";
                $rta=mysqli_query($conn,$sql);
                while ($mostrar=mysqli_fetch_row($rta));
                ?>
                <tr>
                    <td><?php echo $mostrar['0']?></td>
                    <td><?php echo $mostrar['1']?></td>
                    <td><?php echo $mostrar['2']?></td>
                </tr>
                
            </table>
        </div>
    </body>
</html> https://www.youtube.com/watch?app=desktop&v=fGHMJynoJpc  

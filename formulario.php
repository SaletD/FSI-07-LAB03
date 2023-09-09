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
            <table>
                <tr>
                    <td>Nombre libro:</td>
                    <td>Autor:</td>
                    <td>ISBN:</td>
                    <td>Descripción:</td>
                </tr>
                <?php
                $cnx=mysqli_connect("localhost","root","root123456","dbformulario");
                $sql="SELECT nom, au, isbn, descri FROM tablalibro by id desc";
                $rta=mysqli_query($cnx,$sql);
                while ($mostrar=mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar['0']?></td>
                    <td><?php echo $mostrar['1']?></td>
                    <td><?php echo $mostrar['2']?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </body>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport"content="width=device-width, initial-scale1.0">
        <script src="https://kit.fontawesome.com/3722db6dc2.js" crossorigin="anonymous"></script>
        <link  rel="stylesheet" href="style.css">
        <link  rel="stylesheet" type="text/prueba">
        <title>Inicio de Sesión</title>
    </head>
    <body>
        <form action="IniciarSesion.php" method="post">
            <h1>INICIAR SESIÓN</h1>
            <hr> 
            <?php
            if(isset($_GET['error'])){
                ?>
                <p class="error">
                <?php
                echo $_GET['error']
                ?>
                </p>
                <?php
            }
            ?>
            <hr>
            <i class="fa-solid fa-user"></i>
            <label>Usuario</label>
            <input type="text" name="usu" placeholder="Nombre de usuario">

            <i class="fa-solid fa-lock"></i>
            <label>Clave</label>
            <input type="text" name="clav" placeholder="Clave">
        <hr>    
            <button type="submit">Iniciar Sesion</button>
            <a href="Crearcuenta.php">Crear Cuenta</a>
        </hr>
        </form>
    </body>
</html>

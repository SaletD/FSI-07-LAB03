<body>
    <?php
    echo "Hola Mundo"
    //variables en php
    $edad=31; //válido
    $3edad=31; //no válido
    $nombre='Juan'; //tipo texto
    $edad=33; //tipo númerico
    $altura=1.75; //decimales
    $mayorEdad=True; //Tipo bool
    //constantes en php
    define ('PI,3.141532');
    const PI=3.141532;
    Echo PI;
    //concatenar variables en php
    $marca='TOYOTA';
    echo 'La marca es '.$marca;
    echo "La marca es $marca";
    //arrays PHP
    $semana=['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
    $semana =[];
    $semana[]="Lunes";
    $semana[]="Martes";

    echo $semana[0]; //Lunes
    echo $semana[3]; //Jueves
    echo $semana[6]; //Domingo
    //condicionales
    if (condición){...}
    if ($a>1000){
        echo "Es mayor";
    } else{
        echo "Es menor o igual";
    }
    //Operador ternario
    echo ($a>1000)?"Es mayor":"Es menor o igual";
    switch ($num){
        case 0:
            echo "Num es igual a 0";
            break;
        case 1:
            echo "Num es igual a 1";
            break;
        case 2:
            echo "Num es igual a 2";
            break;
        default:
        echo "No se a que es ingual";
    break;} 
    //num es igual a 1
    //bucles en php
    $animalesFantasticos=['fénix','dragón','grifo','pegaso','cerebro'];
    foreach ($animalesFantasticos as $animal){
        echo $animal.'';
    }
    //formualrios en php
    echo $_POST["nombre"];
    //base de datos con PHP
    $servidor='localhost';
    $database='login';
    $usuario='root';
    $clave='';
    $con=new myqli($servidor, $usuario, $clave,$database);
    //check connection
    i8f ($conn ->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    ?>
</body>
<html>
    <body>
        <form method="post" action="envio.php">
            <input type="text" name="name">
            <input type="submit">
        </form>
    </body>
</html>

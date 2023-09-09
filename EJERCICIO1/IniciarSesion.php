<?php
session_start();
include('conexion.php');
if (isset($_POST['usu'])&& ($_POST['clav'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $Usuario=validate($_POST['usu']);
    $Clave=validate($_POST['clav']);

    if (empty($Usuario)){
        header("Location: index.php?error=El usuario es requerido");
        exit();
    }
    elseif (empty($Clave)){
        header("Location: index.php?error=La clave es requerido");
        exit ();
    }
    else{
        $Clave=md5($Clave);
        $sql="SELECT id, usu, clav FROM tablasesion where usu='$Usuario' AND clav='$Clave' ";
        $rta=mysqli_query($cnx,$sql);

        if (mysqli_num_rows($rta)===1){
            $row=mysqli_fetch_assoc($rta);
            if ($row['usu']===$Usuario && $row['clav']===$Clave){
                $_SESSION['usu']=$row['usu'];
                $_SESSION['id']=$row['id'];
                header("Location: prueba/index.php");
                exit();
            }
            else{
                header("Location:index.php?error=El usuario o la clave son incorrectas");
                exit();
            }
        }
    }
}else{
    header("Location:index.php?");
    exit();
}
?>

<?php
$id=$_GET['id'];

$cnx=mysqli_connect("localhost","root","","dbformulario");
$sql="DELETE FROM  tablalibro where id like $id";
$rta=mysqli_query($cnx,$sql);
if (!$rta){
    echo "No se Elimino :c";
}
else {
    header("Location: index.php");
}
?>
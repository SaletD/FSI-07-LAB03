<?php
$id=$_POST['id'];
$nom=$_POST['nom'];
$au=$_POST['au'];
$isbn=$_POST['isbn'];
$descri=$_POST['descri'];

$cnx=mysqli_connect("localhost","root","","dbformulario");
$sql="UPDATE tablalibro set nom='$nom',au='$au',isbn='$isbn',descri='$descri' where id like $id";
$rta=mysqli_query($cnx,$sql);
if (!$rta){
    echo "No se Actualizo :c";
}
else {
    header("Location: index.php");
}
?>

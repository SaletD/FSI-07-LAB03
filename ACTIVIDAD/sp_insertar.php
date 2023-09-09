<?php
$nom=$_POST['nom'];
$au=$_POST['au'];
$isbn=$_POST['isbn'];
$descri=$_POST['descri'];

$cnx=mysqli_connect("localhost","root","","dbformulario");
$sql="INSERT INTO tablalibro (nom, au, isbn, descri) VALUES ('$nom','$au','$isbn','$descri')";
$rta=mysqli_query($cnx,$sql);
if (!$rta){
    echo "No se inserto :c";
}
else {
    header("Location: index.php");
}
?>
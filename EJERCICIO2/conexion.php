<?php 
$host="localhost";
$user="root";
$pass="";
$database="dbusuarios";
$cnx=mysqli_connect($host,$user,$pass,$database);
if (!$cnx){
    echo "Conexion fallida";
}
?>
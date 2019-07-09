<?php
$host = "localhost";
$user = "Admin";
$pw = "ErikHaSu10-7";
$bd = "edu_vial_db";

$conexion=mysqli_connect($host,$user,$pw,$bd) or
die("Problemas con la conexión");

$Actividad1 = $_POST ["Actividad1"];


$ultimo = mysqli_query($conexion, "SELECT id FROM punpar ORDER BY id DESC LIMIT 1"); 
$row = mysqli_fetch_array($ultimo);
$pages = ceil($row[0]);
echo intval ($pages); 


mysqli_query($conexion, "UPDATE punpar SET actividad1 ='$Actividad1' WHERE id ='$pages'")
        or
        die("<h1>Problemas en el update 1:</h1>".mysqli_error($conexion));
 
echo " <h1> Datos actualizados 1 corretamete </h1>";

?>
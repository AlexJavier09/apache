<?php
$conexion = mysql_connect("localhost","ALEX","M5BGblatnebmPZ") or
die("Problemas en la seleccion de la base de datos");

mysql_select_db("Prosec", $conexion) or 
die('Problemas en la BD');

$usuario = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['mail'];

mysql_query("INSERT INTO usuario (nombre,apellido,mail) VALUES ('$usuario','$apellido','$correo' )",$conexion);

?>
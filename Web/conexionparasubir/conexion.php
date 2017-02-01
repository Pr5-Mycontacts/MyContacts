<?php
include("favicon.html");
$conexion = mysqli_connect("mysql.hostinger.es", "u893889399_usr", "qwerty1234", "u893889399_pr05");
if($conexion) {
	//echo 'Conectado a la BBDD </br>';
}
else{
	//echo 'No Conectado a la BBDD </br>';
}
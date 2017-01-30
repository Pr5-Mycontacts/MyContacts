<?php
include("favicon.html");
$conexion = mysqli_connect("localhost", "root", "", "bd_mycontacts");
if($conexion) {
	//echo 'Conectado a la BBDD </br>';
}
else{
	//echo 'No Conectado a la BBDD </br>';
}
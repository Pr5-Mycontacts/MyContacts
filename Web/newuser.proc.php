<?php
include("conexion.php");
session_start();
$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$correo_personal= $_POST['correo_personal'];
$correo_profesional= $_POST['correo_profesional'];
$telf_personal= $_POST['telf_personal'];
$telf_profesional= $_POST['telf_profesional'];
$tipo_contacto= $_POST['tipo_contacto'];
$lat_pers= $_POST['lat_pers'];
$long_pers= $_POST['long_pers'];
$usuario= $_SESSION['usuario'];


$query = "INSERT INTO tbl_contacts(nombre, apellidos, correo_personal, correo_profesional, telf_personal, telf_profesional, tipo_contacto, lat_pers, long_pers, usuario) VALUES('$nombre','$apellidos','$correo_personal','$correo_profesional','$telf_personal','$telf_profesional','$tipo_contacto','$lat_pers','$long_pers', '$usuario') ";



$resultado = $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: newuser.php");
}
else{
	echo "No se ha insertado :|";
}
?>
<?php
include("conexion.php");
$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$correo_personal= $_POST['correo_personal'];
$correo_profesional= $_POST['correo_profesional'];
$telf_personal= $_POST['telf_personal'];
$telf_profesional= $_POST['telf_profesional'];
$tipo_contacto= $_POST['tipo_contacto'];
$lat_pers=$_POST['lat_pers'];
$long_pers=$_POST['long_pers'];

$query = "INSERT INTO tbl_contacts(nombre, apellidos, correo_personal, correo_profesional,  telf_personal, telf_profesional, lat_pers, long_pers, tipo_contacto, usuario) VALUES('$nombre','$apellidos','$correo_personal','$correo_profesional','$telf_personal','$telf_profesional','$lat_pers','$long_pers','$tipo_contacto', 'Sergio') ";

$resultado = $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: newuser.php");
}
else{
	echo "No se ha insertado :|";
}
?>
<?php
include("conexion.php");
$nombre= $_POST['nombre'];
echo $nombre;
$apellidos= $_POST['apellidos'];
$correo_personal= $_POST['correo_personal'];
$correo_profesional= $_POST['correo_profesional'];
$telf_personal= $_POST['telf_personal'];
$telf_profesional= $_POST['telf_profesional'];
$tipo_contacto= $_POST['tipo_contacto'];

$query = "INSERT INTO tbl_contacts(nombre, apellidos, correo_personal, correo_profesional,  telf_personal, telf_profesional, tipo_contacto, usuario) VALUES('$nombre','$apellidos','$correo_personal','$correo_profesional','$telf_personal','$telf_profesional','$tipo_contacto', 'Sergio') ";

$resultado = $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: newuser.php");
}
else{
	echo "no se ha insertado";
}
?>
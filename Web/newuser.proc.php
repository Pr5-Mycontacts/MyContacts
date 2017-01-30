<?php
include("conexion.php");
$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$email1= $_POST['correo_personal'];
$email2= $_POST['correo_profesional'];
$telf_personal= $_POST['telf_personal'];
$telf_profesional= $_POST['telf_profesional'];
$tipo_contacto= $_POST['tipo_contacto'];

$query= "INSERT INTO tbl_contacts(nombre,apellidos, correo_personal, correo_profesional,  telf_personal, telf_profesional, tipo_contacto) VALUES('$nombre','$apellidos','$email1','$email2','$telf_personal','$telf_profesional','$tipo_contacto') ";
$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: newuser.php");
}
else{
	echo "no se ha insertado";
}
?>
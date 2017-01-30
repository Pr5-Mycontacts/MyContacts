<?php
include("conexion.php");
$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$email1= $_POST['email1'];
$email2= $_POST['email2'];
$telf_personal= $_POST['telf_personal'];
$telf_profesional= $_POST['telf_profesional'];
$tipo_contacto= $_POST['tipo_contacto'];

$query= "INSERT INTO tbl_contacts(recurso_nombre,recurso_tipo, recurso_disponible, recurso_foto) VALUES('$nombre','$apellidos','$disponible','$imagen') ";
$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: newuser.php");
}
else{
	echo "no se ha insertado";
}
?>
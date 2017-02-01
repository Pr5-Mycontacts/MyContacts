<?php
include("conexion.php");

$usuario= $_POST['usuario'];
$password= $_POST['password'];
$recovery= $_POST['recovery'];
$answ_recovery= $_POST['answ_recovery'];

$query = "INSERT INTO tbl_users(usuario, password, recovery) VALUES('$usuario','$password','$recovery') ";

$resultado = $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: home.php");
}
else{

	echo "no se ha insertado";
	sleep(5);
	header("Location: home.php");
}
?>
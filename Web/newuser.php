<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
	<title>My contacts</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
 	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/style.css">

</head>
<?php
include ("conexion.php");
session_start();
//session_destroy();
if(isset($_SESSION['usuario'])){
	echo "<div class=top-bar>";
	echo "<a href='cerrar_sesion.php'><i class='fa fa-sign-out fa-2x' aria-hidden='true' title='Logout'></i></a>"." Bienvenido " . $_SESSION['usuario'] . "<a style='float:right; padding-right:20px;padding-top:2px;' href='home.php'><i class='fa fa-arrow-left fa-2x' title='Go Back'></i></a>";
	echo "</div>";

}
else{
  header("Location: index.php");
}
?>
<body>

	<div class="pen-title">
	<h1><a href="index.php"><img class="logo" src="img/MyContactsLogo.png">  My Contacts</h1></a>
	</div>


	<!-- Form Module-->
	<div class="module form2-module">
	<div class="form">
	</div>
	<div class="form">
    <h2>Nuevo contacto:</h2>
    <form name=formulario action="newuser.proc.php" method="POST" onsubmit="return validar();">

		<input type="text" name="nombre" id="nombre" placeholder="Nombre" onfocus="document.formulario.nombre.style.borderColor='';"/>
		<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" onfocus="document.formulario.apellidos.style.borderColor='';"/>
		<input type="email" name="correo_personal" id="correo_personal" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Email Personal"/>
		<input type="email" name="correo_profesional" id="correo_profesional" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Email Profesional"/>
		<input type="tel" name="telf_personal" pattern="[0-9]{9}" placeholder="Teléfono Personal"/>
		<input type="tel" name="telf_profesional" pattern="[0-9]{9}" placeholder="Teléfono Profesional"/>



		<select name="tipo_contacto" id="tipo_contacto" required>
				<option value="" disabled selected hidden>Tipo de contacto</option>
				<option value="1">Profesional</option>
				<option value="2">Personal</option>
		</select>

		<div id="map" class="mapa"></div>
		<br><br>
	    <input type="text" disabled name="lat_pers" id="lat_pers" placeholder="latitude" readonly="readonly" />
	    <input type="text" disabled name="long_pers" id="long_pers" placeholder="longitude" readonly="readonly" />
	    <br>

    	<button>Enviar</button>
    </form>
	</div>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlvO6QnueCJUrb3yhqmEWDVb6CeIsdOvk&callback=initMap"></script>
	<script src="js/index.js"></script>

</body>
</html>

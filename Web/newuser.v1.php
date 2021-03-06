<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
	<title>My contacts</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
 	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/style.css">

		<!--valida nombre y apellido-->
		<script>
		function validar(){
				var error=true;
				if(document.formulario.nombre.value==""){
					document.formulario.nombre.style.borderColor='red';
					error=false;
				}
				if(document.formulario.apellidos.value==""){
					document.formulario.apellidos.style.borderColor='red';
					error=false;
				}
				return error;
			}
		</script>

		<!--ventana maps-->
		<script>
		function myFunction() {
   		window.open("maps.html", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=400,height=400");
		}
		</script>


</head>
<?php
include ("conexion.php");
session_start();
//session_destroy();
if(isset($_SESSION['usuario'])){
  echo "Bienvenido";
  echo " " . $_SESSION['usuario'];

  echo "<br><a href='home.php'><i class='fa fa-angle-left fa-2x' aria-hidden='true' title='Atras'></i></a><br/>";
  echo "<a href='cerrar_sesion.php'><i class='fa fa-sign-out fa-2x' aria-hidden='true' title='Logout'></i></a><br/>";
  
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
	<div class="module form-module">
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
		<a href="" onclick="myFunction()"> Busca la dirección...</a><br><br>
		<!--por aquí... no consigo recuperar los datos....-->
		<?php
		include("conexion.php");
		$lat_pers=$_POST['lat_pers'];
		$long_pers=$_POST['long_pers'];
		?>
		
    	<button>Enviar</button>
    </form>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>

</body>
</html>




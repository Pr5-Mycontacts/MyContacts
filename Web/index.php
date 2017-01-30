<!DOCTYPE html>
<html >

<head>
<link rel="import" href="favicon.html">
  <meta charset="UTF-8">
  <title>My contacts</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>
<?php
error_reporting(0);
session_start();

//recogida con el POST
$usuario = $_POST["usuario"];
$password = $_POST["password"];
include ("conexion.php");

$proceso = $conexion->query("SELECT * FROM tbl_users WHERE usuario='$usuario' AND password='$password'");
if(mysqli_num_rows($proceso)==1){
//if($resultado = mysqli_fetch_array($proceso)){
  $_SESSION['usuario'] = $usuario;
  header("Location: home.php");
  
}
else{
if(isset($usuario))
  echo'<div class="error"> Usuario incorrecto</div>';
}

?>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1><img class="logo" src="img/MyContactsLogo.png">   My Contacts</h1>

</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Registrarse</div>
  </div>
  <div class="form">
    <h2>Accede a tu cuenta</h2>
    <form action="" method="POST">
      <input id="usuario" name="usuario" type="email" placeholder="Email"/>
      <input id="password" name="password" type="password" placeholder="Contraseña"/>
      <button>Acceder</button>
    </form>
  </div>
  <div class="form">
    <h2>Crear una cuenta</h2>
    <form action="newuser.php" method="POST">
      <input type="email" placeholder="Email"/>
      <input type="password" placeholder="Contraseña"/>
      <input type="password" placeholder="Repite la contraseña"/>
      <select name="recovery_question">
      <option value="" disabled selected hidden>Pregunta de seguridad</option>
      <option value="1">¿Cual es tu color favorito?</option>
      <option value="2">¿Cual era el nombre de tu mejor amigo en la infancia?</option>
      <option value="3">¿Cual fue el nombre de tu primera mascota?</option>
      </select>
      <input type="text" placeholder="Respuesta"/>
      <button>Registrarse</button>
    </form>
  </div>
  <div class="cta"><a href="forbidden.php">He olvidado mi contraseña</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>

<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>My contacts</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">

</head>


<?php
include ("conexion.php");
session_start();
//session_destroy();
if(isset($_SESSION['usuario'])){
  echo "<div class=top-bar>";
  echo "<a href='cerrar_sesion.php'><i class='fa fa-sign-out fa-2x' aria-hidden='true' title='Logout'></i></a>"." Bienvenido " . $_SESSION['usuario'] . "<a style='float:right; padding-right:20px;padding-top:2px;' href='newuser.php'><i class='fa fa-plus fa-2x' title='Add User'></i></a>";
  echo "</div>";
}
else{
  header("Location: index.php");
}
?>

<body>
<div class="pen-title">
  <h1><img class="logo" src="img/MyContactsLogo.png">   My Contacts</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-4">
      <div class="card transition">
        <h2 class="transition">Contacto</h2>
        <p class="p1">Nombre:</p>
        </br>
        </br>
        <p class="p">Apellidos:</p>
        </br>
        </br>
        <p class="p">Teléfono:</p>
        </br>
        </br>
        <div class="card_circle transition"></div>
      </div>
    </div>
    <div class="col-xs-4">
      <div class="card transition">
        <h2 class="transition">Contacto</h2>
        <p class="p1">Nombre:</p>
        </br>
        </br>
        <p class="p">Apellidos:</p>
        </br>
        </br>
        <p class="p">Teléfono:</p>
        </br>
        </br>
        <div class="card_circle transition"></div>
      </div>
    </div>
    <div class="col-xs-4">
      <div class="card transition">
        <h2 class="transition">Contacto</h2>
        <p class="p1">Nombre:</p>
        </br>
        </br>
        <p class="p">Apellidos:</p>
        </br>
        </br>
        <p class="p">Teléfono:</p>
        </br>
        </br>
        <div class="card_circle transition"></div>
      </div>
    </div>
  </div>
</div>
</br>
</br>
<div class="container">
  <div class="row">
    <div class="col-xs-4">
      <div class="card transition">
        <h2 class="transition">Contacto</h2>
        <p class="p1">Nombre:</p>
        </br>
        </br>
        <p class="p">Apellidos:</p>
        </br>
        </br>
        <p class="p">Teléfono:</p>
        </br>
        </br>
        <div class="card_circle transition"></div>
      </div>
    </div>
    <div class="col-xs-4">
      <div class="card transition">
        <h2 class="transition">Contacto</h2>
        <p class="p1">Nombre:</p>
        </br>
        </br>
        <p class="p">Apellidos:</p>
        </br>
        </br>
        <p class="p">Teléfono:</p>
        </br>
        </br>
        <div class="card_circle transition"></div>
      </div>
    </div>
    <div class="col-xs-4">
      <div class="card transition">
        <h2 class="transition">Contacto</h2>
        <p class="p1">Nombre:</p>
        </br>
        </br>
        <p class="p">Apellidos:</p>
        </br>
        </br>
        <p class="p">Teléfono:</p>
        </br>
        </br>
        <div class="card_circle transition"></div>
      </div>
    </div>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>

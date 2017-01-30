<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>My contacts</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>


<?php
session_start();
//session_destroy();
if(isset($_SESSION['usuario'])){
  echo "Bienvenido";
  echo " " . $_SESSION['usuario'];

  
  echo "<br><a href='cerrar_sesion.php'><i class='fa fa-sign-out fa-2x' aria-hidden='true' title='Logout'></i></a><br/>";
  
}
else{
  header("Location: index.php");
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
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>

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

<?php
      include("conexion.php");
      $usuario=$_SESSION['usuario'];
      $query="SELECT * FROM tbl_contacts WHERE usuario = '$usuario'";
      $resultado=$conexion->query($query);
      echo "<div class='container'>
            <div class='row'>";
      while($valores= mysqli_fetch_array($resultado)){
    
echo '<div class="container">
  <div class="row">
      <div class="col-xs-4">
      <div class="card transition">
        <h2 class="transition">Contacto</h2>

        <p><img src= "https://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=200x100&maptype=roadmap
&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318
&markers=color:red%7Clabel:C%7C40.718217,-73.998284
&key=AIzaSyAlvO6QnueCJUrb3yhqmEWDVb6CeIsdOvk"></img></p>



        <p class="p1">Nombre: '.$valores['nombre'].'</p>
        </br>
        </br>
        <p class="p">Apellidos: '.$valores['apellidos'].'</p>
        </br>
        </br>
        <p class="p">Teléfono:'.$valores['telf_personal'].'</p>
        </br>
        </br>
         <p class="p">Correo Personal:'.$valores['correo_personal'].'</p>
        </br>
        </br>
        <div class="card_circle transition"></div>
      </div>
      </div>

';
}
echo "</div>
  </div>";
?>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>

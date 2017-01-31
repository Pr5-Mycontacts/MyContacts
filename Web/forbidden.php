<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>My contacts</title>
  <?php
  include ("conexion.php");
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1><a href="index.php"><img class="logo" src="img/MyContactsLogo.png">   My Contacts</h1></a>

</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="form">
  </div>
  <div class="form">
    <h2>Introduce tu correo:</h2>
    <form action="recovery.php">
      <input type="text" placeholder="Email"/>
      <button>Enviar</button>
    </form>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>
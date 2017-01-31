<?php
session_start();
session_destroy();
include ("conexion.php");
header("location: index.php");
?>
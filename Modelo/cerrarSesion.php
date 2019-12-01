<?php
session_start();
include("../Modelo/conexion1.php");
unset($_SESSION);
session_destroy();
mysqli_close($conexion);
//header('location: cartelera.html');
?>
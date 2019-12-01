<?php
include("../Modelo/conexion1.php");
	session_start();


$usu = $_GET['matricula'];
$pass = $_GET['pass'];
$datosP;


//$_SESSION['nombre']=$_POST['txtnombre'];

$consulta = "SELECT * FROM usuario WHERE matricula='$matricula' and password='$pass'";
$resultado = mysqli_query($conexion,$consulta) or die ("Algo anda mal con la consulta");



	while($columna2 = mysqli_fetch_array($resultado)){		
		$datosP[0]=$columna2['idRoles'];
		$datosP[1]=$columna2['matricula'];
		$datosP[2]=$columna2['password'];
    }   
    $dato = implode('///',$datosP);
    $_SESSION['usuario']=$datosP[0];
    echo utf8_encode($dato);


?>
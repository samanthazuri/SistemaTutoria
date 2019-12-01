<?php
include("../Modelo/conexion1.php");
	session_start();
	
	if(isset($_SESSION['usuario'])){
		$usu=$_SESSION['usuario'];
		echo($usu);
	}else{
		echo("no existe");
	}
	

?>
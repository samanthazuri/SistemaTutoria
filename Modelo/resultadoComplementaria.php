<?php

	include("../Modelo/conexion1.php");
	session_start();
	$json = json_decode($_GET['json']);
	//echo $json->matricula;

	/*$json2 = '{ 
    "title": "PHP", 
    "site": "GeeksforGeeks"
	}'; 
	/*$data = json_decode($json2); */
  

	$matricula = $json->matricula;
	$opc = $json->opc;
	$nom_act = $_COOKIE["nom_act"];
	$cargo = $_SESSION['tipoJefe'];



	if($opc == "reprobar")
	{
		$resultado = "";
		$mensaje = "Reprobado";
	}
	else
	{
		$resultado = "aprobado";
		$mensaje = "Aprobado";
	}

	if($cargo == "J3")
	{
		$nom_act2 = $json->act2;
		$update = "UPDATE act_complementarias2 SET $nom_act2 = '$resultado' WHERE matricula = '$matricula'";
		mysqli_query($conexion, $update) or die("ERROR AL APROBAR AL USUARIO: $update ");
		echo("Alumno $mensaje");
		mysqli_close($conexion);
	}else
	{
		$update = "UPDATE act_complementarias2 SET $nom_act = '$resultado' WHERE matricula = '$matricula'";
		mysqli_query($conexion, $update) or die("ERROR AL APROBAR AL USUARIO");
		echo("Alumno $mensaje");
		mysqli_close($conexion);
	}

	
	

?>
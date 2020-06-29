<?php
	require("conexion1.php");
	session_start();
	$cargo = $_SESSION['tipoJefe'];

	if($cargo == "J1" || $cargo == "J2"){
		//COORDINADOR NO PUEDE VER EL APARTADO DE REPORTES
		//SUBDIRCTOR ACADEMICO VE 
		$cargoActividad = "act_academica";
		$title = "Actividad academica";

	} else if($cargo == "J3")
	{
		$cargoActividad = "act_deportiva";
		$cargoActividad2 = "act_cultural_civica";
		$title = "Atividad deportiva";
		$title2 = "Atividad civica";


	}else if($cargo == "J4")
	{
		$cargoActividad = "act_ambiental";
		$title = "Actividad ambiental";
	}
	else if($cargo == "J5")
	{
		$cargoActividad = "act_inovacion";
		$title = "Actividad inovación";
	}



?>
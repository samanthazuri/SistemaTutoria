<?php

	require("conexion1.php");
	session_start();
 
	$matricula=$_GET['usuario'];
	$nivel=$_GET['nivel'];

	//SELECT * FROM lenguas_extranjeras WHERE matricula = '$matricula'

	$update= "UPDATE lenguas_extranjeras SET nivel = '$nivel' WHERE matricula = '$matricula'";
				mysqli_query($conexion,$update)  or die("Error,$update");


	echo("NIVEL ACTUALIZADO A: $nivel");



?>
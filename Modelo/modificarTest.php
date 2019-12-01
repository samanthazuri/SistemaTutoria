<?php
	require("conexion1.php");
	session_start();

	$mensaje = "ERROR";
	$id_p = $_SESSION['dato'];

	$matricula = $_POST['matricula'];
	$autoestima = $_POST['autoestima'];
	$aprendizaje = $_POST['aprendizaje'];


	$update = "UPDATE act_tutoria SET autoestima = '$autoestima', aprendizaje = '$aprendizaje' WHERE matricula = '$matricula'";
	//$consulta = "SELECT * FROM act_tutoria WHERE cve_tut = '$id_p'";
	$resultado = mysqli_query($conexion, $update);

	/*while($datos = mysqli_fetch_assoc($resultado))
	{
		$arreglo["data"][] = array_map("utf8_encode",$datos);
	}*/

	if(! $resultado)
	{
		$mensaje = "Exito";
	}

	echo ($mensaje);

	

	
	mysqli_free_result($resultado);
	mysqli_close($conexion);


?>
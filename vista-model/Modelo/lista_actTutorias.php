<?php
	require("conexion1.php");
	session_start();

	$tabla = "";
	$id_p = $_SESSION['dato'];



	$consulta = "SELECT * FROM act_tutoria WHERE cve_tut = '$id_p'";
	$resultado = mysqli_query($conexion, $consulta) or die("Error: $resultado");

	while($datos = mysqli_fetch_assoc($resultado))
	{
		$arreglo["data"][] = array_map("utf8_encode",$datos);
	}
	echo json_encode($arreglo);

	/*$resultado = mysqli_query($conexion, $consulta)
	or die("Algo salio mal: $consulta");
	
	while($columna = mysqli_fetch_array($resultado))
	{
		$tabla .= "<tr>";
		$tabla .= "<td>".utf8_encode($columna['matricula'])."</td><td>".utf8_encode($columna['autoestima'])."</td><td>".utf8_encode($columna['estilos_aprendizaje'])."</td><td>".utf8_encode($columna['motivacion_estudio'])."</td><td>".utf8_encode($columna['organizacion_est'])."</td>";
		$tabla .= "</tr>";		
	}

	echo($tabla);*/


	
	mysqli_free_result($resultado);
	mysqli_close($conexion);


?>
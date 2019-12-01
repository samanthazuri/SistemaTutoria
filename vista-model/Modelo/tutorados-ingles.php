<?php

	require("conexion1.php");
	session_start();

	$tabla = "";
	$id_p = $_SESSION['dato'];
	//echo($id_p);

		$consulta = "SELECT lenguas_extranjeras.matricula, lenguas_extranjeras.nivel, lenguas_extranjeras.calificacion, alumno.nombre_s, alumno.ap_pat, alumno.ap_mat
		FROM lenguas_extranjeras
		INNER JOIN alumno ON lenguas_extranjeras.matricula = alumno.matricula
		WHERE lenguas_extranjeras.id_p = '$id_p'";

	$resultado = mysqli_query($conexion, $consulta)
	or die("Algo salio mal: $consulta");
	
	while($columna = mysqli_fetch_array($resultado))
	{
		$tabla .= "<tr>";
		$tabla .= "<td>".utf8_encode($columna['matricula'])."</td><td>".utf8_encode($columna['nombre_s'])."</td><td>".utf8_encode($columna['ap_pat'])." ".utf8_encode($columna['ap_mat'])."</td><td>".utf8_encode($columna['nivel'])."</td><td>".utf8_encode($columna['calificacion'])."</td>";
		$tabla .= "</tr>";		
	}

	echo($tabla);


?>
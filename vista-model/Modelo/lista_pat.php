<?php
	require("conexion1.php");
	session_start();

	$tabla = "";
	$id_p = $_SESSION['dato'];


	$consulta = "SELECT tutor.id_p, tutor.pat, personal.nombre, personal.apellido_pat, personal.apellido_mat, personal.cve_division 
	FROM tutor 
	INNER JOIN personal
	ON tutor.id_p = personal.id_p";

	$resultado = mysqli_query($conexion, $consulta)
	or die("Algo salio mal: $consulta");
	
	while($columna = mysqli_fetch_array($resultado))
	{
		$tabla .= "<tr>";
		$tabla .= "<td>".utf8_encode($columna['id_p'])."</td><td>".utf8_encode($columna['nombre'])."</td><td>".utf8_encode($columna['apellido_pat'])." ".utf8_encode($columna['apellido_mat'])."</td><td>".utf8_encode($columna['cve_division'])."</td><td><a href='../pat/".utf8_encode($columna['pat'])."'>".utf8_encode($columna['pat'])."</a></td>";
		$tabla .= "</tr>";		
	}

	echo($tabla);


	
	mysqli_free_result($resultado);
	mysqli_close($conexion);


?>
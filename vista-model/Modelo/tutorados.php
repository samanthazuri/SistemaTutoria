<?php
	require("conexion1.php");
	session_start();
	$cve_tut = $_SESSION['dato'];

	$tabla = "";

	$consulta = "SELECT * FROM alumno
	WHERE cve_tut = '$cve_tut'";

	$resultado = mysqli_query($conexion, $consulta)
	or die("Algo salio mal");
	
	while($columna = mysqli_fetch_array($resultado))
	{
				
	
		$tabla .= "<tr>";
		$tabla .= "<td>".utf8_encode($columna['matricula'])."</td><td>".utf8_encode($columna['nombre_s'])."</td><td>".utf8_encode($columna['ap_pat'])." ".utf8_encode($columna['ap_mat'])."</td><td>".utf8_encode($columna['semestre'])."</td><td>".utf8_encode($columna['grupo'])."</td><td><a href='../foda/".utf8_encode($columna['foda'])."'>".utf8_encode($columna['foda'])."</a></td><td><a href='../linelive/".utf8_encode($columna['linelive'])."'>".utf8_encode($columna['linelive'])."</a></td>";
		$tabla .= "</tr>";		
	}

	echo($tabla);
?>
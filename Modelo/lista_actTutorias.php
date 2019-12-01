<?php
	require("conexion1.php");
	session_start();

	$tabla = "";
	$id_p = $_SESSION['dato'];

	//echo"$id_p";
	$query = "SELECT * FROM act_tutoria WHERE cve_tut = '$id_p'";
	$resultado = mysqli_query($conexion, $query);
	//echo"$query";
	//echo("resultado: $resultado");

	if( !$resultado)
	{
		//echo" eroor $id_p";
		die("Error");
	}else{
		//echo" bien $id_p";
	/*while($datos = mysqli_fetch_assoc($resultado))
	{
		$arreglo["data"][] = array_map("utf8_encode",$datos);
	}
	echo json_encode($arreglo);*/

		foreach ($resultado as $row) {
			$data[] = array(
					"matricula" => utf8_encode($row['matricula']), 
					"autoestima" => utf8_encode($row['autoestima']), 
					"estilos_aprendizaje"=> utf8_encode($row['estilos_aprendizaje']),
					"motivacion_estudio"=> utf8_encode($row['motivacion_estudio']),
					"organizacion_est"=> utf8_encode($row['organizacion_est'])
	
				);

			
			//echo (utf8_encode($row['matricula'])."//".utf8_encode($row['autoestima'])."//".utf8_encode($row['estilos_aprendizaje'])."//".utf8_encode($row['motivacion_estudio'])."//".utf8_encode($row['organizacion_est']) );
		}
		echo json_encode($data);
	}
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
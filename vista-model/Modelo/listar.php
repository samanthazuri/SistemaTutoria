<?php
	include ("../Modelo/conexion1.php");
	session_start();
	$ActvidadF = "No registrado";
	$cargo = $_SESSION['tipoJefe'];
	 //echo("CARGO:" .$cargo);

	  if($cargo == "J1" || $cargo == "J2"){
	  	//COORDINADOR NO PUEDE VER EL APARTADO DE REPORTES
	  	//SUBDIRCTOR ACADEMICO VE 

	  	$cargoActividad = "Actividades academicas";

	  } else if($cargo == "J3")
	  {
	  	$cargoActividad = "Actividad deportiva||Cultural y Civicas";
	  	$cargoActividad1 = "Actividad deportiva";
	  	$cargoActividad2 = "Cultural y Civicas";

	  }else if($cargo == "J4")
	  {
	  	$cargoActividad = "Actividad Ambiental";
	  }
	  else if($cargo == "J5")
	  {
	  	$cargoActividad = "Actividad Tecnologica o Emprendimiento";
	  }

	$query = "SELECT act_complementarias.id_actividades, act_complementarias.matricula, act_complementarias.nom_act, alumno.nombre_s, alumno.ap_pat, alumno.ap_mat, alumno.cve_div, alumno.semestre
		FROM act_complementarias
		INNER JOIN alumno ON alumno.matricula = act_complementarias.matricula";
	$resultado = mysqli_query($conexion, $query);

	//echo("resultado: $resultado");

	if( !$resultado)
	{
		die("Error");
	}else{
		//echo"sjdjsd";
		foreach ($resultado as $row) {

			$actividades =  $row['nom_act'];
			$array=explode('||', $actividades);
			$tam_array=sizeof($array);

			for ($i=0; $i < $tam_array ; $i++) { 

				if($cargoActividad."(registrado)" == $array[$i])
				{
					$ActvidadF = $array[$i];
				}
			}

			if($ActvidadF != "No registrado")
			{
				$data[] = array(
					"matricula" => $row['matricula'], 
					"nombre_s" => $row['nombre_s'], 
					"apellidos"=> $row['ap_pat']." ".$row['ap_mat'],
					"cve_div"=> $row['cve_div'],
					"semestre"=> $row['semestre'],
					"nom_act"=>$ActvidadF
	
				);
				$ActvidadF = "No registrado";
			}
		
		}
		echo json_encode($data);
	}
	
	mysqli_free_result($resultado);
	mysqli_close($conexion);

?>
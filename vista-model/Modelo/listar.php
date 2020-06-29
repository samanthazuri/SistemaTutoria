<?php
	include ("../Modelo/conexion1.php");
	session_start();
	$ActvidadF = "No registrado";
	$cargo = $_SESSION['tipoJefe'];
	//$cargo = "J3";
	//echo("CARGO:" .$cargo);
	 //
	if($cargo == "J1" || $cargo == "J2"){
		//COORDINADOR NO PUEDE VER EL APARTADO DE REPORTES
		//SUBDIRCTOR ACADEMICO VE 
		$cargoActividad = "act_academica";
		$title = "Actividad academica";

	} else if($cargo == "J3")
	{
		$cargoActividad = $_SESSION['J3Opc'];
		//$cargoActividad2 = "act_cultural_civica";
		if($cargoActividad == "act_deportiva")
		{
			$title = "Atividad deportiva";
		}
		else
		{	
			$title2 = "Atividad civica";
		}



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
	//echo("CARGO:" .$cargo. " ACTIVIDAD: ".$cargoActividad);
	//$_COOKIE["nom_act"] = $cargoActividad;
	setcookie("nom_act", $cargoActividad);

	/*if($cargo == "J3")
	{

		jefeJ3($cargoActividad, $cargoActividad2);
		setcookie("nom_act2", $cargoActividad2);

	}
	else
	{*/
		jefes($cargoActividad );
		setcookie("nom_act", $cargoActividad);
	//}


	function jefeJ3($cargoActividad, $cargoActividad2){
		include ("../Modelo/conexion1.php");

		$query = "SELECT act_complementarias2.id_actividades, act_complementarias2.matricula, act_complementarias2.$cargoActividad, act_complementarias2.$cargoActividad2, alumno.nombre_s, alumno.ap_pat, alumno.ap_mat, alumno.cve_div, alumno.semestre, act_complementarias2.num_act, act_complementarias2.id_tutor
		FROM act_complementarias2
		INNER JOIN alumno ON alumno.matricula = act_complementarias2.matricula
		WHERE act_complementarias2.$cargoActividad = 'registrado' || act_complementarias2.$cargoActividad2 = 'registrado'";
		$resultado = mysqli_query($conexion, $query);

		if( !$resultado)
		{
			die("Error");
		}else{
			//echo"sjdjsd";
			foreach ($resultado as $row) {
	
				$btns = "<button type='button' class='btn btn-success btn-sm aprobar' act='act_deportiva'>Aprobar</button><button type='button' class='btn btn-danger btn-sm reprobar' act='act_deportiva'>Rprobar</button>";
				$btns2 = "<button type='button' class='btn btn-success btn-sm aprobar' act = 'act_cultural_civica'>Aprobar</button><button type='button' class='btn btn-danger btn-sm reprobar' act = 'act_cultural_civica'>Rprobar</button>";

					if($row['act_deportiva'] != "registrado")
					{
						$btns = "----";
					}
					if($row['act_cultural_civica'] != "registrado")
					{
						$btns2 = "----";
					}

				
					$data[] = array(
						"matricula" => $row['matricula'], 
						"nombre_s" => $row['nombre_s'], 
						"apellidos"=> $row['ap_pat']." ".$row['ap_mat'],
						"cve_div"=> $row['cve_div'],
						"semestre"=> $row['semestre'],
						"numAct"=> $row['num_act'],
						"tutor"=> $row['id_tutor'],
						"nom_act"=> $btns,
						"nom_act2"=> $btns2 
					);
					
				
			
			}
			echo json_encode($data);
		}
	
		mysqli_free_result($resultado);
		mysqli_close($conexion);
	}

	function jefes($cargoActividad ){
		include ("../Modelo/conexion1.php");
		//session_start();

		$query = "SELECT act_complementarias2.id_actividades, act_complementarias2.matricula, act_complementarias2.$cargoActividad, alumno.nombre_s, alumno.ap_pat, alumno.ap_mat, alumno.cve_div, alumno.semestre, act_complementarias2.num_act, act_complementarias2.id_tutor
		FROM act_complementarias2
		INNER JOIN alumno ON alumno.matricula = act_complementarias2.matricula
		WHERE act_complementarias2.$cargoActividad = 'registrado'";
		$resultado = mysqli_query($conexion, $query);

		if( !$resultado)
		{
			die("Error");
		}else{
			//echo"sjdjsd";
			foreach ($resultado as $row) {
	
	
				$btns = "<button type='button' class='btn btn-success btn-sm aprobar'>Aprobar</button><br><button type='button' class='btn btn-danger btn-sm reprobar'>Rprobar</button>";
					$data[] = array(
						"matricula" => $row['matricula'], 
						"nombre_s" => $row['nombre_s'], 
						"apellidos"=> $row['ap_pat']." ".$row['ap_mat'],
						"cve_div"=> $row['cve_div'],
						"semestre"=> $row['semestre'],
						"numAct"=> $row['num_act'],
						"tutor"=> $row['id_tutor'],
						"nom_act"=> $btns
					);
					
				
			
			}

			echo json_encode($data);

		}
	
		mysqli_free_result($resultado);
		mysqli_close($conexion);
	}

	
	
	

?>
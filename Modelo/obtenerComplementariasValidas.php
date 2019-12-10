<?php
session_start();
require("conexion1.php");
	
	$matricula=$_GET['matricula'];
	$cargo = $_SESSION['tipoJefe'];
	$alumnoRegistrado=false;
	$alumnoActividades=false;
	$selectComponent= "<option act='none' class='nav-link disabled' aria-disabled='true'>Seleccione una actividad</option>";
	$estado= "none";
	
	//echo($matricula."  ".$cargo);
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

	$busca= "SELECT * FROM alumno WHERE matricula ='$matricula'";
    $sql=mysqli_query($conexion, $busca) or die ("Error");

	while ($columna=mysqli_fetch_array($sql)) {
			$cve_tut= $columna['cve_tut'];
			$alumnoRegistrado=true;
			//echo("EL TUTOR ES: ".$cve_tut);

			$busca_act= "SELECT * FROM act_complementarias2 WHERE matricula = '$matricula'";
			$sql2=mysqli_query($conexion, $busca_act) or die ("Error");
        	//echo($busca_act);
			while ($columna2=mysqli_fetch_array($sql2)) 
			{
				$estado= "on"; 
				$alumnoActividades = true;
				//echo("EL TUTOR ES: ".$cve_tut);
				if($cargo == "J3")
				{
					$act_nom1 = $columna2[$cargoActividad];
					$act_nom2 = $columna2[$cargoActividad2];
					if($act_nom1 == "")
					{
						$selectComponent .= "<option act='$cargoActividad'>$title</option>";
					}
					if($act_nom2 == "")
					{
						$selectComponent .= "<option act='$cargoActividad2'>$title2</option>";
					}
					
					if($act_nom1 == "registrado" && $act_nom2 == "registrado")
					{
						$selectComponent = "registrado";
					}
					else if($act_nom1 == "aprobado" && $act_nom2 == "aprobado")
					{
						$selectComponent = "aprobado";
					}
					$numActividades = $columna2['num_act'];
				}else
				{
					$act_nom1 = $columna2[$cargoActividad];
					if($act_nom1 == "")
					{
						$selectComponent .= "<option act='$cargoActividad'>$title</option>";
					}else if($act_nom1 == "registrado")
					{
						$selectComponent = "registrado";
					}else if($act_nom1 == "aprobado")
					{
						$selectComponent = "aprobado";
					}
					$numActividades = $columna2['num_act'];
				}
			}

			//if()
	}
	if(!$alumnoActividades){
		if($cargo == "J3")
		{
			$selectComponent .= "<option act='$cargoActividad'>$title</option><option act='$cargoActividad2'>$title2</option>";
		}else
		{
			$selectComponent .= "<option act='$cargoActividad'>$title</option>";
		}
		$numActividades = 0;
		echo("$numActividades///$cve_tut///$selectComponent");
	}else if($alumnoRegistrado)
	{
		echo("$numActividades///$cve_tut///$selectComponent");
	}
	else{
		echo"Matricula NO VALIDA";
	}


	//$alumnoRegistrado
	//
	////echo("$numActividades///$cargoIgual///$cve_tut///$selectComponent");
	

?>
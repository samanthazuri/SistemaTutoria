<?php
session_start();
require("conexion1.php");
	
	$matricula=$_GET['matricula'];
	$alumnoRegistrado=false;
	$numActividades= 0;
	$act_nom = "";
	$cargoIgual = "none";
	$cve_tut ="none";
	$iguales =false;
	$selectComponent= "<option class='nav-link disabled' aria-disabled='true'>Seleccione una actividad</option>";
	$contJ3 = 0;
	//$actComplementarias = "Actividad Tecnologica o Emprendimiento||Cultural y Civicas||Actividad Ambiental||Actividades academicas||Actividad deportiva||";

	$mensaje="none";

	 // $cargo = $_SESSION['tipoJefe'];
	 // echo("CARGO:" .$cargo);
	 // 
	 $cargo = $_SESSION['tipoJefe'];
	 //echo("CARGO:" .$cargo);

	  if($cargo == "J1" || $cargo == "J2"){
	  	//COORDINADOR NO PUEDE VER EL APARTADO DE REPORTES
	  	//SUBDIRCTOR ACADEMICO VE 

	  	$cargoActividad = "Actividades academicas";

	  } else if($cargo == "J3")
	  {
	  	$cargoActividad = "Actividad deportiva||Cultural y Civicas";

	  }else if($cargo == "J4")
	  {
	  	$cargoActividad = "Actividad Ambiental";
	  }
	  else if($cargo == "J5")
	  {
	  	$cargoActividad = "Actividad Tecnologica o Emprendimiento";
	  }

	$busca= "SELECT * FROM alumno WHERE matricula ='$matricula'";
    $sql=mysqli_query($conexion, $busca) or die ("Error");

	while ($columna=mysqli_fetch_array($sql)) {
			$cve_tut= $columna['cve_tut'];
			$alumnoRegistrado=true;
			//echo("EL TUTOR ES: ".$cve_tut);

			$busca_act= "SELECT * FROM act_complementarias WHERE matricula = '$matricula'";
		

			$sql2=mysqli_query($conexion, $busca_act) or die ("Error");
        
			while ($columna2=mysqli_fetch_array($sql2)) 
			{ 
				$act_nom .= $columna2['nom_act'];
				$numActividades = $columna2['num_act'];
			}

			//if()
	}
	//echo("Actividades: $act_nom");
	//array que tiene las actividades aprobadas por el alumno
		$array1=explode('||', $act_nom);
		$tam_array1=sizeof($array1);

		$array2=explode('||', $cargoActividad);
		//echo($array2[0]."ssdsdsdsdjshdhjsjdhsdhjsdshdhjds|||||||");
		$tam_array2=sizeof($array2);
	if($act_nom != "")
	{
		

		//$actComplementarias = "Inovacion tecnologica||Cultural deportiva||Ambiental||";
		//echo("A1: $tam_array1 --- A2: $tam_array2");
		for ($i=0; $i < $tam_array2 ; $i++) { 

			for ($j=0; $j <$tam_array1 ; $j++) { 
				//$j2 =$j;
				//echo("VEIRIFICANDO:");
				//echo("||||SON IGUALES||||$array2[$i]"."(registrado) == $array1[$j]) || ($array2[$i].(aprobado) == $array1[$j])||||------");
				if( ($array2[$i]."(registrado)" == $array1[$j]) || $array2[$i]."(aprobado)" == $array1[$j] ){
				//echo("||||SON IGUALES||||$array2[$i](registrado) == $array1[$j] || $array2[$i](aprobado) == $array1[$j]||||");
					if($cargo == "J3")
					{
						$contJ3++;
					}
					$iguales=true;
					//echo("igaules es $iguales");
					$cargoIgual = $array1[$j];
					$cargoIgual2 = $array2[$i];
					//echo("CARGO 2 es: $cargoIgual2 ---");
					//$j2 = $j;
				//	echo("CURSO YA LA COMPLEMENTARIA DE: $array1[$j] -------");
					//break;
				}
				$comp = $array2[$i];
				
			}

			if($contJ3 <= 1 && $cargo == "J3")
			{
				$iguales=false;
				//echo("IGUALES es $iguales ----");
			}
			//echo("$array2[$i] == $array1[$j]=========");
			//echo("iguales == $iguales -----");
			//echo("igaules es $iguales");

		}
		//echo("iguales: $iguales");
		if($iguales == false )
			{
				//echo("iguales: $iguales");
				//echo("Cargo: $cargo");
				if($cargo == "J3")
				{
					//echo("Cargo: $cargo");
					for ($i=0; $i < $tam_array2 ; $i++)
					{
						//echo("|||||$cargoIgual2 != $array2[$i]||||||");
						if($cargoIgual2 != $array2[$i])
						$selectComponent .= "<option value='$array2[$i]'>$array2[$i]</option>";
					}

				}else
				{
					$selectComponent .= "<option value='$cargoActividad'>$cargoActividad</option>";
				}
				
				
				
			}
			$iguales=false;
	}
	else
	{

		if($cargo == "J3")
		{
			//echo("Cargo: $cargo");
			//echo("A1: $tam_array1 --- A2: $tam_array2");
			for ($i=0; $i < $tam_array2 ; $i++)
			{
				//if($cargoIgual2 != $array2[$i])
				$selectComponent .= "<option value='$array2[$i]'>$array2[$i]</option>";
				//$selectComponent .= "none";
			}

		}else
		{
			$selectComponent .= "<option value='$cargoActividad'>$cargoActividad</option>";
			//$selectComponent .= "none";
		}
		//$selectComponent .= "<option value='$cargoActividad'>$cargoActividad</option>";
	}

	if(!$alumnoRegistrado){
		echo("$mensaje");
	}
	else
	{
		echo("$numActividades///$cargoIgual///$cve_tut///$selectComponent");
	}

?>
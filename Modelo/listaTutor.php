  <?php
  include ("../Modelo/conexion1.php");
  session_start();
  $ActvidadF = "No registrado";
  $cargo = $_SESSION['dato'];
//cho("CARGO:" .$cargo);
  /*$buscar= "SELECT * id_actividades.act_academica.act_deportiva.act_cultural_civica.act_ambiental.act_inovacion.archivo.num_act.id_tutor.matricula
    FROM act_complementarias2 
    WHERE id_tutor ='$tutor'";
        $sql=mysqli_query($conexion,$buscar) or die ("Error");*/
  
 $query = "SELECT  act_complementarias2.id_actividades, act_complementarias2.matricula, act_complementarias2.nom_act, alumno.nombre_s, alumno.ap_pat, alumno.ap_mat, alumno.cve_div, alumno.semestre, act_complementarias2.num_act, act_complementarias2.id_tutor
		FROM act_complementarias2
		INNER JOIN alumno ON alumno.matricula = act_complementarias2.matricula
		WHERE act_complementarias2.$cargo='registrado'";
		$resultado = mysqli_query($conexion, $query);

		if(!$resultado){
			die("Error");
		}else{
			foreach($resultado as $row){
$data[] = array(
						"matricula" => $row['matricula'], 
						"nombre_s" => $row['nombre_s'], 
						"apellidos"=> $row['ap_pat']." ".$row['ap_mat'],
						"cve_div"=> $row['cve_div'],
						"semestre"=> $row['semestre'],
						"numAct"=> $row['num_act'],
					);

				}
					echo json_encode($data);
		}
		mysqli_free_result($resultado);
		mysqli_close($conexion);
			
    ?>-
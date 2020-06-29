<?php
session_start();
	require("conexion1.php");

$matricula=$_GET['matricula'];
//$estado=$_GET['estado'];
$actividad=$_GET['actividad'];
$numeroAct=$_GET['numeroAct'];
$idTutor=$_GET['idTutor'];


			/*matricula: matricula,
            estado: ACA,
            actividades: actComAlumno,
            numeroAct: numAct,
            idTutor: claveT*/
            $numeroAct = (int)$numeroAct;

           // echo("ESTADO: $estado y N_ACT: $numeroAct2");
            if($numeroAct > 0)
            {
            	$numeroAct++;
                  
            	//$update= "UPDATE act_complementarias2 SET $actividad = 'registrado', num_act = '$numeroAct' WHERE matricula = '$matricula'";
                  $update= "UPDATE act_complementarias2 SET $actividad = 'registrado' WHERE matricula = '$matricula'";
				mysqli_query($conexion,$update)  or die("Error,$update");
            }
            else{
            	$insert= "INSERT INTO act_complementarias2 (id_actividades, $actividad, id_tutor, matricula, num_act) VALUES ('', 'registrado','$idTutor','$matricula',1)";
				mysqli_query($conexion,$insert)  or die("Error,$insert");
            }

            echo("ACTIVADA ASIGNADA");

	/*$update= "UPDATE act_complementarias SET nom_act = '$act_nom||$inovacion', num_act = '$suma_act' WHERE matricula = '$matricula'";
	mysqli_query($conexion,$update)  or die("Error,$update");
		


	$insert= "INSERT INTO act_complementarias (id_actividades, nom_act,id_tutor, matricula, num_act) VALUES ('', '$inovacion','$cve_tut','$matricula',1)";
	mysqli_query($conexion,$insert)  or die("Error,$insert");
	*/
		




?>

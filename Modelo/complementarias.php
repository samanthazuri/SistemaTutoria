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
            $numeroAct2 = (int)$numeroAct;

           // echo("ESTADO: $estado y N_ACT: $numeroAct2");
            if($numeroAct2 > 0)
            {
            	$numeroAct++;
                  $busca_act= "SELECT * FROM act_complementarias WHERE matricula = '$matricula'";
                  $sql=mysqli_query($conexion, $busca_act) or die ("Error");
        
                  while ($columna=mysqli_fetch_array($sql)) 
                  { 
                        $act_realizadas= $columna['nom_act'];
                  }
            	$update= "UPDATE act_complementarias SET nom_act = '$act_realizadas||$actividad', num_act = '$numeroAct' WHERE matricula = '$matricula'";
				mysqli_query($conexion,$update)  or die("Error,$update");
            }
            else{
            	$insert= "INSERT INTO act_complementarias (id_actividades, nom_act,id_tutor, matricula, num_act) VALUES ('', '$actividad','$idTutor','$matricula',1)";
				mysqli_query($conexion,$insert)  or die("Error,$insert");
            }

            echo("ACTIVADA ASIGNADA");

	/*$update= "UPDATE act_complementarias SET nom_act = '$act_nom||$inovacion', num_act = '$suma_act' WHERE matricula = '$matricula'";
	mysqli_query($conexion,$update)  or die("Error,$update");
		


	$insert= "INSERT INTO act_complementarias (id_actividades, nom_act,id_tutor, matricula, num_act) VALUES ('', '$inovacion','$cve_tut','$matricula',1)";
	mysqli_query($conexion,$insert)  or die("Error,$insert");
	*/
		




?>

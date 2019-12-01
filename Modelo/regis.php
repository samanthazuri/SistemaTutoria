<?php
	//$rpass=$_POST['rpass'];

	require("conexion1.php");
	aqui voy a verificar que el usuario este registrado
	$holo=mysqli_query($conexion,"SELECT * FROM alumno WHERE matricula= $mat");
		if($pass==$rpass){
			echo "contraseñas correctas";
			if($holo>0){
				echo ' <script language="javascript">alert("Atencion, ya existe esta matrícula designado para un alumno, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
	}
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($conexion,"INSERT INTO usuario (idUsuario, idRoles, matricula, password) VALUES('','','$mat','$pass')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

?>
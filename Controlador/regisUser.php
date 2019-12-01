<?php
	//$rpass=$_POST['rpass'];


	require("conexion1.php");
	$conexion=conexion();

    	$mat=$_POST['matricula'];
		$pass= $_POST['password'];

		

		if(buscarepetido($mat,$conexion)==1){
			echo 2;
		}else {
			$sql="INSERT INTO usuario (idUsuario, idRoles, matricula, password) VALUES('','','$mat','$pass')")
        echo $result=mysqli_query($conexion,$sql);
		}
	

	function buscaRepetidos($mat,$conexion){
		$sql="SELECT * FROM alumno where matricula='$mat'";
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result)>0){
			return 1;
		}else
		return 0;
	}
}
	
?>
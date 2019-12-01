<?php
	require("conexion1.php");
	session_start();
	date_default_timezone_set("America/Mexico_City");

	
	$matricula  = $_SESSION['dato'];
	$tipoArchivo = $_POST['tipoArchivo'];
	

	if (isset($_FILES['fichero_usuario']) && $_FILES['fichero_usuario']['error'] === UPLOAD_ERR_OK)
	{
		

		$fileTmpPath = $_FILES['fichero_usuario']['tmp_name'];
		$fileName = $_FILES['fichero_usuario']['name'];
		$fileSize = $_FILES['fichero_usuario']['size'];
		$fileType = $_FILES['fichero_usuario']['type'];
		$fileNameCmps = explode(".", $fileName);
		$fileExtension = strtolower(end($fileNameCmps));

		
		$newName = "$matricula-$tipoArchivo.".$fileExtension;
		$uploadFileDir = "../$tipoArchivo/";
		$dest_path = $uploadFileDir .$newName;

		$archivo = $fileTmpPath;
		
		if(move_uploaded_file($archivo, $dest_path))
		{
		  	$message ="$tipoArchivo: ".$dest_path;
			echo($message);
			$update= "UPDATE alumno SET $tipoArchivo = '$newName' WHERE matricula = '$matricula'";
			$resultado = mysqli_query($conexion, $update)
			or die("Error: $update");
		}
		else
		{
			echo"Error al dar de alta el archivo";
		}
	}
	else
	{
		$message = 'No se logro subir la foto con exito.';
	}

	

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	

<div style="text-align: left;">
    <a href="../Vista/Inicio.php" class="btn btn-danger">
      Regresar<i class="fas fa-arrow-left"></i> </a
    ><button type="button" class="editar btn btn-primary">
      <i class="fa fa-pencil-square-o"></i>
    </button>
	</div>
 </body>
</html>

 <?php
include("../Modelo/conexion1.php");

$mat=$_POST['matri'];
$contraseña1=$_POST['contraseña1'];
$contraseña2=$_POST['contraseña2'];
$idRoles= "rol02";
$mensaje= 0;
//echo $mat,$contraseña1, $contraseña2;
		

if($contraseña1 == $contraseña2){
 	//echo "contraseñas iguales";
$select="SELECT * FROM alumno WHERE matricula='$mat'";
$buscaralumno=mysqli_query($conexion,$select)//ejecuta y busca en la bd
or die("Error");
while($columna=mysqli_fetch_array($buscaralumno))
{
	 if($columna['matricula']=="")
	{
		echo "Matricula inexistente";
	}else{
		$insert="INSERT INTO usuario   (idUsuario, idRoles, matricula,password) VALUES ('','$idRoles','$mat','$contraseña1')";
		mysqli_query($conexion,$insert) 
		or die("Error");
		echo "Registro exitoso";
	}
}
}
 else{	
 		echo "contraseñas incorrectas;";
}
?>

<html>




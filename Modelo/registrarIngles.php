<?php

	require("conexion1.php");
	session_start();
 
$matricula=$_GET['usuario'];
//$idioma=$_POST['idioma'];
$nivel=$_GET['nivel'];
$cve_lengua= "LE01I";
$cve_tut="";
$matriculaValida= false;
$cont_Matricula= 0;
$matriculaRegistrada= false;

$busca= "SELECT * FROM alumno WHERE matricula = '$matricula'";
$sql=mysqli_query($conexion, $busca) or die ("Error: $busca");


while ($columna=mysqli_fetch_array($sql)) {

	$matriculaValida= true;
	$cve_tut = $columna['cve_tut'];
	$busca2= "SELECT * FROM lenguas_extranjeras WHERE matricula = '$matricula'";
	$sql2=mysqli_query($conexion, $busca2) or die ("Error2: $busca2");

	while ($columna2=mysqli_fetch_array($sql2)) 
	{
		$matriculaRegistrada= true;
		$cve_tut = $columna2['id_p'];
	}

	if($matriculaRegistrada)
	{
		echo("ESTA MATRICULA YA FUE REGISTRADA ANTERIORMENTE");
	}
	else
	{
		$insert= "INSERT INTO lenguas_extranjeras (id_regisle, matricula,cve_lengua, id_p, nivel, estado, calificacion) VALUES ('','$matricula', '$cve_lengua','$cve_tut','$nivel',1,'0')";
		mysqli_query($conexion,$insert) or die("Error: $insert");
		echo "REGISTRO EXIOSO";
	}
}

	if(!$matriculaValida){
		echo("MATRICULA NO VÁLIDA");
	}

   //}




?>
 
<?php
require("conexion1.php");
    session_start();
$formularioCompleto= false;
$orgEstudiosHecho= false;

$A=$_REQUEST['radio1'];
$B=$_REQUEST['radio2'];
$C=$_REQUEST['radio3'];	
$D=$_REQUEST['radio4'];
$E=$_REQUEST['radio5'];
$F=$_REQUEST['radio6'];
$G=$_REQUEST['radio7'];
$H=$_REQUEST['radio8'];
$I=$_REQUEST['radio9'];
$J=$_REQUEST['radio10'];
$K=$_REQUEST['radio11'];
$L=$_REQUEST['radio12'];
$M=$_REQUEST['radio13'];
$N=$_REQUEST['radio14'];
$O=$_REQUEST['radio15'];
$P=$_REQUEST['radio16'];
$Q=$_REQUEST['radio17'];
$R=$_REQUEST['radio18'];
$S=$_REQUEST['radio19'];
$T=$_REQUEST['radio20'];

$arreglo=0;

if ($A=="SI"){$arreglo++;}
if ($B=="SI"){$arreglo++;}
if ($C=="SI"){$arreglo++;}
if ($D=="SI"){$arreglo++;}
if ($E=="SI"){$arreglo++;}
if ($F=="SI"){$arreglo++;}
if ($G=="SI"){$arreglo++;}
if ($H=="SI"){$arreglo++;}
if ($I=="SI"){$arreglo++;}
if ($J=="SI"){$arreglo++;}
if ($K=="SI"){$arreglo++;}
if ($L=="SI"){$arreglo++;}
if ($M=="SI"){$arreglo++;}
if ($N=="SI"){$arreglo++;}
if ($O=="SI"){$arreglo++;}
if ($P=="SI"){$arreglo++;}
if ($Q=="SI"){$arreglo++;}
if ($R=="SI"){$arreglo++;}
if ($S=="SI"){$arreglo++;}
if ($T=="SI"){$arreglo++;}

switch ($arreglo) 
  {
    case ($arreglo < 11):
    $res= "Habilidad de estudio muy bajo";
    break;

	case ($arreglo == 12):
    	$res= "Habilidad de estudio bajo";
    	break;

    case ($arreglo == 14):
	      $res= "Habilidad de estudio por debajo del promedio bajo";
	      break;

    case ($arreglo ==15):
	    $res= "Habilidad de estudio promedio bajo";
	    break;

    case ($arreglo == 16):
        $res= "Habilidad de estudio promedio";
        break;

    case($arreglo == 17): 
        $res= "Habilidad de estudio promedio alto";
	    break;

	case($arreglo == 18): 
        $res= "Habilidad de estudioo por encima del promedio";
	    break;

	case($arreglo == 19): 
        $res= "Habilidad de estudioo alto";
	    break;

	case($arreglo == 20): 
        $res= "Habilidad de estudioo muy alto";
	    break;    
     
}

echo ("Puntos: $arreglo es igual a --> $res");  


$dato=$_SESSION['dato'];

$busca= "SELECT * FROM alumno WHERE matricula ='$dato'";
    $sql=mysqli_query($conexion, $busca) or die ("Error");


while ($columna=mysqli_fetch_array($sql)) {

    $cve_tut= $columna['cve_tut'];

    $busca2= "SELECT * FROM act_tutoria WHERE matricula ='$dato'";
    $sql2=mysqli_query($conexion, $busca2) or die ("Error");
    while ($columna2=mysqli_fetch_array($sql2)) {
        $orgEstudiosHecho= true;
    }
        if($orgEstudiosHecho)
        {
            $update= "UPDATE act_tutoria SET motivacion_estudio = '".utf8_decode($res)."' WHERE matricula = '$dato'";
                mysqli_query($conexion,$update)  or die("Error,$update");
        }else
        {
            $insert= "INSERT INTO act_tutoria (id_actutorias, matricula,cve_tut,autoestima,estilos_aprendizaje,motivacion_estudio,organizacion_est) VALUES ('','$dato', '$cve_tut','','','".utf8_decode($res)."','')";
            mysqli_query($conexion,$insert)  or die("Error, $insert");     
        }

}




?>
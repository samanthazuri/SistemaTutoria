<?php
require("conexion1.php");
    session_start();
$formularioCompleto= false;
$acertividadHecho= false;

$A=$_REQUEST['radio1'];
$B=$_REQUEST['radio2'];
$C=$_REQUEST['radio3']; 
$D=$_REQUEST['radio4'];
$E=$_REQUEST['radio5'];
$F=$_REQUEST['radio6'];
$G=$_REQUEST['radio7'];
$H=$_REQUEST['radio8'];
$I=$_REQUEST['radio9'];

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

switch ($arreglo) 
  {
    case ($arreglo == 9): 
    $res1= "Su acertividad puede lesionar sus derechos";
    break;

    case ($arreglo <5):
        $res1= "Su acertividad es buena";
        break;
  }
echo ("Puntos: $arreglo es igual a --> $res1");  


$dato=$_SESSION['dato'];

$busca= "SELECT * FROM alumno WHERE matricula ='$dato'";
    $sql=mysqli_query($conexion, $busca) or die ("Error");


while ($columna=mysqli_fetch_array($sql)) {

    $cve_tut= $columna['cve_tut'];

    $busca2= "SELECT * FROM act_tutoria WHERE matricula ='$dato'";
    $sql2=mysqli_query($conexion, $busca2) or die ("Error");
    while ($columna2=mysqli_fetch_array($sql2)) {
        $acertividadHecho= true;
    }
        if($acertividadHecho)
        {
            $update= "UPDATE act_tutoria SET acertividad_est = '".utf8_decode($res1)."' WHERE matricula = '$dato'";
                mysqli_query($conexion,$update)  or die("Error,$update");
        }else
        {
            $insert= "INSERT INTO act_tutoria (id_actutorias, matricula,cve_tut,autoestima,estilos_aprendizaje,motivacion_estudio,organizacion_est,acertividad_est) VALUES ('','$dato', '$cve_tut','','','','','".utf8_decode($res1)."')";
            mysqli_query($conexion,$insert)  or die("Error, $insert");     
        }

}


?>
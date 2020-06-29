<?php
//$miconexion = new conexion1;

session_start();
	require("conexion1.php");
    require("blowfish.php");
	$user=$_GET['usuario'];
	$pass=$_GET['password'];
    $tipoUser = $_GET['tipoUsuario'];
    $location = "";
    $isValid="none";
    $isTutor = false;

    //$tipoUser = $tipoUser;
    //echo("$tipoUser ====== jefes");

    $select= "SELECT * FROM personal WHERE id_p ='$user'";
        $sql=mysqli_query($conexion,$select) or die ("Error");

        while ($columna=mysqli_fetch_array($sql)) {
            $passwordBaseDatos = $columna['pass'];
            //$carrera = $columna['pass'];
            $_SESSION['dato']=$user;
            //$location = "../Vista/logpri.php";
            //echo("../Vista/logpri.php");
         
        }

       
  
   

    if($tipoUser == "Tutor")
    {
       // echo("es un tutor");
        $select= "SELECT * FROM personal WHERE id_p ='$user' AND pass = '$pass'";
        $sql=mysqli_query($conexion,$select) or die ("Error");

        while ($columna=mysqli_fetch_array($sql)) {

             //echo("../Vista/inicio.html");
             $isTutor = true;

             //$hash = get_hash($pass);
           /* $hash = $columna['pass'];

            $isValid = validate_pass($hash, $pass);
            $isValid ? 'valida' : 'no valida';
            //echo"2222 $isValid"; 
            
            if($isValid == "valida")
            {
                $_SESSION['dato']=$user;
                $location = "../Vista/inicio.html";
                echo("../Vista/inicio.html");
            }*/
         
        }
        if($isTutor)
        {
            echo("../Vista/inicio.php");
        }
        else
        {
            echo("none");
        }

    }else if($tipoUser =="Alumno")
    {
        $select= "SELECT * FROM usuario WHERE matricula ='$user' AND password='$pass'";
        $sql=mysqli_query($conexion,$select) or die ("Error");

        while ($columna=mysqli_fetch_array($sql)) {
   
            $_SESSION['dato']=$user;
            $location = "../Vista/menualum.php";
            echo($location);
         
        }
    }else if($tipoUser == "Jefe")
    {

       //echo("Es un jefasooo");
        $select= "SELECT * FROM jefes WHERE user_jefe ='$user' AND pass_jefe='$pass'";
        $sql=mysqli_query($conexion,$select) or die ("Error");

        while ($columna=mysqli_fetch_array($sql)) {
   
            $_SESSION['dato']=$user;
            $cargo = $columna['tipo_jefe'];
             $_SESSION['tipoJefe']=$cargo;

             //echo ("TipoJefe: $cargo || ");

            if($cargo == "J1" || $cargo == "J2")
            {
                //Coordinador academico y Subdireccion"
                 $location = "../Vista/divisiones.php";

            }else if($cargo == "J3")
            {
                //Difusion y concentracion
                $location = "../Vista/menucomplementarias.php";
            }else if($cargo == "J4")
            {
                //Estadistica y evaluacion
                $location = "../Vista/menucomplementarias.php";
            }else if($cargo == "J5")
            {
                //Investigacion y posgrado
                $location = "../Vista/menucomplementarias.php";
            }else if($cargo == "J6")
            {
                //Ciencias basicas
                $location = "../Vista/menule.php";
            }

            echo($location);
         
        }
    }

    if($location == "none")
    {
        echo("$location $isValid");
    }







?>
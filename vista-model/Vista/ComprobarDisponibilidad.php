<?php

require("../Modelo/conexion1.php");

 $usuario=$_POST["usuario"];
echo $usuario;

  $query = "SELECT * FROM alumno WHERE matricula=$usuario";
  $sql=mysqli_query($conexion,$query) or die ("Error");


while($user=mysqli_fetch_array($sql))
{
  if($user['matricula']== "") {
     
     printf("<script type = 'text/javascript'>alert('Alumno inexistente');</script>");
  }else{
      printf("<script type = 'text/javascript'>alert('datos de alumno');</script>");
  }
}
 


?>
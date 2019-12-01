 <?php

     $conexion = @mysqli_connect('localhost', 'root', '', 'tutoria');
     if(!$conexion){
     	die("Conexion fallida".mysqli_error($conexion));
     }
     if(@mysqli_connect_errno()){
     	die("Connect failed: ".mysqli_connect_errno().":".mysqli_connect_error());
     }


  ?>


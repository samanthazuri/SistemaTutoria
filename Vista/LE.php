<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Lenguas extrangeras</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
   </head>

     <body>
      <section id="cover">
   <div id="cover-texto">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
          <form action="" class="form-incline justify-content-center">
           </form>
         </div>
       </div>
     </div>
   </div>
 </section>



    <?php
    
    require("../Modelo/conexion1.php");
    $sql="SELECT* FROM lenguas_extranjeras";
    $query=mysqli_query($conexion, $sql) or die ("Error");


      
      echo "<table border='1'; class='table table_hover';>";
      echo "<td>N°</td>";
      echo "<td>Matricula</td>";
      echo "<td>Clave lengua</td>";
      echo "<td>Tutor</td>";
      echo "<td> A1</td>";
      echo "<td> A2</td>";
      echo "<td> B1</td>";
      echo "<td> B2</td>";
      echo "<td> Estado</td>";
     		
?>

<?php
   while ($arreglo=mysqli_fetch_array($query))  {

    echo"<tr class='success'>";
    echo"<td> $arreglo[0] </td>";
    echo"<td> $arreglo[1] </td>";
    echo"<td> $arreglo[2] </td>";
    echo"<td> $arreglo[3] </td>";
    echo"<td> $arreglo[4]</td>";
    echo"<td> $arreglo[5] </td>";
    echo"<td> $arreglo[6] </td>";
    echo"<td> $arreglo[7] </td>";
    echo"<td> $arreglo[8] </td>";
    //"<td> input type= '' value=$arreglo[8]<td/></br>";
   }
?>

   
 </body>
</html>


  
    


  <script src="../js/bootstrap.min.js"></script><!--librerias-->
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script> 

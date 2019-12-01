<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Lenguas extrangeras</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
   <script src="../js/bootstrap.min.js"></script><!--librerias-->
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script> 
  
</head>
<body>
	<section id="cover">
   <div id="cover-texto">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
          <form action="" class="form-incline justify-content-center">
          	<br><br>
<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=itsa', 'root', ''); // el campo vaciío es para la password. 

?>
<div class="container">
<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>Matricula</th>
			<th>Nombre</th>
			<th>Apellido paterno</th>
			<th>Apellido materno</th>
			<th>Sexo</th>
			<th>Carrera</th>
			<th>Idioma</th>
			<th>Nivel</th>
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from le') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['matricula'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['apaterno'] ?></td>
    <td><?php echo $row['amaterno'] ?></td>
    <td><?php echo $row['sexo'] ?></td>
    <td><?php echo $row['carrera'] ?></td>
    <td><?php echo $row['idioma'] ?></td>
    <td><?php echo $row['nivel'] ?></td>




 </tr>
</table>
</div>

<?php
	}
?>
</body>
</html>
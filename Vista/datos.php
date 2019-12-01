<?php
include('../Modelo/conexion1.php');
      		  
	  //$sql = "SELECT * FROM le where matricula, nombre, apaterno, amaterno, sexo, carrera, idioma ";
         $sql = "SELECT * FROM le";
	  $query = mysqli_query($conexion, $sql);
		
			$res = mysqli_query($conexion, $query) or die ("No se encontraron los datos");
				
				while($row = mysqli_fetch_array($res)){

						
	echo "<table border=1>";
	echo "<tr>";
	echo "<td>Matricula</td>";
	echo "<td>Carrera</td>";
	echo "<td>Nombre</td>";
	echo "<td>Apellido paterno</td>";
	echo "<td>Apellido materno</td>";
	echo "<td>Sexo</td>"; 
	echo "<td>Idioma</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>".$row['matricula']."</td>";
	echo "<td>".$row['carrera']."</td>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['apaterno']."</td>";
	echo "<td>".$row['amaterno']."</td>";
	echo "<td>".$row['sexo']."</td>";
	echo "<td>".$row['idioma']."</td>";
	echo "</tr>";
	echo "</table>";
	echo "<br><br>";
	echo "<br><br>";
	echo "<br><br>";
	}
	  ?>
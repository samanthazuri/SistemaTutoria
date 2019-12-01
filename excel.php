<?php
include("../Modelo/conexion1.php");

$sql="SELECT alumno.matricula FROM alumno INNER JOIN test ON alumno.matricula = alumno.matricula";
    $registro=mysqli_query($mysqli,$sql);
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Descarga de reportes</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
		<header>
			<div class="alert alert-info">
			<h2>Descargar Reportes</h2>
			</div>
		</header>
		<section>
			<div class="container">
				<div class="table-responsive">
			<table class="table">
				<tr class="bg-primary">
					<th>Lista de tutores</th>
					<th>Matrícula</th>
					<th>N° Tutoríal grupal</th>
					<th>Total</th>
					<th>Porcentaje de aprobación</th>
					<th> Porcentaje de reprobación </th>
					<th>Deserción</th>
					<th>Total </th>
					<th>Canalización</th>
					<th> Total </th>
					<th>Área Canalizada</th>
				</tr>
				<?php

		
				while ($datosAlumnos = mysqli_fetch_array($registro))
				{
					echo'<tr>
						 <td>'.$datosAlumnos['lista_de_tutores'].'</td>
						 <td>'.$datosAlumnos['matricula'].'</td>
						 <td>'.$datosAlumnos['n_tut_grupal'].'</td>
						 <td>'.$datosAlumnos['total'].'</td>
						 <td>'.$datosAlumnos['portentaje_de_aprobacion'].'</td>
						 <td>'.$datosAlumnos['porcentaje_de_reprobacion'].'</td>
						 <td>'.$datosAlumnos['desercion'].'</td>
						 <td>'.$datosAlumnos['total'].'</td>
						 <td>'.$datosAlumnos['canalizacion'].'</td>
						 <td>'.$datosAlumnos['total'].'</td>
						 <td>'.$datosAlumnos['area_canalizacion'].'</td>
						 </tr>';
				}
				?>
				</div>
				</div>
			</table>
		</div>
		</section> <br>

       
        
	<div class="col-md-8 col-md-offset-2">
	<form method="post" class="form" action="admin.php">
		  <button  id="btnregresar" class="form-control btn-success btn-lg">Regresar</button>
		</form>
	</div>
		 <br><br>
	</body>
</html>

<script type="text/javascript">
	 function inhabilitar(){
      alert("Esta funcion esta inabilitada.\n\nConsulte al administrador, prr")
      return false
     }
     document.oncontextmenu=inhabilitar

  </script>


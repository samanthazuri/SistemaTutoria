<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/bootstrap-responsive.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Logeo principal tutorias</title>
</head>
<body background="../img/fondo.jpg">
	<div class="container">
	<center><div class="tit"><h2 id="h22" style="color: #0000FF; ">Bienvenido al fin del mundo</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form >
		<table border="0">
		<tr><td><label style="font-size: 14pt"><b>Tipo usuario: </b></label></td>
			<td width=80> 
				<select class="form-control has-success" style="border-radius:15px;" name="tipoUser" id="tipoUser">
					<option value="Seleccione usuario">Seleccione usuario</option>
                    <option value="Jefe">Subdirección</option>
                    <option value="Jefe">Coordinador académico</option>
					<option value="Tutor">Tutor</option>
                    <option value="Jefe">Difusión y concentración</option>
                    <option value="Jefe">Estadistica y evaluación</option>
                    <option value="Jefe">Investigación y posgrado</option>
                    <option value="Jefe">Ciencias básicas</option>
					<option value="Alumno">Alumno</option>
				</select></td></tr><tr><td>	<br></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Usuario: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" id="user"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" id="pass"></td></tr>
		<tr><td></td>

			<td width=60 align="left"><input id="btn_acceder" class="btn btn-primary" type="button" value="Aceptar"></td>
			<td width=60 align="right">
			<div class="col-lg-offset-2 col-lg-2">
                <button   type="button" class="btn btn-success" id="register">Registro</button>
              </div></td>
			</tr></tr></table>
		</form>
		</div>
<!--Fin formulario registro -->
		</td>

		<script src="../js/bootstrap.min.js"></script><!--librerias-->
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
  <script>
  
  $(function(){
	  	$("#register").click(function(){
      		location.href="../Vista/resalumpri.php";
    	});

    	$("#btn_acceder").click(function(){
    		var tipoUser = $("#tipoUser").val();
    		var user = $("#user").val();
    		var pass = $("#pass").val();
    		//alert("tipo:|"+tipoUser+ "| user: "+user+" pass: "+pass);

    		if(tipoUser == "Seleccione usuario")
    		{
    			alert("TIPO DE USUARIO NO VÁLIDO");
    		}else{

    			//alert("AQUII1");
    			$.ajax({
    				type: "GET",
    				url: "../Modelo/alerta.php",
    				data: {
    					usuario: user,
    					tipoUsuario: tipoUser,
    					password: pass
    				},
    				success: function(dato){
    		//			alert("AQUII1");
    					//alert(dato);
                        //$("#h22").text(dato);
                        //alert(dato);

    					var dt = dato.trim();
    					//alert(dt);
    					if(dt == "none"){
    						
    						alert("USUARIO O CONTRASEÑA INCORRECTA");
    					}
    					else{
    						location.href= dt;
    					}
    					//location.href= dato;
    					//debugger;
    				}
    			});
    			//alert("AQUII1");

    			
    		}
    	});



	});

</script>
		</tr>
		</table>
		</div></center></div></center>

	
</body>

</html>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="../js/bootstrap.min.js"></script><!--librerias-->
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

  <title>Registro de tutorias alumnos</title>
</head>
<body background="../img/fondo.jpg">

  <div class="container">
  <center><div class="title"><h2 style="color: #0000FF; ">Ingresa los datos</h2></div></center>
<!-- formulario registro --> 
  <form action= "../Modelo/regisUser.php"method="post">
                <div class="form-group">
                  <label for="matri">Matrícula:</label>
                  <input type="text" name="matri" id="matri" placeholder="Matrícula" class="form-control" class="has-error" required="">
                </div>

                <div class="form-group">
                  <label for="contraseña1">Contraseña:</label>
                  <input type="password" name="contraseña1" id="contraseña1" placeholder="contraseña" class="form-control" required="">
                </div>

                <div class="form-group">
                  <label for="contraseña2">Confirmar contraseña:</label>
                  <input type="password" name="contraseña2" id="contraseña2" placeholder="confirmar contraseña" class="form-control" required="">
                </div>              
                  
            <div class="container">
                <button type="submit" id="buscar" class="btn btn-success" >Registrar</button>
            </div>
            <div style="text-align: right;">
            <a href="../Vista/logpri.php" class="btn btn-danger">Regresar</a>
          </div>
             
</form>
</div>
</body>
</html>
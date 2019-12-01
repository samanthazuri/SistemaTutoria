!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Actividades complementarias</title>
  <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">

  <style>
      .container{margin-top:100px}
    </style>
   </head>

     <body>
      <div class="container">


 <?php if(!empty($message)):?>
  <p><?= $message ?></p>
  <?php endif;?>

   
    
    <div class="conntainer">
      <div class="row justify-content-center mt-5 pt-5">
      <div class="col-md-7">
      <h1 class="display-8"> Registro de actividades complementarias tecnologicas</h1>
      <hr class="bg-info">
      <p class="text-danger small pt-0 mt-0">Todos los campos son obligatorios *</p>
    

    <form  action = "../Modelo/complementarias.php "  method ="POST"> 
      <div class="row from-group">
        <label for="matricula" class="col-form-label col-md-4">Matricula</label>
        <div class="col-md-8">
        <input  name = "matricula"  type = "text"  placeholder = "Matricula" class="form-control" required>
        </div>  
      </div><br>

      <div class="row from-group">
        <label for="inovacion" class="col-form-label col-md-4">Actividad</label>
        <div class="col-md-8">
          <select class="form-control" id="nivel" name="inovacion" required="">
            <option class="nav-link disabled" aria-disabled="true">Seleccione una actiidad</option>
            <option value="Mecatronica">Inovacion tecnologica</option>
          </select>
             </div>
             </div>  
      <br><br><br>  
      <div class="form-group col-lg-4 offset-6">
          <input type="submit" name="enviar" class="custom-control-input" >
          <button  id="btnenviar" class="form-control btn-success">Enviar</button>
        </div>
    </form>
  </div>
</div>
</div>
</div>
</body>





  <script src="../js/bootstrap.min.js"></script><!--librerias-->
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/jqBootstrapValidation.js"></script> 
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>

  </html>
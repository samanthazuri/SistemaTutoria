<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Registro Frances</title>
  
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">

  <style>
      .container{margin-top:100px}
    </style>
   </head>

     <body>

      


 <?php if(!empty($message)):?>
  <p><?= $message ?></p>
  <?php endif;?>

   
    
    <div class="conntainer">
      <div class="row justify-content-center mt-5 pt-5">
      <div class="col-md-7">
      <h1 class="display-8"> Registro de lenguas extranjeras FRANCES</h1>
      <hr class="bg-info">
      <p class="text-danger small pt-0 mt-0">Todos los campos son obligatorios *</p>
    

    <form  action = "../Modelo/login.php "  method = "POST">
      <div class="row from-group">
        <label for="matricula" class="col-form-label col-md-4">Matricula</label>
        <div class="col-md-8">
        <input  name = "matricula"  type = "text"  placeholder = "Matricula" class="form-control" required>
        </div>  
      </div><br>

    
       <div class="row from-group">
        <label for="idioma" class="col-form-label col-md-4">Idioma</label>
        <div class="col-md-8">
        <select class="form-control" id="idioma" name="idioma" required="">
            <option>Seleccione el idioma</option>
            <option value="Frances">Frances</option>
          </select>
        </div>  
      </div><br>
      <div class="row from-group">
        <label for="nivel" class="col-form-label col-md-4">Nivel</label>
        <div class="col-md-8">
          <select class="form-control" id="nivel" name="nivel">
            <option>Seleccione nivel de frances</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="B1">B1</option>
          </select>
             </div>
             </div>  <br>
     

          <div class="form-group col-lg-4 offset-6">
          <input type="submit" name="enviar" class="custom-control-input" >
          <button  id="btnenviar" class="form-control btn-success">Enviar</button>
        </div>
    </form>
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
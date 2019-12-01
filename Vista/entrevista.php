<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Formato de entrevista</title>
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
      <h1 class="display-8"> Formato de entrevista</h1>
      <hr class="bg-info">
      <p class="text-danger small pt-0 mt-0">Todos los campos son obligatorios *</p>
    

    <form  action = "../Modelo/data.php "  method = "POST">
      <div class="row from-group">
        <label for="nombre" class="col-form-label col-md-4">Nombre</label>
        <div class="col-md-8">
        <input  name = "name"  type = "text"   class="form-control" required>
        </div>  
      </div><br>
      <div class="row from-group">
        <label for="estatura" class="col-form-label col-md-4">Estatura</label>
        <div class="col-md-8">
        <input  name = "nestatura"  type = "text1"  class="form-control" required>
        </div>  
      </div><br>
      <div class="row from-group">
        <label for="peso" class="col-form-label col-md-4">Peso</label>
        <div class="col-md-8">
        <input  name = "peso"  type = "text" class="form-control" required>
        </div>  
      </div><br>
      <div class="row from-group">
        <label for="carrera" class="col-form-label col-md-4">Carrera</label>
        <div class="col-md-8">
	      <input  name = "Carrera"  type = "text"  class="form-control" required>
        </div>  
      </div><br>
      <div class="row from-group">
        <label for="fechanac" class="col-form-label col-md-4">Fecha de nacimiento</label>
        <div class="col-md-8">
        <input  name = "fechanac"  type = "text"  class="form-control" required>
        </div>  
      </div><br>
      <div class="row from-group">
        <label for="sexo" class="col-form-label col-md-4">Sexo</label>
        <div class="col-md-8">
        <input  name = "sexo"  type = "text"   class="form-control" required>
        </div>  
      </div><br>
      <div class="row from-group">
        <label for="edad" class="col-form-label col-md-4">Edad</label>
           <div class="col-md-8">
        <input  name = "edad"  type = "text"   class="form-control" required>
      </div></div><br>
     <!-- <div class="row from-group">
       <div class="form-check form-check-inline">
      <a  class="lead">Estado civil</a><br>
     <div class="custom-control custom-radio col-md-10 offset-6">
    <input type="radio" class="custom-control-input" id="soltero"  name="edocivil">
    <label class="custom-control-label" for="radio1" >Soltero</label>
  </div>
  <div class="custom-control custom-radio mb-11 offset-7">
    <input type="radio" class="custom-control-input" id="casado"  name="edocivil">
    <label class="custom-control-label" for="radio1b">Casado</label>
  </div>
  <div class="custom-control custom-radio col-md-12 offset-8">
    <input type="radio" class="custom-control-input" id="otro"  name="edocivil">
    <label class="custom-control-label" for="radio1" >Otro</label>
  </div>
  </div>
  <br> <br>
  <div class="row from-group">
      <a class="lead">Trabaja</a><br>
      <div class="form-check form-check-inline">
           <label class="form-check-label">
            <input type="radio" class="custom-control-input"  name="vivienda" value="home" re>SI</label>
            <label class="custom-control-input">
            <input type="radio" class="form-check-input" name="vivienda" value="depto">NO</label>
        </div> <br>-->
      <div class="row from-group">
        <label for="lnacimiento" class="col-form-label col-md-4">Lugar de nacimiento</label>
        <div class="col-md-8">
	      <input  name = "lnacimiento"  type = "text" class="form-control" required>
        </div>  
      </div><br>
   <div class="row from-group">
        <label for="domicilio" class="col-form-label col-md-4">Domicilio actual</label>
        <div class="col-md-8">
        <input  name = "domicilio"  type = "text" class="form-control" required>
        </div>  
      </div><br>
       <div class="row from-group">
        <label for="oldfrom" class="col-form-label col-md-4">Lugar de nacimiento</label>
        <div class="col-md-8">
        <input  name = "oldfrom"  type = "text" class="form-control" required>
        </div>
      </div><br>
       <div class="row from-group">
        <label for="co" class="col-form-label col-md-4">Codigo postal</label>
        <div class="col-md-8">
        <input  name = "co"  type = "text" class="form-control" required>
        </div>  
      </div><br> 
       <div class="row from-group">
        <label for="tel" class="col-form-label col-md-4">Telefono</label>
        <div class="col-md-8">
        <input  name = "tel"  type = "text" class="form-control" required>
        </div>  
      </div><br><br>
     <!-- <div class="row from-group">
        <label for="" class="col-form-label col-md-4">Tipo de vivienda</label>
        <div class="form-check form-check-inline">
           <label class="form-check-label">
            <input type="radio" class="form-check-input"  name="vivienda" value="home" re>Casa</label>
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="vivienda" value="depto">Departamento</label>
        </div>  
      </div><br>-->

       <div class="row from-group">
        <label for="domicilio" class="col-form-label col-md-4">Email</label>
        <div class="col-md-8">
        <input  name = "email"  type = "email" class="form-control" required>
        </div>  
      </div><br>  <br>    
       
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
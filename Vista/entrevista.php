<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Inventario estudio</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
</head>
  <body>
 <section id="cover">
     <div class="container-fluid">
       <div class="row">
         <div class="col-sm-12">
         </div>
       </div>
     </div>
 </section>

    <div class="container">
      <h1 class="display3">TEST DE ASERTIVIDAD.</h1><br>
      <h4>Instrucciones:</h4>

    <div class="row align-items-center">
    <div class="col-sm-12 col-sm-12 col-md 4">
      <p>
        Seleccione la opción que mas le indentifique.
     </p>
    </div>
  </div>
</div>
<br>
  <section id="tets">
   <div class="container">
    <form action="../Modelo/resEntrevista.php" method="POST" id="formulario">
      <a class="lead">1-En una reunión difícil, con un ambiente caldeado, soy capaz de hablar con confianza. </a><br>
      <div class="custom-control custom-radio">
    <select name="radio1" id="radio1" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</>
        </select></div>
  <br>
  <a class="lead">2-Si no estoy segura de una cosa, puedo pedir ayuda fácilmente.</a><br>
      <div class="custom-control custom-radio">
    <select name="radio2" id="radio2" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</option>
        </select> </div>  
  <br>
  <a class="lead">3-Si alguna persona es injusta y agresiva, puedo controlar la situación con confianza. </a><br>
      <div class="custom-control custom-radio">
    <select name="radio3" id="radio3" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</option>
        </select> </div><br>    
  <a class="lead">4-Si alguna persona se muestra irónica conmigo o con otras, puedo responder sin agresividad. </a><br>
      <div class="custom-control custom-radio">
    <select name="radio4" id="radio4" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</option>
        </select> </div>  <br>
  <a class="lead">5-Si creo que se está abusando de mí, soy capaz de denunciarlo sin alterarme. . </a><br>
      <div class="custom-control custom-radio">
    <select name="radio5" id="radio5" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</option>
        </select> </div><br>
  <a class="lead">6-Si alguna persona me pide permiso para hacer algo que no me gusta, por ejemplo, fumar, puedo decirle que no sin sentirme culpable. </a><br>
      <div class="custom-control custom-radio">
    <select name="radio6" id="radio6" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</option>
        </select> </div> <br> 
  <a class="lead">7-Si alguna persona pide mi opinión sobre alguna cosa me siento bien dándosela, aunque no concuerde con la de los demás. </a><br>
      <div class="custom-control custom-radio">
    <select name="radio7" id="radio7" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</option>
        </select> </div><br> 
  <a class="lead">8-Puedo conectar fácil y efectivamente con personas que considero importantes.  </a><br>
      <div class="custom-control custom-radio">
    <select name="radio8" id="radio8" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</option>
        </select> </div><br> 
  <a class="lead">9-Cuando encuentro defectos en una tienda o restaurante, soy capaz de exponerlos sin atacar a las otras personas y sin sentirme mal.</a><br>
      <div class="custom-control custom-radio">
    <select name="radio9" id="radio9" required="">
      <option value=""></option>
          <option value="SI">Si</option>
          <option values="NO">No</option>
        </select> </div><br> 

        <div class="form-group col-lg-3 offset-5">
          
          <button  id="btnenviar" type="submit" class="form-control btn-success">Enviar</button>
        </div>   
        <div class="form-group col-lg-3 offset-5">
          <button  id="btncancel" class="form-control btn-danger">Cancelar</button>
        </div>   
</form>
</body>
</selection>




  <script src="../js/bootstrap.min.js"></script><!--librerias-->
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/jqBootstrapValidation.js"></script> 
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>

  <script>
 $(function(){

      $("#btncancel").click(function(){        
          window.location="../Vista/menualum.php";
          });   
    });
      </script>
  
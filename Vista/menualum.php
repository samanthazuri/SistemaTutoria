<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Binvenido Lince <strong></title>
  <ul class="nav pull-right">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['dato'];?></strong></a></li>
        <li><a class="pl-4" href="../Modelo/desconecta.php"> Cerrar Sesión </a></li>      
    </ul>
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

<!-- barra de navegaccion -->
  <nav  class="navbar navbar-expand-lg navbar-dark  bg-dark pd-4">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li  class="nav-item active">
        <a class="nav-link" href="#"></a>
      </li>

      <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" data-toggle = "dropdown" role="button" arian-haspopup="true" aria-expanded ="false">Test a responder</a>
          <div class="dropdown-menu">
            <div class="dropdown-divider"></div>
              <a id="habestu" class="dropdown-item" href="#">Habilidades de estudio</a>
              <a id="autoestima" class="dropdown-item" href="#" data-toggle ="modal" data-target="#modal_NuevoSC">Test de autoestima</a>
              <a id="entrevista" class="dropdown-item" data-toggle="modal" data-target="#modal_NuevoProveedor" href="#">Formato de entrevista</a>
            <div class="dropdown-divider"></div>
          </div>
      </li>

      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actividades a subir</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
            <a id="vida" class="dropdown-item" href="#">Linea de vida</a>
            <a id="foda" class="dropdown-item" href="#">Analisis FODA</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Encuestas de estudior</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
            <a id="habestu1" class="dropdown-item" >Encuesta para organizacion del estudio</a>
            <a id="habestu2" class="dropdown-item" >Encuesta tecnicas de estudio</a>
            <a id="habestu3" class="dropdown-item">Encuesta sobre motivacion para el estudios</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>

    </ul>
  </div>
</nav>


<div class="container " style="background-color: #5BA4C; height: 500px;">
</div>
  



<footer id="footer"  class="form-group col-lg-12 ">
  <div class="container">
    <div class="row">
  <div class="col-sm-4">
    <p>Derechos resevados </p>
  

  

  </div>
  </div>
</footer>
</body>

<script src="../js/bootstrap.min.js"></script><!--librerias-->
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/jqBootstrapValidati on.js"></script>
  <!-- este solo lo puse antes de descargar el popper -->
   
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script> 
<script>
  
  $(function(){

    $("#entrevista").click(function(){
      location.href="../Vista/entrevista.php";
    });

    $("#autoestima").click(function(){
      location.href="../Vista/autoestima.html";
    });

    $("#vida").click(function(){
      location.href="../Vista/linelive.html";
    });

    $("#foda").click(function(){
      location.href="../Vista/foda.html";
    });

    $("#habestu2").click(function(){
      location.href="../Vista/habestu2.html";
    });
    $("#habestu1").click(function(){
      location.href="../Vista/habestu1.html";
    });

    $("#habestu3").click(function(){
      location.href="../Vista/habestu.html";
    });
  });
</script>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <ul class="nav pull-right">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['dato'];?></strong></a></li>
        <li><a class="pl-4" href="../Modelo/desconecta.php"> Cerrar Sesión </a></li>      
    </ul>
  <meta charset="utf-8">
   <meta name="viewport" content="with=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Bienvenido Tutor</title>
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
        <a  href="#" class="nav-link dropdown-toggle" data-toggle = "dropdown" role="button" arian-haspopup="true" aria-expanded ="false">Revisión de actividades</a>
          <div class="dropdown-menu">
            
      
            <div class="dropdown-divider"></div>
              <a id="extVin" class="dropdown-item" href="../Vista/actExtraEscolaresParaTutores.html">Actividades extra escolares</a>
              <a id="" class="dropdown-item" href="../Vista/actividades-tutorias.html">Actividades del manual de tutorias</a>
              <a id="" class="dropdown-item" href="../Vista/alumnos-tutor.html">Actividades linea de vida y foda</a>
            <div class="dropdown-divider"></div>
          </div>
      </li>

      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lenguas extranjeras</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
            <a id="ingles" class="dropdown-item" href="../Vista/tutoradosIngles.html">Alumnos inscritos inglés</a>
            <a id="frances" class="dropdown-item" href="#">Alumnos inscritos frances</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>

      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../Vista/pat.html">Plan de tutoria</a>
          <div class="dropdown-divider"></div>
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

   

    $("#ingles").click(function(){

      location.href="../Vista/regisingles.php";
    });

    $("#mostrar").click(function(){

      location.href="../Vista/LE.php";
    });

    /*$("#extVin").click(function(){

      location.href="../Vista/complementarias.php";
    });*/


   

    $("#divisiones").click(function(){

      location.href="../Vista/inovacion.php";
    });
    





  });
</script>
</html>
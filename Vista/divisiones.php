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
  <title>Menu divisiones academicas</title>
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
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actividades complementarias</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a id="actividades" class="dropdown-item" href="../Vista/extraescolares.html">Alta</a>
             <a id="seguimiento" class="dropdown-item" href="alumnosActividades.html">Inscritos</a>
        </div>
      </li>

        <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" data-toggle = "dropdown"  role="button"arian-haspopup="true" aria-expanded ="false" href="#">Seguimiento de ciencias básicas</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a id="incritosle" href="../Vista/alumnosIngles.html" class="dropdown-item" href="#">Lenguas extranjeras</a>

      </li>

      <!--<li  class="nav-item dropdow">
        <a  class="nav-link dropdown-toggle" data-toggle = "dropdown"  role="button"arian-haspopup="true" aria-expanded ="false" href="#">Reportes</a>
      </li>-->
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
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script> 
<script>
  
  $(function(){

    
  });
</script>
</html>

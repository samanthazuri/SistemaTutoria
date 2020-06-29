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
  <title>Menu LE</title>
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

      <li  class="nav-item active">
        <a class="nav-link" href="#"></a>
      </li>

      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alta de alumnos</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a id="inglesResgistro" class="dropdown-item" href="../Vista/regisingles.php">Inglés</a>
             <a id="inglesResgistro" class="dropdown-item" href="../Vista/regisfrances.php">Frances</a>
            
          
        </div>
      </li>

        <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" data-toggle = "dropdown"  role="button"arian-haspopup="true" aria-expanded ="false">Alumnos Inscritos</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a id="" class="dropdown-item" href="../Vista/alumnosIngles.html">Inglés</a>
        <a id="frances" class="dropdown-item" href="#">Frances</a>
                    
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
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script> 
<script>
  
 
</script>
</html>

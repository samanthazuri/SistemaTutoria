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
  <title>Menu actividades académicas</title>
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
          Registro actividades academicas</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a id="alta" class="dropdown-item" href="../Vista/extraescolares.html">Alta</a>
        </div>
      </li>

        <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" data-toggle = "dropdown"  role="button"arian-haspopup="true" aria-expanded ="false">Seguimiento</a>
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a id="seguimiento" href="alumnosActividades.html" class="dropdown-item d-none">Alumnos inscritos</a>
        <a id="seguimiento_D" class="dropdown-item d-none" opc= "act_deportiva">Alumnos inscritos Deportes </a>
        <a id="seguimiento_CC" class="dropdown-item d-none"  opc= "act_cultural_civica">Alumnos inscritos Cultural/Civica </a>
                
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

  <script type="text/javascript" src="../js/popper.min.js"></script> 
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script><!--librerias-->
  <!--<script src="../js/jqBootstrapValidati on.js"></script>
  <script src="../js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>-->

  <script> 
    $(function(){

      $.ajax({
            url: "../Modelo/verificarJefe.php",
            type: "GET",
            success: function(dato){
              if(dato == "J3")
              {
                $("#seguimiento_D").removeClass("d-none");
                $("#seguimiento_CC").removeClass("d-none");
              }
              else
              {
                $("#seguimiento").removeClass("d-none");
              }
            }
         });

      $("#seguimiento_D").click(function(){
        var opc = $(this).attr("opc");
        alert(opc);
         $.ajax({
            url: "../Modelo/Jefe3.php",
            type: "GET",
            data: {opc: opc},
            success: function(){
              //$_SESSION['tipoJefe']
              location.href="alumnosActividades.html";
            }
         });
         
      });


      $("#seguimiento_CC").click(function(){
        var opc = $(this).attr("opc");
        alert(opc);
         $.ajax({
            url: "../Modelo/Jefe3.php",
            type: "GET",
            data: {opc: opc},
            success: function(){
              location.href="alumnosActividades.html";
            }
         });
         
      });




    });
  </script>
</html>

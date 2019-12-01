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

      
    
    <div class="conntainer">
      <div class="row justify-content-center mt-5 pt-5">
      <div class="col-md-7">
      <h1 class="display-8"> Registro de lenguas extranjeras FRANCES</h1>
      <hr class="bg-info">
      <p class="text-danger small pt-0 mt-0">Todos los campos son obligatorios *</p>
    

    <form>
      <div class="row from-group">
        <label for="matricula" class="col-form-label col-md-4">Matricula</label>
        <div class="col-md-8">
        <input  name = "matricula" id="matricula" type = "text"  placeholder = "Matricula" class="form-control" required>
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
             </div>  <br><br>
     
          <div class="form-group col-lg-5 offset-4">
          <input type="button" name="enviar" class="custom-control-input" >
          <button  id="btnenvia" class="form-control btn-success">Enviar</button>
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
<script>
    $(function(){

      $("#btnenvia").click(function(){
        //alert("AUCH");
        //../Modelo/registrarIngles.php
        var mat= $("#matricula").val(); 
        var nl= $("#nivel").val();
        alert("("+mat+")" + "  "+nl);

  
        $.ajax({
          type: "GET",
          url: "../Modelo/registrarFrances.php",
          data: {
            usuario: mat,
            nivel: nl
          },
          success: function(dato){
            //alert("SASASAS");
            var dt = dato.trim();
            //alert(dt);
            if(dt == "ESTA MATRICULA YA FUE REGISTRADA ANTERIORMENTE")
            {
               if(confirm("ESTA MATRICULA YA FUE REGISTRADA ANTERIORMENTE, ¿DESEA CAMBIAR EL NIVEL DE ESTE ALUMNO?"))
               {

                $.ajax({
                  type: 'GET',
                  url: '../Modelo/cambiarNivel.php',
                  data: {nivel: nl, usuario: mat},
                  success: function(dato){
                      alert(dato);
                  }

                });
              }

            }
            else{
              alert(dt);
            }
            //ESTA MATRICULA YA FUE REGISTRADA ANTERIORMENTE
            //alert(dato);
          }
        });

      });

    });
  </script>

  <div style="text-align: right;">
            <a href="../Vista/Inicio.html" class="btn btn-danger">Regresar</a>
          </div>

  </html>
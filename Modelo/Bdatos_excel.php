 <?php 
include("../modelo/conexion1.php");
  
$consulta2 = "SELECT matricula FROM  alumno";
    $resultado2 = mysqli_query($conexion, $consulta2)
    or die("Algo ha ido mal en la consulta a la base de datos");

    while($columna2 = mysqli_fetch_array($resultado2)){     
        $datosR=$columna2['matricula'];
        }

$cadena_de_texto = $datosR;
if ($cadena_busqueda   = 'ISC'){
$posicion_coincidencia = strrpos($cadena_de_texto, $cadena_busqueda);
 
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    echo "NO se ha encontrado la palabra deseada!!!!";
    } else {
            echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia;
            $carreraISC= array($posicion_coincidencia);
            }

 }
?>
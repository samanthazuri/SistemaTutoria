<?php
require("conexion1.php");
    session_start();
$formularioCompleto= false;
$orgEstudiosHecho= false;
$resshort ="";

$r1 = $_REQUEST['res1'];
$r2 = $_REQUEST['res2'];
$r3 = $_REQUEST['res3'];
$r4 = $_REQUEST['res4'];
$r5 = $_REQUEST['res5'];
$r6 = $_REQUEST['res6'];
$r7 = $_REQUEST['res7'];
$r8 = $_REQUEST['res8'];
$r9 = $_REQUEST['res9'];
$r10 = $_REQUEST['res10'];







$arreglo = array("res1" => $r1,"res2" => $r2,"res3" => $r3,"res4" => $r4,"res5" => $r5,"res6" => $r6,"res7" => $r7,"res8" => $r8,"res9" => $r9,"res10" => $r10);
 


//var_export($arreglo);



$division=$arreglo;
$cuenta = array_count_values($division);
echo "<br/><br/>RESULTADO: ";
$valorAnterior = 0;
$cosa=1;
foreach ($cuenta as $key => $valor) {
    if($valor < $valorAnterior) {
        break; 
    } else {
        $valorAnterior = $valor;
       // echo "$key; ";
        $cosa="$key";
   
    } 
}



    
  switch ($cosa) 
  {
    case ($cosa == "1"):
    $resshort= "Nivel bajo de autoestima";
    $res= " Mayoría de 1. Tienes un nivel algo bajo de autoestima y se nota en la valoración que haces de ti mismo, de tu trabajo y de tu fortuna en la vida. Una de las razones por las que percibimos más las cosas negativas es que estas son más destacables que las positivas. En la escuela o de niños en casa, siempre nos regañaban por lo malo pero se olvidaban de felicitamos por lo bueno. Para elevar el nivel de nuestra autoestima es necesario aceptarse tal como uno es y valorar más lo que somos y lo que tenemos. A veces puede parecer difícil, pero si practicas unos minutos diarios a pensar en las cosas positivas que tienes, irás poco a poco queriéndote más. 
";
    break;

    case ($cosa == "2"):
        $resshort= "Nivel de autoestima suficiente";
       $res= "Mayoría de 2. Tu nivel de autoestima es suficiente pero más a menudo de lo que te gustaría, te falla y te abandona. Los sucesos negativos que nos pasan absorben más nuestros sentidos pues son más desagradables que las cosas positivas, por ello les damos más importancia de la que merecen y no nos fijamos en lo bueno con igual intensidad. Todas las personas tenemos cosas positivas y todos cometemos errores o tenemos días flojos. La clave está en darle a cada cosa el justo valor que tiene, ver los errores como maneras de aprendizaje y reconocer las cosas buenas que poseemos. También podemos aprender a queremos a nosotros mismos cuidándonos con más mimo y dándonos gustos. " ;
    break;

     case ($cosa == "3"):
            $resshort= "Nivel de autoestima muy bueno";
           $res= "Mayoría de 3. Tu nivel de autoestima es muy bueno, sabes dar a las cosas el valor que merecen, reconoces lo bueno y no te dejas intimidar fácilmente por las adversidades. Eres una persona sensata y realista que tiene confianza en sí misma, tus objetivos no son irrealizables y te gusta luchar para conseguirlos. Has aprendido que las cosas no salen siempre como quieres ni cuando quieres, que todo requiere un esfuerzo y que es normal equivocarse. Cuando tienes un error procuras aprender lo que este te enseña y a evitarlo en futuras ocasiones. Un buen nivel de autoestima nos hace tener más ganas de luchar por las cosas, nos ayuda a no desistir en nuestro empeño de lograr algo y hace que la vida nos sea más amable y agradable. " ;
    break;

     case ($cosa == "4"):
        $resshort= "Nivel de autoestima alto";
       $res= "Mayoría de 4. Tienes un alto nivel de autoestima y mucha confianza y seguridad en ti mismo. Ambos sentimientos son muy positivos y necesarios para conseguir mucho más de lo que nos proponemos, sin embargo, es preciso ser cautelosos. Al igual que una baja autoestima, un exceso de esta puede hacernos perder la objetividad de nuestras acciones, hacernos creer demasiado buenos en algo, y si sobreviene una decepción o un fracaso, hacernos sufrir más de lo razonable. También si nos creemos demasiado especiales podemos hacer daño a los demás minusvalorando su esfuerzo o no apreciándolo en lo que vale. Siempre conviene tener una dosis de modestia  " ;
    break;

      }

echo "$res";

$dato=$_SESSION['dato'];

$busca= "SELECT * FROM alumno WHERE matricula ='$dato'";
    $sql=mysqli_query($conexion, $busca) or die ("Error");


while ($columna=mysqli_fetch_array($sql)) {

    $cve_tut= $columna['cve_tut'];

    $busca2= "SELECT * FROM act_tutoria WHERE matricula ='$dato'";
    $sql2=mysqli_query($conexion, $busca2) or die ("Error");
    while ($columna2=mysqli_fetch_array($sql2)) {
        $orgEstudiosHecho= true;
    }
        if($orgEstudiosHecho)
        {
            $update= "UPDATE act_tutoria SET  autoestima = '".utf8_decode($resshort)."' WHERE matricula = '$dato'";
                mysqli_query($conexion,$update)  or die("Error,$update");
        }else
        {
            $insert= "INSERT INTO act_tutoria (id_actutorias, matricula,cve_tut,autoestima,estilos_aprendizaje,motivacion_estudio,organizacion_est) VALUES ('','$dato', '$cve_tut','".utf8_decode($resshort)."','','','')";
            mysqli_query($conexion,$insert)  or die("Error, $insert");     
        }

}


?>
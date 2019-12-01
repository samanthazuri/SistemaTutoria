<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location: ../Vista/logpri.php");
}
else{
	header("location: ../Vista/logpri.php");
}
?>
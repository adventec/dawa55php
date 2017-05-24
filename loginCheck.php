<?php
if(!isset($_SESSION["nombre"])){
	header("refresh:1; formLogin.php");
	
	exit("Te redireccionamos a la pagina de login");
	
}

?>
<?php
session_start();
	$id=		$_POST["id"];
	$nombre=	$_POST["nombre"];
	$pass=	$_POST["pass"];
	$edad=	$_POST["edad"];
	$pais=	$_POST["pais"];
	$ecivil=	$_POST["ecivil"];
	$borrar=	$_POST["borrar"];
	$enviar=	$_POST['enviar'];
	$user=	$_SESSION["nombre"];
	$visitas=$_COOKIE["visitas"];

?>
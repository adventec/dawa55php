<?php
	$idusers=$_POST["idusers"];
	$nombre=	$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$pass=	$_POST["pass"];
	$repass=	$_POST["repass"];
	$edad=	$_POST["edad"];
	$pais=	$_POST["pais"];
	$email=	$_POST["email"];
	$borrar=	$_POST["borrar"];
	$actual=	$_POST['actual'];
	$insertar=	$_POST['insertar'];
	$cerrar=	$_POST['cerrar'];
	$inscripcion=$_POST['inscripcion'];
	$visitas=$_COOKIE["visitas"];
	
	$user=	$_SESSION["nombre"];
	$iduser= $_SESSION["iduser"];
?>
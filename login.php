<?php
session_start();
//header("Refresh: 3; form_login.php");
	

		if(!isset($_SESSION["nombre"])){
			include('conexionMysqli.php');
			include('postVar.php');
			
			$query="SELECT nombre FROM USERS WHERE nombre=? AND pass=?";
			$extracto = $conexion->prepare($query);
			$extracto->bind_param("ss",$nombre,$pass);
			$extracto->execute();

			$rows=0;
			while($extracto->fetch()){
				++$rows;
			}

			if($rows>0){
				header("Refresh: 2; crudBasic.php");
				$_SESSION["nombre"]=$nombre;
				session_name($nombre);
				$nomSesion=session_name();
				$tiempo=time()+60*60*24*365;
				$resta=$tiempo-time();
				
				if(!isset($_COOKIE["visitas"])){
					$visita=1;
					setcookie("visitas",$visita,$tiempo);
					echo "se ha creado la cookie <br>";
				}
				else{
					setcookie("visitas",$visitas++,$tiempo);
					echo "se ha incrementado la cookie en $visitas";
				}
				
				echo "bienvenido $nombre tu sesion se llama $nomSesion durante $resta estara guardada <br>nos has visitado $visitas veces <br>";
				
			}
			else echo "error";

		}
		else {
			header("Refresh: 2; crudBasic.php");
			//header("Location:form_login.php");
			echo "<br><h1>ya estas loggeado $user </h1><br>";
		}
	include('conexionClose.php');
?>
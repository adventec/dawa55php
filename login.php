<?php
session_start();
//ini_set('display_errors', 'On');
//ini_set('display_startup_errors', 'Off');
//error_reporting(E_ALL ^ E_NOTICE);
include('conexionMysqli.php');
include('postVar.php');
	
	if(!isset($_SESSION["nombre"])){
			$pass=htmlentities(addslashes($pass));
			$query="SELECT idusers, pass FROM users WHERE nombre=?";
			$extracto = $conexion->prepare($query); 	//meter la sentencia sql en un objeto stmt
			$extracto->bind_param("s",$nombre);//enlazar los parametros con las ?
			$extracto->execute();//ejecutar
			$extracto->bind_result($iduser,$hash);//enlazar el resultado con las variables de retorno
			$extracto->store_result();						//almacenar el resultado en el buffer para que funcione el metodo num_rows siguiente
			$filas=$extracto->num_rows;					//devuelve las filas encontradas

			while($extracto->fetch()){
			
				if (password_verify($pass, $hash)) {
					$filas++;
					//$cont++;
				}
			}			
		
			if($filas>0){
				header("Refresh: 1; _inicio.php");
				
				$_SESSION["nombre"]=$nombre;
				$_SESSION["iduser"]=$idusers;
				$tiempo=time()+60*60*24*365;
				$resta=$tiempo-time();
					if(!isset($visitas)){
						$visita=1;
						setcookie("visitas", $visita, $tiempo);
						echo "se ha creado la cookie <br>";
					}
					else{
						$visita=$visitas+1;
						setcookie("visitas", $visita, $tiempo);
					//	echo "se ha incrementado la cookie en $visitas";
					}
//					echo "bienvenido $nombre tu sesion se llama $nomSesion durante $resta estara guardada <br>nos has visitado $visitas veces <br>";
				//echo "bienvenido $nombre tu id es $iduser";
			}
			else echo "error";
		}
		else {
			header("Refresh: 2; _inicio.php");
			echo "<br><h1>ya estas loggeado $user id=$iduser</h1><br>";
		}
 mysqli_close($conexion);
?>

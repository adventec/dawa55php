<?php
ob_start();		
session_start();
				$servidor="localhost";
				$usuario="root";
				$clave = "pass";
				$db="danidb";
				//$conexion = mysqli_connect($servidor,$usuario,$clave);
				$conexion= new mysqli($servidor,$usuario,$clave);
				//if (!$conexion) {
				if (mysqli_connect_errno()) {
					die('No pudo conectarse: ' .  mysqli_connect_errno() . mysqli_connect_error());
				}
					//echo "Conectado a la base de datos  $db <br>" ;
				$bd_seleccionada = mysqli_select_db($conexion,$db);
				if (!$bd_seleccionada) {
					die ('No se puede usar cursos : ' .  mysqli_connect_errno() . mysqli_connect_error());
				}
				else{
				//	echo "Accediendo a la tabla <br>";
				}
	ob_end_clean();

//------------------------------------------------------------------------------------------------------------
//tipo de conexion 1 que devuelve unos valores 

//		$conexion = new mysqli("localhost:8889", $usuario, $clave, $db);
//		if ($conexion->connect_errno) {
//			 echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
//		}
//		echo $conexion->host_info . "<br>"; // =localhost:8889 via TCP/IP;


//------------------------------------------------------------------------------------------------------------
//tipo de conexion 2 que devuelve unos valores distintos

//		$conexion = new mysqli("127.0.0.1", $usuario, $clave, $db, 8889);
//		if ($conexion->connect_errno) {
//			 echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
//		}
//		echo $conexion->host_info . "\n"; //  =127.0.0.1 via TCP/IP
//------------------------------------------------------------------------------------------------------------


/*$mysqli = new mysqli("localhost:8889", "root", "", "cursos");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$mysqli = new mysqli("127.0.0.1", "root", "", "cursos", 8889);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";*/

?>
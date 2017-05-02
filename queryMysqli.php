<?php
	require "conexionMysqli.php";

		$resultado = mysqli_query($conexion,'SELECT * FROM users');
		
		
	if(!resultado){
		echo "no hay resultado";
	}
	else echo "hay resultado";
?>
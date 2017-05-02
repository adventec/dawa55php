<?php


require('conexionMysqli.php');
require ('postVar.php');
	//echo "INSERT INTO USERS VALUES($nombre,$pass,$edad,$pais,$ecivil)";
	$query="INSERT INTO USERS VALUES(null,?,?,?,?,?)";
	$extracto=mysqli_prepare($conexion,$query);
	mysqli_stmt_bind_param($extracto,"sssss",$nombre,$pass,$edad,$pais,$ecivil);

		if(!mysqli_stmt_execute($extracto)){
			echo "problema al insertar". mysqli_stmt_errno();
		}
			else echo "registro insertado<br><a href='crudBasic.php'>Volver</a>";


//header("Refresh: 3; crudBasic.php");
	




//"id"=$id
//"nombre"=$nombre
//"pass"=$pass
//"edad"=$edad
//"pais"=$pais
//"ecivil"=$ecivil


?>

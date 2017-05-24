<?php
//require_once "conexionMysqli.php";
//		$resultado = mysqli_query($conexion,'SELECT * FROM users');
//	if(!$resultado){
//		echo "no hay registros";
//	}

include "conexionMysqli.php";

$rpp;
$pagActual;
if(!isset($_GET['pagActual'])){
$pagActual=1;
}
else{
$pagActual=$_GET['pagActual'];
}
if(!isset($_GET['rpp'])){
	$_GET['rpp']=50;
	$rpp=$_GET['rpp'];
	
}else{
	$rpp=$_GET['rpp'];
}


$pagIni=($pagActual-1)*$rpp;

$resultado = mysqli_query($conexion,"SELECT * FROM users order by nombre desc");//LIMIT $pagIni,$rpp 
$numReg=$resultado->num_rows;
$pagTotal=ceil($numReg/$rpp);
$resultado->close();

$query="SELECT * FROM users ";//LIMIT $pagIni,$rpp
//$resultado=$conexion->prepare($query);
//$resultado->bind_param('s')
$resultado= $conexion->query($query);



if(!$resultado){
	echo "no hay registros";
}

?>

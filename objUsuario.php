<?php
class usuario{
	$idusers;
	$nombre;
	$apellido;
	$edad;	
	$pais;	
	$mail; 
	$pass;
	$foto;
	
	function __construct($idusers,$nombre,$apellido,$edad,$pais,$mail,$pass,$foto){
		this->$idusers=$idusers;
		this->$nombre=$nombre;
		this->$apellido=$apellido;
		this->$edad=$edad;
		this->$pais=$pais;
		this->$mail=$mail;
		this->$pass=$pass;
		this->$foto=$foto;
	}
	
}

?>
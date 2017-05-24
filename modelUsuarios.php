<?php
include('conexionPDOobj.php');


class ModelUsuarios{
	private $usuarios;
	private $conexion;
	public function __construct(){
		$this->conexion=ConexionPDOobj::conectar();
		$this->usuarios=array();
		
	}
	
	public function getUsuarios(){
		$query="SELECT * FROM USERS";
		$resultado=$this->conexion->query($query);
		while($filas=$resultado->fetch(PDO::FETCH_ASSOC)){
			$this->usuarios[]=$filas;
		}
		return $this->usuarios;
	}
}


?>
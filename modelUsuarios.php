<?php
session_start();
include('conexionPDOobj.php');
include('postVar.php');
class ModelUsuarios{
	private $usuarios;
	private $conexion;
	public function __construct(){
		$this->conexion=ConexionPDOobj::conectar();
		$this->usuarios=array();
	}
	public function getUsuarios(){
		$query="SELECT * FROM USERS where idusers=1";
		$resultado=$this->conexion->query($query);
//		
//		$query="SELECT * FROM USERS where idusers=?";
//		$resultado=$this->conexion->prepare($query);
//		$resultado->bindValue(1,$iduser, PDO::PARAM_INT);
//		$resultado->execute();
		while($filas=$resultado->fetch(PDO::FETCH_ASSOC)){
			$this->usuarios[]=$filas;
		}
		return $this->usuarios;
	}
}
?>
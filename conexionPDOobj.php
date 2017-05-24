<?php
class ConexionPDOobj{
	public static function conectar(){
		$servidor="localhost";
		$usuario="root";
		$clave = "pass";
		$db="danidb";
		try{
			$conexionPDO= new PDO ("mysql:host=$servidor; dbname=$db", "$usuario", "$clave");
			//convierte los errores en objetos de manera que luego puedo acceder a sus propiedades como el codigo de error o el mensaje o a sus metodos
			$conexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexionPDO->exec("SET CHARACTER SET utf8");
			//echo "ok";
		}
		catch(Exception $e){
			die ("error en la conexion linea=$e->getLine() codigo=$e->getCode() $e->getMessage()");
		//getcode() devuelve el codigo de error
		//getline() devuelve la linea del codigo donde hay error
		//getmessage devuelve el mensaje de error
		}
		return $conexionPDO;
	}
}
?>
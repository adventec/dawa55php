<?php

//ob_start();	
session_start();
	ini_set('display_errors', 'On');
	ini_set('display_startup_errors', 'Off');
	error_reporting(E_ALL ^ E_NOTICE);
	require('conexionMysqli.php');
	include('conexionPDO.php');
	require('postVar.php');
	

//INSERTAR
	if(isset($insertar)){
		if($insertar=="insertar"){
			$repass=$pass;
		}
		if($pass==$repass){
			if(isset($_FILES['foto'])){ //subida de foto
				$fotoName=		$_FILES['foto']['name'];
				$fotoTmpName=	$_FILES['foto']['tmp_name'];		
				$fotoType=		$_FILES['foto']['type'];
				$fotoSize=		$_FILES['foto']['size'];
				$fotoError=		$_FILES['foto']['error'];
				if(!preg_match('#image/[a-z]{3,}#m',$fotoType)){//Este patron permite subir imagenes solo pero con cualquier extension de minimo 3 letras
					print ('no se ha podido subir el fichero porque no es una imagen');
				}
				else if(is_uploaded_file($fotoTmpName)){
					if(!is_dir($dir)){
						mkdir($dir);	
					}
					$ext = str_replace('image/',"",$fotoType);//extension del archivo
					$fotoName = $nombre."_profilePic.".$ext;		
					$dir = "img/usrs/";
					$ruta = $dir.$fotoName;	
					move_uploaded_file($fotoTmpName,$ruta);
				}
			}
			
			$pass=password_hash($pass,PASSWORD_DEFAULT);
			$query="INSERT INTO users (nombre, apellido, pass, edad, pais, email,foto) VALUES(?,?,?,?,?,?,?)";
			$extracto=mysqli_prepare($conexion,$query);
			$z=mysqli_stmt_bind_param($extracto,"sssssss",$nombre,$apellido,$pass,$edad,$pais,$email,$fotoName);
				if(!mysqli_stmt_execute($extracto)){
					header("Refresh:1; formUsuarios.php");
					echo ("problema al insertar". mysqli_stmt_errno($extracto));
				}
				else {
					header("Location:formUsuarios.php");
					//echo "registro insertado <br><a href='formUsuarios.php'>Volver</a>";
				}
				mysqli_close($conexion);
		}
		else{
			header("Refresh:1; formRegister.php");
			echo "las password no coinciden <br><a href='bsFormRegister.php'>Volver</a>";
		}
		
	}
//ACTUAL

	if(isset($actual)){
		header("Refresh:1; formUsuarios.php");
		$query="UPDATE users SET nombre=?, apellido=?, pass=?, edad=?, pais=?, email=? WHERE idusers=?";
		$extracto=mysqli_prepare($conexion,$query);
		mysqli_stmt_bind_param($extracto,"ssssssi",$nombre, $apellido, $pass, $edad, $pais, $email, $idusers);
		if(!mysqli_stmt_execute($extracto)){
			header("Refresh:1; formUsuarios.php");
			echo ("problema al actualizar".mysqli_stmt_error($extracto));
		}
		else {
			header("Location:formUsuarios.php");
			echo "registro actualizado <br><a href='formUsuarios.php'>Volver</a>";
		}
		mysqli_close($conexion);	
	}

//BORRAR
	if(isset($borrar)){
		$query = "delete from users WHERE idusers=?;";
		$extracto = $conexion->prepare($query);
		$extracto->bind_param("i",$idusers);	
		if(!$extracto->execute()){
			header("Refresh:1; formUsuarios.php");
			echo "problema al borrar";
		}
		header("Location:formUsuarios.php");
		// echo $conexion->affected_rows() . " registros borrados<br> 
		//echo mysqli_affected_rows($conexion) . " registros borrados<br>
		//		<a href='formUsuarios.php'>Volver</a>";
		mysqli_close($conexion);	
		
	}

//CERRAR SESION
	if (isset($_GET['cerrar'])){
		session_unset();
		session_destroy();
		header("Refresh:1; _inicio.php");
//		echo "hasta luego";
	}
//ob_end_clean();


//INSCRIPCION
	if(isset($_GET['idPrograma'])){
		$idPrograma=$_GET['idPrograma'];
		$query="insert into cursogente (idprogramacion, idusers) values (:curso,:usr)";
		$stmt=$conexionPDO->prepare($query);
		$stmt->execute(array(":curso"=>$idPrograma,":usr"=>$iduser));
//		$filas=$conexionPDO->num_rows;
		header("location:formCursosP.php");
	}
//BORRAR INSCRIPCIONES	
	if (isset($_GET["idProgramaBorra"])){
		$idPrograma=$_GET['idProgramaBorra'];
		$query="delete from cursogente where idprogramacion=$idPrograma and idusers=$iduser";
		$conexionPDO->query($query);
		header("location:formCursosP.php");
	}

	
?>




<?php

//$name=$_FILES['file']['name']; //nombre real del fichero
//$tmpName=$_FILES['file']['tmp_name']; //nombre temporal asignado por el sistema
//$size=$_FILES['file']['size'];
//$type=$_FILES['file']['type'];
//$dir="img/";
//$idUnico=time();
//echo ("nombre=".$name."<br>tmpName=".$tmpName."<br>size=".$size."<br>type=".$type."<br>");
//	if(!preg_match('#image/[a-z]{3,}#m',$type)){//Este patron permite subir imagenes solo pero con cualquier extension de minimo 3 letras
//		print ('no se ha podido subir el fichero porque no es una imagen');
//	}
//	else if(is_uploaded_file($tmpName)){
//		if(!is_dir($dir)){
//			echo 'directorio invalido, vamos a crearlo';
//			mkdir($dir);
//		}
//			$name=$idUnico." - ".$name;
//			$ruta=$dir.$name;
//			move_uploaded_file($tmpName,$ruta);
//			echo ('nombre final='.$name.' <br>');
//			echo("<img src=\"$ruta\">");
//	}
//	else print ('no se ha podido subir el fichero');
?>
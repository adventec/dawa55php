	<?php
session_start();
		require('conexionMysqli.php');
		require('postVar.php');

		if(isset($enviar)){

			$query="UPDATE users SET nombre=?, pass=?, edad=?, pais=?, ecivil=? WHERE id=?";
			$extracto=mysqli_prepare($conexion,$query);
			mysqli_stmt_bind_param($extracto,"sssssi",$nombre,$pass,$edad,$pais,$ecivil,$id);

			if(!mysqli_stmt_execute($extracto)){
					echo "problema al insertar";
			}
			else echo "registro insertado<br><a href='crudBasic.php'>Volver</a>";
		}
		else if(isset($borrar)){

				$query = "delete from users WHERE id=?;";
				$extracto = $conexion->prepare($query);
				$extracto->bind_param("i",$id);	
				if(!$extracto->execute()){
						echo "problema al insertar";
				}
				// echo $conexion->affected_rows() . " registros borrados<br> 
				echo mysqli_affected_rows($conexion) . " registros borrados<br>
				
				 <a href='crudBasic.php'>Volver</a>";
		}







?>
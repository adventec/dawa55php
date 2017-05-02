
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<title>Document</title>
	<link type="text/css" href="../estilo.css" rel="stylesheet">
</head>
<body>

	<?php
	require "queryMysqli.php";
	include('postVar.php');
	?>
	<p>Usuario: <?php echo $user ?></p>
	<p>Visitas: <?php echo $visitas ?></p>
	<form><button type="submit" formmethod="post" formaction="loginClose.php">Cerrar sesion</button><br><br></form>
				<table>
				<tr>
				<th>id</th>
				<th >Nombre</th>
				<th>pass</th>
				<th>edad</th>
				<th>pais</th>
				<th>E.civil</th>
				</tr>
	<?php
		while ($fila = $resultado->fetch_array()) {
	?>		
				<tr><form name="updateForm" action="update.php" method="post">
					<td><input type="text" value="<?php echo $fila['id']; ?>" name="id" ></td>
					<td><input type="text" value="<?php echo $fila['nombre']; ?>" name="nombre" ></td>
					<td><input type="text" value="<?php echo $fila['pass']; ?>" name="pass" ></td>
					<td><input type="text" value="<?php echo $fila['edad']; ?>" name="edad" ></td>
					<td><input type="text" value="<?php echo $fila['pais']; ?>" name="pais" ></td>
					<td><input type="text" value="<?php echo $fila['ecivil']; ?>" name="ecivil" ></td>
					<td><input type='submit' value='enviar' name='enviar'></td>
					<td><input type='submit' value='borrar' name='borrar'></td>
				</form></tr>
	<?php
		}
	require "insertLine.php";	
	include('conexionClose.php');
	?>		
	
	
</table>
</body>
</html>

<!--
<?php $fila['id'] ?>
<?php $fila['nombre'] ?>
<?php $fila['pass'] ?>
<?php $fila['edad'] ?>
<?php $fila['pais'] ?>
<?php $fila['ecivil'] ?>-->
<!--

	





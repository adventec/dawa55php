<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	require "queryMysqli.php";
?>
	<form action="">
		<select name="myselect" id="">
				<option value="2">segunda</option>
				<?php while ($fila = $resultado->fetch_array()) { 
				$id=$fila['idusers'];
				$nombre=$fila['nombre'];
				$pass=$fila['pass'];
				$edad=$fila['edad'];
				$pais=$fila['pais'];
				$ecivil=$fila['email'];



?>

				<option value="<?php echo $id; ?>"><?php echo "$nombre  $pass  $edad .  $pais .  $email"; ?></option>

		<?php } ?>
	</select>
	</form>
</body>
</html>



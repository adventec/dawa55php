<?php 
session_start();
include('cabecera.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link type="text/css" href="css/custom2.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<?php echo $iduser; ?>

<form name="formUsuario" action="functions.php" method="post">
	
	<?php foreach($listaUsuarios as $linea){?>
	<div id="fichausuario">
		<div id="fotoperfil">
		<img id="foto" alt="foto de perfil"  name="foto" src="img/usrs/<?php echo $linea ['foto'] ?>" name="foto"	value=""><br>
		</div>
		<div id="datosperfil">
			<label for="idusers">id 		</label><input type="text" class="userdata" name="idusers" 	value="<?php echo $linea ['idusers']  ?>"><br>
			<label for="nombre">nombre 		</label><input type="text" class="userdata" name="nombre"	value="<?php echo $linea ['nombre']   ?>"><br>
			<label for="apellido">apellido 	</label><input type="text" class="userdata" name="apellido"	value="<?php echo $linea ['apellido']   ?>"><br>
			<label for="edad">edad 			</label><input type="text" class="userdata" name="edad"		value="<?php echo $linea ['edad']   ?>"><br>
			<label for="pais">pais 			</label><input type="text" class="userdata" name="pais"		value="<?php echo $linea ['pais']   ?>"><br>
			<label for="email">email 		</label><input type="text" class="userdata" name="email"		value="<?php echo $linea ['email']   ?>"><br>
		
		<input type='submit' value='insertar' name='insertar'><br>
		</div>
		
	</div>
	<?php } ?>
		
</form>	


<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</body>
</html>

<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
	<link type="text/css" href="css/custom2.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	
</head>

<body>

	
<div id="container-fluid">

<!--CABECERA-->
<div class="row">
<div class="col-xs-12">
	
	<?php  include('cabecera.php');  ?>
</div>

</div>
<!--FIN DE CABECERA-->
		
<!--CENTRO-->
<div class="row" id="centro">
	<form name="registerForm"  action="functions.php" id="registerForm" class="form-horizontal col-xs-11" method="post"  enctype="multipart/form-data">
		<fieldset>

	<!-- Form Name -->
		<legend class="colxs-2 col-xs-offset-1">Regístrate</legend>

	<!-- Text input-->
		<div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="#nombre">Nombre</label>  
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> <input id="nombre" name="nombre" type="text" placeholder="Juan" class="form-control input-md" required></div>
		</div>

	<!-- apellido-->
		<div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="apellido">Apellido</label>  
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> <input id="apellido" name="apellido" type="text" placeholder="Gomez" class="form-control input-md" ></div>
		</div>

	<!-- edad-->
		<div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="edad">Edad</label>  
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> <input id="edad" name="edad" type="text" placeholder="18" class="form-control input-md" ></div>
		</div>

	<!-- pais-->
		<div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="pais">Pais</label>  
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> <input id="pais" name="pais" type="text" placeholder="España" class="form-control input-md" ></div>
		</div>

	<!-- email-->
		<div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="email">E-mail</label>  
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> <input id="email" name="email" type="text" placeholder="juan.lopez@mail.com" class="form-control input-md" ></div>
		</div>

	<!-- Password input-->
		<div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="pass">Password</label>
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> <input id="pass" name="pass" type="password" placeholder="Introduce tu contraseña" class="form-control input-md" required=""></div>
		</div>

	<!-- Password input-->
		<div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="repass">Repeat password </label>
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> <input id="repass" name="repass" type="password" placeholder="Repite tu contraseña" class="form-control input-md" required=""></div>
		</div>

<!-- Foto -->
		<div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="foto">Foto </label>
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> <input id="foto"  name="foto" type="file" value="foto" class="form-control input-md btn">
		 </div>
<br><br>

	<!-- Button -->
		<br><div class="form-group">
		  <label class="col-xs-8 col-xs-offset-1 col-md-4  control-label" for="singlebutton"></label>
		  <div class="col-xs-8 col-xs-offset-1 col-md-4 "> 
		  	<button id="enviar" type="submit" name="insertar" value="registro" class="btn btn-primary">Registrar</button>
			<input type="reset" id="Borrar" name="borrar" class="btn btn-primary" value="borrar"></div>
		  </div>
		</div>

		</fieldset>
	</form>
</div>

<!--FIN DEL CENTRO-->


</div><!--FIN DEL CONTAINER PRINCIPAL-->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

</body>
</html>
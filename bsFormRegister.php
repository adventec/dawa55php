<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	
	
	
</head>
<body>
	<form name="registerForm"  id="registerForm" class="form-horizontal" method="post" action="insert.php">
		<fieldset>

		<!-- Form Name -->
		<legend>Registate</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
		  <div class="col-md-4">
		  <input id="nombre" name="nombre" type="text" placeholder="Juan" class="form-control input-md" required="">  
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Edad</label>  
		  <div class="col-md-4">
		  <input id="edad" name="edad" type="text" placeholder="18" class="form-control input-md" required="">    
		  </div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="selectbasic">Estado civil</label>
		  <div class="col-md-4">
			 <select id="ecivil" name="ecivil" class="form-control">
				<option value="0"></option>
				<option value="1">Solter@</option>
				<option value="2">Casad@</option>
			 </select>
		  </div>
		</div>

	<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Pais</label>  
		  <div class="col-md-4">
		  <input id="pais" name="pais" type="text" placeholder="España" class="form-control input-md" required="">  
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="email">E-mail</label>  
		  <div class="col-md-4">
		  <input id="email" name="email" type="text" placeholder="juan.lopez@mail.com" class="form-control input-md" required="">   
		  </div>
		</div>

		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="passwordinput">Password</label>
		  <div class="col-md-4">
			 <input id="pass" name="pass" type="password" placeholder="Introduce tu contraseña" class="form-control input-md" required="">   
		  </div>
		</div>

		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="passwordinput">Repeat password </label>
		  <div class="col-md-4">
			 <input id="repass" name="repass" type="password" placeholder="Repite tu contraseña" class="form-control input-md" required="">    
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="singlebutton"></label>
		  <div class="col-md-4">
			 <button id="enviar" name="enviar" class="btn btn-primary">Registrar</button>
			  <input type="reset" id="Borrar" name="borrar" class="btn btn-primary" value="borrar">
		  </div>
		</div>

</fieldset>
</form>
</body>
</html>
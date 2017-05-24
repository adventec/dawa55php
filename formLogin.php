<?php session_start(); include('postVar.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
	
	
	<link type="text/css" href="css/custom2.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="css/login.css" rel="stylesheet">

	
</head>

<body>

	
<div id="container-fluid">
		
	
<!--CABECERA-->

<?php  include('cabecera.php');  ?>

<!--FIN DE CABECERA-->
		
<!--CENTRO-->		
	<div id="centro">	
		<div class="row login_box">
			<div class="col-md-12 col-xs-12" align="center">
				<div class="line"><h3><?php echo date("d m Y"); ?></h3></div>
				<div class="outter"><img src="https://pbs.twimg.com/profile_images/824716853989744640/8Fcd0bji.jpg" class="image-circle" /></div>
				<h1>Hola Soci@</h1> <span>Bienvenid@</span>
			</div>
			
			<form class="col-md-12 col-xs-12 login_control" name="loginForm" method="post" action="login.php">
				<div class="control"><div class="label">Usuario</div>
					<input name="nombre" type="text" class="form-control" placeholder="admin@gmail.com" value="andres"/> 
				</div>
				<div class="control"><div class="label">Contraseña</div>
					<input name="pass" type="password" class="form-control" value="123" /> 
				</div>
				<div align="center">
					<input type="submit" name="login" value="Login" class="btn btn-orange"/>
				</div>
			</form>
						
		</div>
	</div><!--CENTRO-->
</div><!--FIN DE CONTENEDOR PRINCIPAL-->


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
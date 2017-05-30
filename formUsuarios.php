<?php
session_start();
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'Off');
error_reporting(E_ALL ^ E_NOTICE);

	include('postVar.php');
	require "queryUsuarios.php";
	include('loginCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>

	<link type="text/css" href="css/custom2.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	
</head>
<body>

<div class="container-fluid">
<!--CABECERA-->
<?php	include('cabecera.php');	?>
<!--FIN DE CABECERA-->
<?php echo "ide=$iduser"; ?>
<div id="centro">
<div class="row"><!--FILA TABLA-->
	
<div class="col-xs-10 col-xs-offset-1"><!--COLUMNA TABLA-->
		<table class="table table-striped table-hover table-responsive table-bordered table-condensed">
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>pass</th>
				<th>edad</th>
				<th>pais</th>
				<th>eMail</th>
				<th></th>
				<th></th>
			</tr>
<?php	while ($fila = $resultado->fetch_array()) {	?>		
			<tr>
			<div class="form-group-row">
				<form name="updateForm" action="functions.php" method="post">			
					<td><input type="text" value="<?php echo $fila['idusers']; ?>" class="input-sm form-control" name="idusers" ></td>
					<td><input type="text" value="<?php echo $fila['nombre'] ; ?>" class="input-sm form-control" name="nombre" ></td>
					<td><input type="text" value="<?php echo $fila['apellido'];?>" class="input-sm form-control" name="apellido" ></td>
					<td><input type="text" value="<?php echo $fila['pass']   ; ?>" class="input-sm form-control" name="pass" ></td>
					<td><input type="text" value="<?php echo $fila['edad']   ; ?>" class="input-sm form-control" name="edad" ></td>
					<td><input type="text" value="<?php echo $fila['pais']   ; ?>" class="input-sm form-control" name="pais" ></td>
					<td><input type="text" value="<?php echo $fila['email']  ; ?>" class="input-sm form-control" name="email" ></td>
					<td><button type='submit' class="btn-primary btn-sm" value='enviar' name='actual'><span class="glyphicon glyphicon-ok"></span></button></td>
					<td><button type='submit' class="btn-danger btn-sm" value='borrar' name='borrar'> <span class="glyphicon glyphicon-trash"></span></button></td>
				</form>    </div>
			</tr>
<?php	}	?>
			<tr>
			<div class="form-group-row">
				<form name="insertForm" action="functions.php" method="post">		
					<td><input type="text" class="input-sm form-control" name="idusers" ></td>
					<td><input type="text" class="input-sm form-control" name="nombre" ></td>	
					<td><input type="text" class="input-sm form-control" name="apellido" ></td>
					<td><input type="text" class="input-sm form-control" name="pass" ></td>
					<td><input type="text" class="input-sm form-control" name="edad" ></td>
					<td><input type="text" class="input-sm form-control" name="pais" ></td>
					<td><input type="text" class="input-sm form-control" name="email" ></td>
					<td><button type='submit' class="btn-primary btn-sm" value='insertar' name='insertar'><span class="glyphicon glyphicon-ok"></span></button></td>
				</form> </div>
			</tr>
<?php	mysqli_close($conexion); ?>		
		
		</table>
</div><!--FIN COLUMNA TABLA-->
</div><!--FIN FILA TABLA-->

<!--INICIO PAGINACION-->
	<div class="row col-xs-12 text-center">
	<a href="pdf.php" class="btn btn-warning">pdf</a>
	<div>						<?php  echo "Registros: $numReg" ?></div>
	<div>						<?php  echo "Página $pagActual"?></div>
	
	<div><form name="f" action="formUsuarios.php" method="get">
			Resultados página <input type="text" name="rpp" id="rpp" value="<?php echo $rpp ?>" style="width:25px; text-align:center" onchange="this.submit"><br>
			<ul class="pagination">
		<?php  
			for($i=1; $i<=$pagTotal; $i++){
				echo "<li><input type='submit' name='pagActual' id='pagActual' value='$i'></li>";		
			} ?>
			</ul>
			
			</form>
	</div>	
	<div>
	
	</div>
</div><!--FIN PAGINACION-->
</div><!--FIN DE CENTRO-->




</div> <!--fin container-->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>






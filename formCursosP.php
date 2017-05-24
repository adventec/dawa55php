<?php
session_start();
	include('postVar.php');
	include('loginCheck.php');
include('queryCursosP.php');
?>	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link type="text/css" href="css/custom2.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
	<div class="container-fluid"><!--CONTENEDOR PRINCIPAL-->
		<!--CABECERA-->
		<div class="row">
			<?php  include('cabecera.php');  ?>
		</div>
		<!--FIN DE CABECERA-->
		<!--CENTRO-->
		<div id="centro" class="row">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-striped table-hover table-responsive table-bordered table-condensed">	
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Inicio</th>
						<th>Fin</th>
						<th>Horas</th>
						<th>Precio</th>
						<th>Selecciona</th>
					</tr>
					<?php		while($fila=$stmt->fetch(PDO::FETCH_BOTH)){		?>
					<form action="functions.php" method="get">
						<tr>
							<td><?php echo $fila[0]?></td>
							<td><?php echo $fila[1]?></td>
							<td><?php echo $fila[2]?></td>
							<td><?php echo $fila[3]?></td>
							<td><?php echo $fila[4]?></td>
							<td><?php echo $fila[5]?></td>
							<td><?php echo $fila[6]?></td>
					<?php 			
					$query="select * from cursogente where idusers=$iduser and idprogramacion=$fila[0];";
					$res=$conexionPDO->query($query);
					$count=$res->rowCount();
					if($count>0){ 
					?>
							<td><button disabled class='btn'><span class="glyphicon glyphicon-check"></span></button>
								<button  class='btn btn-danger' type="submit" name="idProgramaBorra" value="<?php echo $fila[0]?>"><span class="glyphicon glyphicon-remove-circle"></span></button></td>
					<?php } else 	{?>
							<td><button  class='btn btn-info' type="submit" name="idPrograma" value="<?php echo $fila[0]?>"><span class="glyphicon glyphicon-share"></span></button></td>
					<?php } ?>
					
			
						</tr>
					</form>
					<?php } //$stmt->closeCursor();?>
				</table>
			</div>
		</div>	<!--FIN DEL CENTRO-->
	</div>	<!--FIN DE CONTENEDOR PRINCIPAL-->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>

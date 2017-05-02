<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js" ></script>
	<script language="JavaScript" type="text/javascript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" ></script>
	<script language="JavaScript" type="text/javascript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" ></script>
	<script language="JavaScript" type="text/javascript" src="js/bsCrud.js"></script>
	
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bsCrud.css" >
	
	
	
	
	
	
	
	<?php
	require "queryMysqli.php";
	include('postVar.php');
	?>
	
</head>

<body>
<div class="container">

	<div class="row"><h2 class="text-center">Listado de usuarios</h2></div>
	
<!-------------------------USER------------------------------------------------------>

	<div class="row">
		<div class="col-md-4"><p>Usuario: <?php echo $user ?></p></div>
		<div class="col-md-4"><p>Visitas: <?php echo $visitas ?></p></div>		
		<div class="col-md-4"><form><button type="submit" formmethod="post" formaction="loginClose.php">Cerrar sesion</button></form></div>
	</div>
	
	
<!-------------------------TABLA------------------------------------------------------>
	
	<div class="row"><div class="col-md-12">
	<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Pass</th>
				<th>edad</th>
				<th>Pais</th>
				<th>eCivil</th>
				<th>Editar</th>
				<th>Borrar</th>
			</tr>
		</thead>

		<tbody>
		<?php	while ($fila = $resultado->fetch_array()) {	?>	

			<tr>
				<form name="updateForm" action="update.php" method="post">
					<td><input type="text" value="<?php echo $fila['id']; ?>" name="id" ></td>
					<td><input type="text" value="<?php echo $fila['nombre']; ?>" name="nombre" ></td>
					<td><input type="text" value="<?php echo $fila['pass']; ?>" name="pass" ></td>
					<td><input type="text" value="<?php echo $fila['edad']; ?>" name="edad" ></td>
					<td><input type="text" value="<?php echo $fila['pais']; ?>" name="pais" ></td>
					<td><input type="text" value="<?php echo $fila['ecivil']; ?>" name="ecivil" ></td>
					

					<td>
						<p data-placement="top" data-toggle="tooltip" title="Editar">
							<button type='submit' name='enviar' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit">
						<span class="glyphicon glyphicon-pencil"></span></button>
						</p>
					</td>
					<td>
						<p data-placement="top" data-toggle="tooltip" title="Borrar">
						<button type='submit' name='borrar' class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete">
						<span class="glyphicon glyphicon-trash"></span></button>
						</p>
					</td>
				</form>
			</tr>
			<?php
		}
	
			
			
			
	?>	
	
	<tr>
		<form name="insertForm" action="insert.php" method="post">		
		<td><input type="text" value="" name="id" ></td>
		<td><input type="text" value="" name="nombre" ></td>
		<td><input type="text" value="" name="pass" ></td>
		<td><input type="text" value="" name="edad" ></td>
		<td><input type="text" value="" name="pais" ></td>
		<td><input type="text" value="" name="ecivil" ></td>
		<td>
			<p data-placement="top" data-toggle="tooltip" title="Insertar">
				<button type='submit' name='enviar' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit">
			<span class="glyphicon glyphicon-pencil"></span></button>
			</p>
		</td>
		</form>
	</tr>			
						
			
				
		</tbody>
	</table>
			
				
			
			
			
		</div>
	</div> <!--fin de fila-->
	
</div> <!--fin container-->

<?php	include('conexionClose.php');	?>	

</body>
</html>

		
				




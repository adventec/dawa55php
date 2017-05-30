<!--CABECERA-->
<div>
	<div class="row"><!--BARRA DE LOGO-->
				<div class="col-xs-12 col-sm-12 col-lg-12">
					<h1 class="logo">yöme löguísö</h1> 
				</div>
	</div>
	<!--BARRA DE NAVEGACION DE CABECERA-->
	<div class="col-xs-12 col-sm-12 col-lg-12">
	<div class="navbar navbar-inverse">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barramini" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span> 
			</button> 				
			<a class="navbar-brand logo" id="logo" href="_inicio.php">YÖMËLÖGUÏSÖ</a> 
		 </div>

		 <!-- Collect the nav links, forms, and other content for toggling -->
		 <div class="collapse navbar-collapse" id="barramini">
					 <ul class="nav navbar-nav">
						<li class="active"><a href="_inicio.php">Home</a></li>
						<li><a href="formCursosP.php">Cursos</a></li>
						<li><a href="formUsuarios.php">Usuarios</a></li>
					 </ul>
					 <ul class="nav navbar-nav navbar-right">
						
			 		 <?php if(!isset($user)){ ?>
						<li><a href="formRegister.php"><span class="glyphicon glyphicon-user">   </span>Registro</a></li> 
						<li><a href="formLogin.php">   <span class="glyphicon glyphicon-log-in"> </span>Login</a></li>		 		 
			 		 <?php } else{	?>
						<li><a href="controlUsuarios.php"><span class="glyphicon glyphicon-user"></span><?php echo " hola $user    ";?><span class="badge"><?php echo $visitas;?></span></a></li>
						<li><a href="functions.php?cerrar=cerrar"><span class="glyphicon glyphicon-log-in"></span> Salir</a>
						
					<?php			
							}
					 ?>
			 		 </ul>
		</div>
		</div>
		</div>
	</div>
	<!--FIN DE BARRA DE NAVEGACION-->
</div>
<!--FIN DE CABECERA-->
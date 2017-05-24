<?php session_start();
include("postVar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link type="text/css" href="css/custom2.css" rel="stylesheet">
  	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	
</head>

<body>
<div class="container-fluid"><!--CONTENEDOR PRINCIPAL-->

<!--CABECERA-->
<?php  include('cabecera.php');  ?>
<!--FIN DE CABECERA-->


	<div id="centro">
<!--	INICION DE CURSOS-->
<!--	T1-->
			<div class="curso col-xs-12 col-sm-5 col-md-2 col-sm-offset-2 col-lg-2">
				<h2>Cursos de cocina</h2> 
				<img src="img/cocinero.jpg" alt="cursos de cocina" height="176">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident eius, cum perspiciatis maiores eos, inventore numquam.</p>
				<button type="submitcocinero" class="btn btn-warning"><a href="#">meAppunto</a></button>				
			</div><!--cierre t1-->
<!--	T2-->
			<div class="curso col-xs-12 col-sm-5 col-md-2 col-lg-2">
				<h2>Talleres de bricolaje</h2>
				<img src="img/reforma1.png" alt="cursos de bricolaje" width="187">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident eius, cum perspiciatis maiores eos, inventore numquam.</p>
				<button type="submit" class="btn btn-warning"><a href="#">meAppunto</a></button>
			</div><!--cierre t2-->
<!--	clear-->
			<div class="clearfix visible-sm-block"></div><!--cierre clearfix-->
<!--	T3-->
			<div class="curso col-xs-12 col-sm-5 col-md-2 col-lg-2 col-sm-offset-2 col-md-offset-0">
				<h2>Talleres de informatica</h2>
				<img src="img/imagencentral.png" alt="cursos de informatica" width="190">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident eius, cum perspiciatis maiores eos, inventore numquam.</p>
				<button type="submit" class="btn btn-warning"><a href="#">meAppunto</a></button>
			</div><!--cierre t3-->
<!--	T4-->
			<div class="curso col-xs-12 col-sm-5 col-md-2 col-lg-2">	
					<h2>Talleres de economia</h2>
					<img src="img/economia.png" alt="cursos de economia" width="175">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident eius, cum perspiciatis maiores eos, inventore numquam.</p>
					<button type="submit" class="btn btn-warning btn-center"><a href="#">meAppunto</a></button>
			</div><!--cierre t4-->

	</div> <!--FIN DEL CENTRO-->
	
<!--footer-->

<div id="footer">@@Lorem  eligendi ut molestias!vgvfdsgfdhgfdshfdsh                 __________________webmaster@smartevents.com</div>
		
</div><!--FIN DE CONTENEDOR GLOBAL-->

 <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
	

</body>
</html>
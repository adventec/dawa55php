<?php
include('conexionPDO.php');
$query="SELECT idprogramacion, nombre, cursos.tipo, fechaini, fechafin, horas, precio
			FROM cursos
			LEFT JOIN programacion ON programacion.idcurso = cursos.idcurso";


$stmt=$conexionPDO->prepare($query);
$stmt->execute();
?>
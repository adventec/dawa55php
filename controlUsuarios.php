<?php
include('modelUsuarios.php');
$miModelUsuarios=new ModelUsuarios();
$listaUsuarios=$miModelUsuarios->getUsuarios();
include('formUsuario.php');
?>
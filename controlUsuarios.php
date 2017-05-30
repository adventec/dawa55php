<?php
session_start();
include('modelUsuarios.php');
include('postVar.php');
$miModelUsuarios=new ModelUsuarios();
$listaUsuarios=$miModelUsuarios->getUsuarios();
include('formUsuario.php');

?>
<?php 
	require '../Controlador/SesionUsu.php';
	$Sesion= new SesionUsuario();
	$Sesion->CerrarSesion();
	header('Location: ../index.php');
 ?>
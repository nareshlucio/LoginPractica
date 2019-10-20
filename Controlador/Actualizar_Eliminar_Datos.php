<?php 
require 'BD.php';
include_once 'Consultas.php';
 $con = conexion();
 $Consulta = new Consultas();
 if(isset($_POST['Elim_Usu'])){
 	if($_POST['Elim_Usu'] === "defaul"){
 		echo "Por favor Seleccione a un Usuario";
 	}else{
 		$Usu = $_POST['Elim_Usu'];
 		if($Consulta->EliminarUsu($Usu))
 			echo "Se Elimino al Usuario Correctamente";
 		else
 			echo "No se Logro Eliminar al Usuario Correctamente, Recarge la Pagina";
 	}
 }else if(isset($_POST['idusu'])){
 	foreach ($_POST['idusu'] as $row) {
 		$idusu= (int)($_POST['idusu'][$row]);
 		$Apnew= mysqli_real_escape_string($con, $_POST['Ap'][$row]);
 		$Amnew= mysqli_real_escape_string($con, $_POST['Am'][$row]);
 		$Nomnew= mysqli_real_escape_string($con, $_POST['Nom'][$row]);
 		$Usunew= mysqli_real_escape_string($con, $_POST['Usu'][$row]);
 		$Cornew= mysqli_real_escape_string($con, $_POST['Cor'][$row]);
 		$Edadnew= mysqli_real_escape_string($con, $_POST['Edad'][$row]);
 		$Telnew= mysqli_real_escape_string($con, $_POST['Tel'][$row]);
 		$Tipnew= (int)($_POST['Tip'][$row]);
 		$Consulta->ActualizarUsu($idusu, $Apnew, $Amnew, $Nomnew, $Usunew, $Cornew, $Telnew, $Edadnew, $Tipnew);
 	}
 	if($Consulta->ActualizarUsu($idusu, $Apnew, $Amnew, $Nomnew, $Usunew, $Cornew, $Telnew, $Edadnew, $Tipnew)== true)
 			echo "Registros Actualzados con Exito";
 		else
 			echo "Algo Ocurrio Al Actualzar los datos";
 }
 ?>
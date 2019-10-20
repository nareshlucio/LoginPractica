<?php
require 'BD.php';
include_once 'Consultas.php';
 $con = conexion();
 $registro = new Consultas();
    //variables POST
    $Apellido_P = mysqli_real_escape_string($con,$_POST['Apellido_P']);
    $Apellido_M = mysqli_real_escape_string($con,$_POST['Apellido_M']);
    $Nombre = mysqli_real_escape_string($con,$_POST['nombre']);
    $Usuario = mysqli_real_escape_string($con,$_POST['Usuario']);
    $correo = mysqli_real_escape_string($con,$_POST['correo']);
    $pass = mysqli_real_escape_string($con,$_POST['contra']);
    $passHash = password_hash($pass, PASSWORD_BCRYPT);
    $numero = mysqli_real_escape_string($con,$_POST['num_tel']);
    $edad = mysqli_real_escape_string($con,$_POST['edad']);
    if($_POST['Tip_Usu'] === "defaul")
      $tip_usu = 2;
    else
      $tip_usu = mysqli_real_escape_string($con,$_POST['Tip_Usu']);

    if ($_POST["Genero"] === "Hombre")
      $gen = $_POST["Genero"];
    else
      $gen = $_POST["Genero"];

    //---------------------------------------------------------------------------------
    $SqlC="SELECT Correo FROM usuarios WHERE Correo='".$correo."'";
    $SqlU="SELECT Usuario FROM usuarios WHERE Usuario='".$Usuario."'";
    if($resuC=mysqli_query($con,$SqlC))
      $numC = mysqli_num_rows($resuC);

    if($resuU=mysqli_query($con,$SqlU))
      $numU = mysqli_num_rows($resuU);

    if($numC>0 && $numU>0){
      $MensCorreoUsu = "Estos Datos ya corresponden a un Usuario Existente";
    }else if($numU>0){
      $MensUsuario = "Este Alias ó Usuario ya Existe con una cuenta Ralacionada";
    }else if($numC>0){
      $MensCorreo = "Este Correo ya Existe con una cuenta Ralacionada";
    }else{
      $diruser = '../Users/'.$Usuario."/";
      if($registro->RegistroUsu($Apellido_P, $Apellido_M, $Nombre, $Usuario, $correo, $passHash, $gen, $numero, $edad, $tip_usu))
        echo "Registro de usuario con exito!!!";
      else 
        echo "Ocurrio Algo al Hacer el registro del Usuario";
    }
    
?>
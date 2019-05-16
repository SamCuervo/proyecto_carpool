<?php

$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$codigo = $_POST["codigo"];
$telefono = $_POST["telefono"];
$clave = $_POST["clave"];
$placas = $_POST["placas"];
$modelo = $_POST["modelo"];


//Consulta para insertar
$conexion = mysqli_connect("localhost", "root", "", "usuarios");
$insertar= "INSERT INTO conductor (usuario, correo, codigo, telefono, clave, placas, modelo) VALUES ('$usuario', '$correo', '$codigo', '$telefono', MD5('$clave'), '$placas','$modelo')";
//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
	echo 'Error al registrarte';
}
else{
	header("location: ../index.php");
}
mysqli_close($conexion);
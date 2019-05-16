<?php

$nombre = $_POST["usuario"];
$correo = $_POST["correo"];
$codigo = $_POST["codigo"];
$telefono = $_POST["telefono"];
$clave = $_POST["clave"];

//Consulta para insertar
$conexion = mysqli_connect("localhost", "root", "", "usuarios");
$insertar= "INSERT INTO pasajeros (usuario, correo, codigo, telefono, clave) VALUES ('$nombre', '$correo', '$codigo', '$telefono', MD5('$clave'))";
//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
	echo 'Error al registrarte';
}
else{
	header("location: ../index.php");
}
mysqli_close($conexion);
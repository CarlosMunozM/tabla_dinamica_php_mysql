<?php
	
	require_once "conexion.php";
	$conexion = conexion();

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];

	$sql = "INSERT INTO personas (nombre, apellido, email, telefono)
			VALUES ('$nombre','$apellido','$email','$telefono')";

	$resultado = mysqli_query($conexion, $sql);

	if($resultado == 1)
		echo $resultado;
	else if($resultado == 0)
		echo $conexion->error;

?>
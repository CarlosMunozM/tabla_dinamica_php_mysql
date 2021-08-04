<?php
	
	include("conexion.php");

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];

	$sql = "UPDATE personas SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono'
			WHERE id = '$id' ";

	$resultado = mysqli_query($conexion, $sql);

	if($resultado == 1)
		echo $resultado;
	else if($resultado == 0)
		echo $conexion->error;

	$conexion->close();

?>
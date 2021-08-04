<?php
	
	include("conexion.php");

	$id = $_POST['id'];

	$sql = "DELETE FROM personas WHERE id = '$id' ";

	$resultado = mysqli_query($conexion, $sql);

	if($resultado == 1)
		echo $resultado;
	else if($resultado == 0)
		echo $conexion->error;

	$conexion->close();
	
?>
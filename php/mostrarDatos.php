<?php
	
	include("conexion.php");

	$sql = "SELECT * FROM personas";
	$result = mysqli_query($conexion, $sql);

	while ($datos = mysqli_fetch_assoc($result)) 
		$arreglo['resultado'][]=$datos;
		//$arreglo['resultado'][]=array_map("utf8_encode", $datos);

	echo json_encode($arreglo);
	$conexion->close();

?>
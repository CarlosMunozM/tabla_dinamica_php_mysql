<?php
	
	function conexion(){

		$servidor = "localhost";
		$usuario = "root";
		$bd = "tabla_dinamica";
		$clave = "12345";

		return mysqli_connect($servidor, $usuario, $clave, $bd);
	}

	/*
	if(conexion())
		echo "conectado";
	else
		echo "no conectado";
	*/
?>
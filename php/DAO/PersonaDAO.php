<?php
	
	class PersonaDAO{

		function mostrarPersonas(Persona $persona)
		{
			include("../conexion.php");

			$sql = "SELECT * FROM personas";
			$result = mysqli_query($conexion, $sql);

			while ($datos = mysqli_fetch_row($result)) 
				$arreglo['resultado'][]=array_map("utf8_encode", $datos);

			$conexion->close();
			
			//return json_encode($arreglo);
			return $persona -> getNombre();
		}

		function agregarPersonas(Persona $persona){

			include("../conexion.php");

			$nombre = $persona -> getNombre();
			$apellido = $persona -> getApellido();
			$email = $persona -> getEmail();
			$telefono = $persona -> getTelefono();

			$sql = "INSERT INTO personas (nombre, apellido, email, telefono)
					VALUES ('$nombre','$apellido','$email','$telefono')";
			$resultado = mysqli_query($conexion, $sql);
			
			$conexion->close();
			return $resultado;
		}

		function actualizarPersona(Persona $persona){

			include("../conexion.php");

			$id = $persona -> getIdPersona();
			$nombre = $persona -> getNombre();
			$apellido = $persona -> getApellido();
			$email = $persona -> getEmail();
			$telefono = $persona -> getTelefono();

			$sql = "UPDATE personas SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono'
			WHERE id = '$id' ";

			$resultado = mysqli_query($conexion, $sql);
			
			$conexion->close();
			return $resultado;
		}
	}

?>
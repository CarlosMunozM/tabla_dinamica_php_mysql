<?php

	require_once("../DAO/PersonaDAO.php");
	require_once("../Modelo/Persona.php");

	$accion = $_POST['accion'];
	
	switch ($accion) {
		case 'mostrar':
			
			$personaDAO = new PersonaDAO();
			$persona = new Persona();

			$persona -> setNombre("Carlos Muñoz");

			echo $personaDAO->mostrarPersonas($persona);

			break;
		
		case 'agregar':
			
			$personaDAO = new PersonaDAO();
			$persona = new Persona();

			$persona -> setNombre($_POST['nombre']);
			$persona -> setApellido($_POST['apellido']);
			$persona -> setEmail($_POST['email']);
			$persona -> setTelefono($_POST['telefono']);

			$resultado = $personaDAO -> agregarPersonas($persona);

			if($resultado == 1)
				echo $resultado;
			else if($resultado == 0)
				echo "Error al agregar";

			break;

		case 'actualizar':

			$personaDAO = new PersonaDAO();
			$persona = new Persona();

			$persona -> setIdPersona($_POST['id']);
			$persona -> setNombre($_POST['nombre']);
			$persona -> setApellido($_POST['apellido']);
			$persona -> setEmail($_POST['email']);
			$persona -> setTelefono($_POST['telefono']);

			$resultado = $personaDAO -> actualizarPersona($persona);

			if($resultado == 1)
				echo $resultado;
			else if($resultado == 0)
				echo "Error al actualizar";

			break;

		case 'eliminar':
			
			$personaDAO = new PersonaDAO();
			$persona = new Persona();

			$persona -> setIdPersona($_POST['id']);

			$resultado = $personaDAO -> eliminarPersona($persona);

			if($resultado == 1)
				echo $resultado;
			else if($resultado == 0)
				echo "Error al eliminar";

			break;
	}
?>
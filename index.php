<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tabla Dinámica</title>

		<!-- Para el responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Iconos -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

		<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

		<script src="librerias/jquery-3.6.0.min.js"></script>
		<script src="librerias/bootstrap/js/bootstrap.js"></script>
		<script src="librerias/alertifyjs/alertify.js"></script>
		<script src="js/funciones.js"></script>

	</head>
	<body>

		<div class="container">
			<div id="tabla"></div>
		</div>

		<!-- Modal para agregar -->

		<div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Agregar Persona</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body" >
		      	
		      	<label>Nombre</label>
		      	<input type="text" name="" id="txtNombreAdd" class="form-control imput-sm">

		      	<label>Apellido</label>
		      	<input type="text" name="" id="txtApellidoAdd" class="form-control imput-sm">

		      	<label>E-mail</label>
		      	<input type="text" name="" id="txtEmailAdd" class="form-control imput-sm">

		      	<label>Teléfono</label>
		      	<input type="text" name="" id="txtTelefonoAdd" class="form-control imput-sm">

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="btnAgregar">
		        	Agregar
		        </button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Modal para actulizar -->
		
		<div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">

		      	<input type="text" hidden="" id="txtIdPersonaEdit" name="">

		        <label>Nombre</label>
		      	<input type="text" name="" id="txtNombreEdit" class="form-control imput-sm">

		      	<label>Apellido</label>
		      	<input type="text" name="" id="txtApellidoEdit" class="form-control imput-sm">

		      	<label>E-mail</label>
		      	<input type="text" name="" id="txtEmailEdit" class="form-control imput-sm">

		      	<label>Teléfono</label>
		      	<input type="text" name="" id="txtTelefonoEdit" class="form-control imput-sm">

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="btnActualizar">
		        	Modificar
		        </button>
		      </div>
		    </div>
		  </div>
		</div>

	</body>
</html>

<script type="text/javascript">		
	$(document).ready(function(){

		$('#tabla').load('componentes/tabla.php');

		$('#btnAgregar').click(function(){
			agregarDatos($('#txtNombreAdd').val() , $('#txtApellidoAdd').val(), $('#txtEmailAdd').val(), $('#txtTelefonoAdd').val());
		});

		$('#btnActualizar').click(function(){
			modificarDatos($('#txtIdPersonaEdit').val() , $('#txtNombreEdit').val() , $('#txtApellidoEdit').val(), $('#txtEmailEdit').val(), $('#txtTelefonoEdit').val());
		});

		/*
		$('#dt_datos').DataTable({
			"ajax":{
				"method":"POST",
				"url":"mostrarDatos.php"
			},
			"columns":{
				{"datos":"nombre"},
				{"datos":"apellido"},
				{"datos":"email"},
				{"datos":"telefono"}
			}
		});
		*/
	});

</script>




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
			<div id="modales"></div>
		</div>

	</body>
</html>

<script type="text/javascript">		
	$(document).ready(function(){

		$('#tabla').load('componentes/tabla.html');
		$('#modales').load('componentes/modales.html');

	});

</script>




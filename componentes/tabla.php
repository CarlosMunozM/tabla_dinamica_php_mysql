<?php
	
	require_once "../php/conexion.php";
	$conexion = conexion();
?>


<div class="row">
	<div class="col-sm-12">

		<center><h2>Tabla Dinámica</h2></center>
				
		<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregar">
			Agregar 
			<span class="bi-plus"></span>
		</button><br><br>
		
		<table class="table table-hover table-condensed table-bordered">
			<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>E-mail</td>
				<td>Teléfono</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php

				$sql = "SELECT * FROM personas";
				$result = mysqli_query($conexion, $sql);

				while ($datos = mysqli_fetch_row($result)) 
				{
			?>

			<tr>
				<td><?php echo $datos[1] ?></td>
				<td><?php echo $datos[2] ?></td>
				<td><?php echo $datos[3] ?></td>
				<td><?php echo $datos[4] ?></td>
				<td>
					<button class="btn btn-warning bi-pencil" data-bs-toggle="modal" data-bs-target="#modalActualizar"></button>
				</td>
				<td>
					<button class="btn btn-danger bi-trash"></button>
				</td>
			</tr>

			<?php } ?>

		</table>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">

		<center><h2>Tabla Dinámica</h2></center>
		
		<!--		
		<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregar">
			Agregar 
			<span class="bi-plus"></span>
		</button><br><br>
		-->

		<button class="btn btn-primary" id="btnAbrirGuardar" hidden="">
			Agregar 
			<span class="bi-plus"></span>
		</button><br><br>
		
		<table id="dt_datos" class="table table-hover table-condensed table-bordered table-striped" style="width:100%">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>E-mail</td>
					<td>Teléfono</td>
					<td></td>
				</tr>
			</thead>
			<tbody>
			<?php
				include("../php/DAO/PersonaDAO.php");
				$personaDAO = new PersonaDAO();
				$result = $personaDAO->mostrarPersonas2();

				while ($datos = mysqli_fetch_row($result)) 
				{
			?>
			
				<tr>
					<td><?php echo $datos[1] ?></td>
					<td><?php echo $datos[2] ?></td>
					<td><?php echo $datos[3] ?></td>
					<td><?php echo $datos[4] ?></td>
					<td>
						<button class="btn btn-warning bi-pencil" data-bs-toggle="modal" data-bs-target="#modalActualizar" onclick="pasarDatosModificar('<?php echo $datos[0] ?>','<?php echo $datos[1] ?>','<?php echo $datos[2] ?>','<?php echo $datos[3] ?>','<?php echo $datos[4] ?>')"></button>

						<button class="btn btn-danger bi-trash" onclick="dialogoEliminar('<?php echo $datos[0] ?>')"></button>
					</td>
				</tr>
			

			<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	
	$(document).ready(function() {
		$('#dt_datos').DataTable({
	        responsive: true,
	        destroy: true,
	        scrollX: true,
	        "language": {
                "url": 	"librerias/data_table/Spanish.json"
            },
            dom: 'Bfrtip',
	        buttons: [
	        	{
		        	text: '<i class="bi bi-person-plus"></i>',
		        	className: 'btn btn-primary',
		        	titleAttr: 'Agregar Persona',
		        	action: function(){
		        		$('#tabla').slideUp("slow");
						$('#divRegistrar').slideDown("slow");
		        	}
		        },
		        {
		        	extend: 'excelHtml5',
		        	text: '<i class="bi bi-file-excel"></i>',
		        	className: 'btn btn-success',
		        	titleAttr: 'Excel'
		        },
		        {
		        	extend: 'csvHtml5',
		        	text: '<i class="bi bi-file-text"></i>',
		        	className: 'btn btn-secondary',
		        	titleAttr: 'Csv'
		        },
		        {
		        	extend: 'pdfHtml5',
		        	text: '<i class="bi bi bi-file-pdf"></i>',
		        	className: 'btn btn-danger',
		        	titleAttr: 'Pdf'
		        },
		        {
		        	extend: 'copyHtml5',
		        	text: '<i class="bi bi-clipboard-check" ></i>',
		        	className: 'btn btn-outline-dark',
		        	titleAttr: 'Copiar'
		        }
	            
	        ]
	    });
		
	});

	$('#btnAbrirGuardar').click(function() {

	  	$('#tabla').slideUp("slow");
		$('#divRegistrar').slideDown("slow");
	});
</script>



function agregarDatos(nombre, apellido, email, telefono){

	cadena = "nombre="+ nombre +
			 "&apellido="+ apellido +
			 "&email="+ email +
			 "&telefono="+ telefono;
	
	$.ajax({
		type:"POST", //los parámetros NO van en la URL
		url:"php/agregarDatos.php",
		data: cadena,
		success:function(result){
			if(result==1)
			{
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Agregado con Éxito");
			}
			else{
				alertify.error(result);

			}
		}
	});
};

function modificarDatos(id, nombre, apellido, email, telefono){

	cadena = "id="+ id +
			 "&nombre="+ nombre +
			 "&apellido="+ apellido +
			 "&email="+ email +
			 "&telefono="+ telefono;
	
	$.ajax({
		type:"POST",
		url:"php/modificarDatos.php",
		data: cadena,
		success:function(result){
			if(result==1)
			{
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Modificado con Éxito");
			}
			else{
				alertify.error(result);

			}
		}
	});
};

function eliminarDatos(id){

	cadena = "id="+ id;
	
	$.ajax({
		type:"POST",
		url:"php/eliminarDatos.php",
		data: cadena,
		success:function(result){
			if(result==1)
			{
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Eliminado con Éxito");
			}
			else{
				alertify.error(result);

			}
		}
	});
};

function pasarDatosModificar(id,nombre, apellido, email, telefono){
	$('#txtIdPersonaEdit').val(id);
	$('#txtNombreEdit').val(nombre);
	$('#txtApellidoEdit').val(apellido);
	$('#txtEmailEdit').val(email);
	$('#txtTelefonoEdit').val(telefono);
};

function dialogoEliminar(id){
	alertify.confirm('Eliminar Datos', '¿Está seguro de eliminar este registro?', 
	function(){ 
		eliminarDatos(id);
	}, 
	function(){ /* alertify.error('Cancel')*/});
};
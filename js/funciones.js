

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
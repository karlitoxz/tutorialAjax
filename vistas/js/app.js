$(document).ready(function() {
//Funcion verificar email
	$("#email").change(function() {
  	var email = $(this).val();
	var datos = new FormData();
		datos.append('validarEmail',email);
		//ajax---------
			$.ajax({
				url: 'ajax/formulariosAjax.php',
				type: 'POST',
				contentType: false,
				cache: false;
				data: datos,
				processData: false
			})
			.done(function(respuesta) {
				console.log("respuesta", respuesta);
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		//ajax---------
	});
//Funcion verificar email
});
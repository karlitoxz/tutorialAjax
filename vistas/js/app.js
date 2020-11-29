$(document).ready(function() {
//Funcion verificar email
	$("#email").change(function() {
	$(".alert").remove();
  	var email = $(this).val();
	var datos = new FormData();
		datos.append('validarEmail',email);
		//ajax---------
			$.ajax({
				url: 'ajax/formulariosAjax.php',
				type: 'POST',
				contentType: false,
				cache: false,
				data: datos,
				processData: false,
				dataType: "json",
			})
			.done(function(respuesta) {
				if (respuesta) {
					$("#email").val("");
					$("#email").parent().after(` 
							<div class="alert alert-warning" role="alert">
							  Error: el correo ya existe en la base de datos ingrese uno diferente.
							</div>
						`);
					$("#email").focus();
				}
			})
			.fail(function() {
				console.log("error");
			});
			
		//ajax---------
	});
//Funcion verificar email
});
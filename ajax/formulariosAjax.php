<?php 
	
require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelo.php";

class AjaxFormularios{

/*=============================================
=            Clase AJAX           =
=============================================*/
	public $validarEmail;


	public function ajaxValidarEmail(){
		$item = 'email';
		$valor = $this->validarEmail;
		$respuesta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
		echo json_encode($respuesta); 
	}


/*===========  End of Clase AJAX  ============*/
}

/*=============================================
=            Objeto AJAX           =
=============================================*/
if (isset($_POST['validarEmail'])) {
		$valEmail = new AjaxFormularios();
		$valEmail -> validarEmail = $_POST['validarEmail'];
		$valEmail -> ajaxValidarEmail();
	} else {
		echo "A ocurrido un error";
	}
		



?>


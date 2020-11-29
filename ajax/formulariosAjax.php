<?php 
	
require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelo.php";

class AjaxFormularios{

/*=============================================
=            Clase AJAX           =
=============================================*/
	public $validarEmail;
	public $validarToken;


	public function ajaxValidarEmail(){
		$item = 'email';
		$valor = $this->validarEmail;
		$respuesta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
		echo json_encode($respuesta); 
	}

		public function ajaxValidarToken(){
		$item = 'token';
		$valor = $this->validarToken;
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
	}
	
if (isset($_POST['validarToken'])) {
		$valToken = new AjaxFormularios();
		$valToken -> validarToken = $_POST['validarToken'];
		$valToken -> ajaxValidarToken();
	}	



?>


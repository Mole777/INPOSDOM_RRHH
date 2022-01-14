<?php

require_once "../controladores/posicion.controlador.php";
require_once "../modelos/posicion.modelo.php";


class ajaxPosicion{

	public $idPosicion;

	public function ajaxEditarPosicion()
	{
		$campo = "Id";
		$valor = $this->idPosicion;

		$respuesta = ctrPosicion::ctrMostrarPosicion($campo, $valor);
	
		echo json_encode($respuesta);
	}
}

/*=============================================
EDITAR DEPARTAMENTO
=============================================*/	

if (isset($_POST["idPosicion"])) {
	$departamento = new ajaxPosicion();
	$departamento->idPosicion=$_POST["idPosicion"];
	$departamento->ajaxEditarPosicion();
}

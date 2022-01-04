<?php

require_once "../controladores/departamento.controlador.php";
require_once "../modelos/departamento.modelo.php";


class ajaxDepartamento{

	public $idDepartamento;

	public function ajaxEditarDepartamento()
	{
		$campo = "Id";
		$valor = $this->idDepartamento;

		$respuesta = ctrDepartamento::ctrMostrarDepartamento($campo, $valor);

		echo json_encode($respuesta);
	}
}

/*=============================================
EDITAR CLIENTE
=============================================*/	

if (isset($_POST["idDepartamento"])) {
	$departamento = new ajaxDepartamento();
	$departamento->idDepartamento=$_POST["idDepartamento"];
	$departamento->ajaxEditarDepartamento();
}

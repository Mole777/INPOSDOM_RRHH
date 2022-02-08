<?php


	require_once "../controladores/usuario.controlador.php";
	require_once "../modelos/usuario.modelo.php";

	class ajaxUsuario{

		public $idUsuario;

		public function ajaxEditarUsuario()
		{

			$campo = "Id";
			$valor = $this->idUsuario;

			$respuesta = ctrUsuario::ctrMostrarUsuarios($campo, $valor);

			echo json_encode($respuesta);
		}


	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/	

	if (isset($_POST["idUsuario"])) {
		
		$editar = new ajaxUsuario();
		$editar->idUsuario = $_POST["idUsuario"];
		$editar->ajaxEditarUsuario();

	}
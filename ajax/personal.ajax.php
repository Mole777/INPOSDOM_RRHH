<?php

	require_once "../controladores/personal.controlador.php";
	require_once "../modelos/personal.modelo.php";

	class ajaxPersonal{

		public $idPersonal;

		public function ajaxEditarPersonal()
		{

			$campo = "Id";
			$valor = $this->idPersonal;

			$respuesta = ctrPersonal::ctrMostrarPersonal($campo, $valor);

			echo json_encode($respuesta);
			
		}

	}


	if (isset($_POST["idPersonal"])) {
		
		$editar = new ajaxPersonal();
		$editar->idPersonal=$_POST["idPersonal"];
		$editar->ajaxEditarPersonal();
	
	}

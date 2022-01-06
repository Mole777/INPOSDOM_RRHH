<?php

	require_once "../controladores/designacion.controlador.php";
	require_once "../modelos/designacion.modelo.php";

	class ajaxDesignacion{

		public $idDesignacion;

		public function ajaxEditarDesignacion()
		{

			$campo = "Id";
			$valor = $this->idDesignacion;

			$respuesta = ctrDesignacion::ctrMostrarDesignacion($campo, $valor);

			echo json_encode($respuesta);
			
		}

		public function ajaxMostrarDesignaciones()
		{

			$campo = null;
			$valor = null;

			$respuesta = ctrDesignacion::ctrMostrarDesignacion($campo, $valor);

			echo json_encode($respuesta);
			
		}

	}


	if (isset($_POST["idDesignacion"])) {
		
		$editar = new ajaxDesignacion();
		$editar->idDesignacion=$_POST["idDesignacion"];
		$editar->ajaxEditarDesignacion();
	
	}

	if (isset($_POST["idDesignaciones"])) {
		
		$editar = new ajaxDesignacion();
		$editar->ajaxMostrarDesignaciones();
	
	}
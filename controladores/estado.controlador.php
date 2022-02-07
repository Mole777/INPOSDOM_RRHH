<?php

class ctrEstado{
	
	public function ctrCrearEstado()
	{

	}

	static public function ctrMostrarEstados($campo, $valor)
	{
		$tabla = "Estado_rrhh";

		$respuesta = mdlEstado::mdlMostrarEstados($tabla, $campo, $valor);

		return $respuesta;
	}

	public function ctrActualizarEstado()
	{

	}

	public function ctrEliminarEstado()
	{

	}

}	
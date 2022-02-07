<?php

class ctrRol{
	
	public function ctrCrearRol()
	{

	}

	static public function ctrMostrarRoles($campo, $valor)
	{
		$tabla = "Roles_rrhh";

		$respuesta = mdlRol::mdlMostrarRoles($tabla, $campo, $valor);

		return $respuesta;
	}

	public function ctrActualizarRol()
	{

	}

	public function ctrEliminarRol()
	{

	}


}
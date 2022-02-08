<?php


class ctrDocumento{
	
	static public function ctrMostrarDocumentos($campo, $valor)
	{

		$tabla = "tipo_documento";
		$respuesta = mdlDocumento::mdlMostrarDocumentos($tabla, $campo, $valor);

		return $respuesta;
	}
}
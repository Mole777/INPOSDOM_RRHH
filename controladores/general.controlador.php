<?php


class ctrGeneral{

	public function ctrCrearDespacho()
	{
		$servicio;

		$respuesta = mdlGeneral::mdlCrearDespacho();

		return $respuesta;

	} 

}
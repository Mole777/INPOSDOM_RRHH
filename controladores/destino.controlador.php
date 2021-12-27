<?php


class ctrDestino{

	public function ctrMostrarDestinos()
	{

		$respuesta = mdlDestino::mdlMostrarDestinos();

		return $respuesta;
	}
}
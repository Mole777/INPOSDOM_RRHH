<?php

require_once "conexion.php";

class mdlDestino{

	static public function mdlMostrarDestinos()
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM estafeta ORDER BY destino ASC");

		try {

			$stmt->execute();

			return $stmt->fetchAll();

		} catch (Exception $e) {
			
			return $e;
		}
		
		$stmt ->close();
		$stmt = null;

	}

}
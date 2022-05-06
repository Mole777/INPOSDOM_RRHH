<?php

require_once "conexion.php";

class mdlDocumento{
	
	static public function mdlMostrarDocumentos($tabla, $campo, $valor)
	{

		if($campo != null)
		{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $campo = :$campo");
			$stmt->bindParam(":".$campo, $valor, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT Id, Tipo FROM $tabla");
			$stmt->execute();
			return $stmt->fetchAll();
		}

		
		$stmt = null;
	}

}
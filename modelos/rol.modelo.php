<?php

require_once "conexion.php";

class mdlRol{
	
	static public function mdlMostrarRoles($tabla, $campo, $valor)
	{
		if ($campo != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $campo = :$campo");
			
			$stmt->bindParam(":".$campo, $valor, PDO::PARAM_INT);
			
			if ($stmt->execute()) {

				return $stmt->fecth();

			}else{

				return false;
			}

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			
			if ($stmt->execute()) {

				return $stmt->fetchAll();

			}else{
				
				return false;
			}
		}

	}
}
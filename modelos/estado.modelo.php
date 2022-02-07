<?php

require_once "conexion.php";

class mdlEstado{
	
	static public function mdlCrearEstado()
	{

	}

	static public function mdlMostrarEstados($tabla, $campo, $valor)
	{
		if ($campo != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $campo = :$campo");
			
			$stmt->bindParam(":".$campo, $valor, PDO::PARAM_INT);
			
			if ($stmt->execute()) {
				return $stmt->fetch();
			}


		}else{
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			
			if ($stmt->execute()) {
				return $stmt->fetchAll();
			}

		}

		$stmt->close();
		$stmt = null;

	}

	static public function mdlActualizarEstado()
	{

	}

	static public function mdlEliminarEstado()
	{

	}

}
<?php

	require_once "conexion.php";

	class mdlDepartamento{

		static public function mdlCrearDepartamento($tabla, $datos)
		{
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombre) VALUES(:nombre)");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				return "ok";
			}else{

				return false;
			}

			$stmt->close();

			$stmt=null;

		}


		static public function mdlMostrarDepartamento($tabla, $campo, $valor)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt->execute();

			return $stmt->fetchAll();

			$stmt->close();
			$stmt = null;
		}
	}
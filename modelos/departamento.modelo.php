<?php

	require_once "conexion.php";

	class mdlDepartamento{

		static public function mdlCrearDepartamento($tabla, $datos)
		{
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombre) VALUES(:nombre)");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

			if ($stmt->execute()) {

				return true;

			}else{

				return false;
			}

		

		}


		static public function mdlMostrarDepartamento($tabla, $campo, $valor)
		{
			if ($campo != null) {

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $campo = :$campo");
				
				$stmt->bindParam(":".$campo, $valor, PDO::PARAM_INT);
				
				$stmt->execute();

				return $stmt->fetch();
				
			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt->execute();

				return $stmt->fetchAll();
			}
			
						
			
		}

		static public function mdlEditarDepartamento($tabla, $datos)
		{
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :nombre WHERE Id = :id");
			
			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			
			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

			if ($stmt->execute()) {

				return true;

			}else{

				return false;
			}

			
			
		}

		static public function mdlEliminarDepartamento($tabla, $datos)
		{
			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE Id = :id");

			$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

			if ($stmt->execute()) {
				
				return true;

			}else{

				return false;
			}

			
			
		}


	}
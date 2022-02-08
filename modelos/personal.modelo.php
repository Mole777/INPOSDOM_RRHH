<?php

require_once "conexion.php";

class mdlPersonal{
	
	static public function mdlCrearPersonal($tabla, $datos)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombre, Apellido, Sexo, Documento, Telefono, Direccion, Correo, Salario, PosicionID, Fecha_Ingreso, DepartamentoID, UsuarioID, DocumentoID) VALUES(:nombre, :apellido, :sexo, :documento, :telefono, :direccion, :correo, :salario, :posicion, :fecha, :departamento, :usuario, :documentoID)");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt -> bindParam(":sexo", $datos["sexo"], PDO::PARAM_STR);
		$stmt -> bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
		$stmt -> bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
		$stmt -> bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt -> bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt -> bindParam(":salario", $datos["salario"], PDO::PARAM_INT);
		$stmt -> bindParam(":posicion", $datos["posicion"], PDO::PARAM_INT);
		$stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt -> bindParam(":departamento", $datos["departamento"], PDO::PARAM_INT);
		$stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_INT);
		$stmt -> bindParam(":documentoID", $datos["documentoID"], PDO::PARAM_INT);

		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "Error";
		}
		

		$stmt->close();
		$stmt = null;
	}

	static public function mdlMostrarPersonal($tabla, $campo, $valor)
	{
		if ($campo != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT des.Id AS Id, des.Nombre, des.Apellido, des.Sexo AS Sexo, des.Documento, des.Telefono, des.Direccion, des.Correo, des.Salario, pos.Nombre AS Posicion, des.Fecha_Ingreso, dep.Nombre AS Departamento, dep.Id AS DepartamentoID, pos.Id AS PosicionID FROM $tabla AS des INNER JOIN departamentos_inposdom AS dep ON des.DepartamentoID = dep.Id INNER JOIN posiciones AS pos ON des.PosicionID = pos.Id WHERE des.Id = :$campo");

			$stmt->bindParam(":".$campo, $valor, PDO::PARAM_STR);

			if ($stmt->execute()) {

				return $stmt->fetch(); 

			}else{

				return false;
			}


		}else{

			$stmt = Conexion::conectar()->prepare("SELECT des.Id AS Id, des.Nombre, des.Apellido, des.Sexo AS Sexo, des.Documento, des.Telefono, des.Direccion, des.Correo, des.Salario, pos.Nombre AS Posicion, des.Fecha_Ingreso, dep.Nombre AS Departamento, dep.Id AS DepartamentoID FROM $tabla AS des INNER JOIN departamentos_inposdom AS dep ON des.DepartamentoID = dep.Id INNER JOIN posiciones AS pos ON des.PosicionID = pos.Id ORDER BY des.Id ASC");

			if ($stmt ->execute()) {

				return $stmt->fetchAll();

			}else{

				return false;
			}
				
		
		}

		$stmt->close();

		$stmt = null;
			
	}

	static public function mdlEditarPersonal($tabla, $datos)
		{
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :nombre, Apellido = :apellido, Sexo = :sexo, Documento = :documento, Telefono = :telefono, Direccion = :direccion, Correo = :correo, Salario = :salario, PosicionID = :posicion, Fecha_Ingreso = :fecha, DepartamentoID = :departamento, UsuarioID = :usuario WHERE Id = :id");
			
			$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
			$stmt -> bindParam(":sexo", $datos["sexo"], PDO::PARAM_STR);
			$stmt -> bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
			$stmt -> bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
			$stmt -> bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
			$stmt -> bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
			$stmt -> bindParam(":salario", $datos["salario"], PDO::PARAM_INT);
			$stmt -> bindParam(":posicion", $datos["posicion"], PDO::PARAM_INT);
			$stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
			$stmt -> bindParam(":departamento", $datos["departamento"], PDO::PARAM_INT);
			$stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {

				return "ok";

			}else{

				return "error";
			}

			$stmt->close();
			$stmt=null;
		}

	static public function mdlEliminarPersonal($tabla, $datos)
	{
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE Id = :id");

		$stmt->bindParam(":id", $datos, PDO::PARAM_INT);

		if ($stmt->execute()) {

			return true;
			
		}else{

			return false;
		}

		$stmt->close();
		$stmt=null;
	}


}
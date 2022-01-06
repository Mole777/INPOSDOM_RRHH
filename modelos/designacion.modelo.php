<?php

require_once "conexion.php";

class mdlDesignacion{
	
	static public function mdlCrearDesignacion($tabla, $datos)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombre, Apellido, Cedula, Telefono, Direccion, Correo, Salario, Posicion, Fecha_Ingreso, DepartamentoID) VALUES(:nombre, :apellido, :cedula, :telefono, :direccion, :correo, :salario, :posicion, :fecha, :departamento)");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt -> bindParam(":cedula", $datos["cedula"], PDO::PARAM_INT);
		$stmt -> bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
		$stmt -> bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt -> bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt -> bindParam(":salario", $datos["salario"], PDO::PARAM_INT);
		$stmt -> bindParam(":posicion", $datos["posicion"], PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt -> bindParam(":departamento", $datos["departamento"], PDO::PARAM_INT);

		try {

			$stmt->execute();

			return true;

		} catch (Exception $e) {

			return $e;
		}

		$stmt->close();
		$stmt = null;
	}

	static public function mdlMostrarDesignacion($tabla, $campo, $valor)
	{
		if ($campo != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT des.Id AS Id, des.Nombre, des.Apellido, des.Cedula, des.Telefono, des.Direccion, des.Correo, des.Salario, des.Posicion, des.Fecha_Ingreso, dep.Nombre AS Departamento, dep.Id AS DepartamentoID FROM $tabla AS des INNER JOIN departamentos_inposdom AS dep ON des.DepartamentoID = dep.Id WHERE des.Id = :$campo");

			$stmt->bindParam(":".$campo, $valor, PDO::PARAM_STR);

			if ($stmt->execute()) {

				return $stmt->fetch(); 

			}else{

				return false;
			}


		}else{

			$stmt = Conexion::conectar()->prepare("SELECT des.Id, des.Nombre, des.Apellido, des.Cedula, des.Telefono, des.Direccion, des.Correo, des.Salario, des.Posicion, des.Fecha_Ingreso, dep.Nombre AS Departamento FROM $tabla AS des INNER JOIN departamentos_inposdom AS dep ON des.DepartamentoID = dep.Id ORDER BY des.Id asc");

			if ($stmt ->execute()) {

				return $stmt->fetchAll();

			}else{

				return false;
			}
				
		
		}

		$stmt->close();

		$stmt = null;
			
	}

	static public function mdlEditarDesignacion($tabla, $datos)
		{
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :nombre, Apellido = :apellido, Cedula = :cedula, Telefono = :telefono, Direccion = :direccion, Correo = :correo, Salario = :salario, Posicion = :posicion, Fecha_Ingreso = :fechaIngreso, DepartamentoID = :departamento WHERE Id = :id");
			
			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
			$stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
			$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
			$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
			$stmt->bindParam(":salario", $datos["salario"], PDO::PARAM_STR);
			$stmt->bindParam(":posicion", $datos["posicion"], PDO::PARAM_STR);
			$stmt->bindParam(":fechaIngreso", $datos["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_INT);


			if ($stmt->execute()) {

				return true;

			}else{

				return false;
			}

			$stmt->close();
			$stmt=null;
		}

	static public function mdlEliminarDesignacion($tabla, $datos)
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
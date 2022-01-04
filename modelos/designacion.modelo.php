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

			return "ok";

		} catch (Exception $e) {

			return $e;
		}

		$stmt->close();
		$stmt = null;
	}

	public function mdlMostrarDesignacion($campo, $valor)
	{

	}

	public function mdlActualizarDesignacion()
	{

	}

	public function mdlEliminarDesignacion($id)
	{

	}


}
<?php

require_once "conexion.php";

class mdlUsuario{
	
	static public function mdlCrearUsuario($tabla, $datos)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombre, Apellido, Usuario, Clave, RolID, EstadoID) VALUES(:nombre, :apellido, :usuario, :clave, :rol, :estado)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
		$stmt->bindParam(":rol", $datos["rol"], PDO::PARAM_INT);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);

		if ($stmt->execute()) {
			
			return "ok";

		}else{
			
			return "error";
		}
		$stmt = null;
	}

	static public function mdlMostrarUsuario($tabla, $campo, $valor)
	{

		if ($campo != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT usu.Id AS Id, usu.Nombre, usu.Apellido, usu.Usuario, usu.Clave, usu.RolID, usu.EstadoID, est.Tipo AS Estado, rol.Nombre AS Rol, dep.Nombre AS Departamento FROM usuarios_rrhh AS usu INNER JOIN estado_rrhh AS est ON usu.EstadoID = est.Id INNER JOIN roles_rrhh AS rol ON usu.RolID = rol.Id INNER JOIN departamentos_inposdom AS dep ON rol.DepartamentoID = dep.Id WHERE $campo = :$campo");

			$stmt->bindParam(":".$campo, $valor, PDO::PARAM_STR);

			if ($stmt->execute()) {
				return $stmt->fetch();
			}else{

				return false;
			}
			

			

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT usu.Id AS Id, usu.Nombre, usu.Apellido, usu.Usuario, usu.Clave, usu.RolID, usu.EstadoID, est.Tipo AS Estado, rol.Nombre AS Rol, dep.Nombre AS Departamento FROM usuarios_rrhh AS usu INNER JOIN estado_rrhh AS est ON usu.EstadoID = est.Id INNER JOIN roles_rrhh AS rol ON usu.RolID = rol.Id INNER JOIN departamentos_inposdom AS dep ON rol.DepartamentoID = dep.Id");

			$stmt->execute();

			return $stmt->fetchAll();
		}
		$stmt = null;
		
	}

	static public function mdlActualizarUsuario($tabla, $datos)
	{
		
	}

	static public function mdlEliminarUsuario($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE Id = :id");

			$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

			if ($stmt->execute()) {
				
				return true;

			}else{

				return false;
			}

			$stmt=null;

	}

}
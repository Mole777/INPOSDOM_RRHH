<?php

require_once "conexion.php";

class mdlUsuario{
	
	static public function mdlCrearUsuario()
	{

	}

	static public function mdlMostrarUsuario($tabla, $campo, $valor)
	{

		if ($campo != "") {
			
			$stmt = Conexion::conectar()->prepare("SELECT usu.Id AS Id, usu.Nombre, usu.Apellido, usu.Usuario, usu.Clave, est.Tipo AS Estado, rol.Nombre AS Rol, dep.Nombre AS Departamento FROM usuarios_rrhh AS usu 
			INNER JOIN estado_rrhh AS est ON usu.EstadoID = est.Id 
			INNER JOIN roles_rrhh AS rol ON usu.RolID = rol.Id
			INNER JOIN departamentos_inposdom AS dep ON rol.DepartamentoID = dep.Id
			WHERE $campo = :$campo");

			$stmt -> bindParam(":".$campo, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT usu.Id AS Id, usu.Nombre, usu.Apellido, usu.Usuario, usu.Clave, est.Tipo AS Estado, rol.Nombre AS Rol, dep.Nombre AS Departamento FROM usuarios_rrhh AS usu 
			INNER JOIN estado_rrhh AS est ON usu.EstadoID = est.Id 
			INNER JOIN roles_rrhh AS rol ON usu.RolID = rol.Id
			INNER JOIN departamentos_inposdom AS dep ON rol.DepartamentoID = dep.Id");

			$stmt -> execute();

			return $stmt -> fetchAll();
		}

		$stmt ->close();
		$stmt = null;
		
	}

	static public function mdlActualizarUsuario()
	{
		
	}

	static public function mdlEliminarUsuario()
	{

	}

}
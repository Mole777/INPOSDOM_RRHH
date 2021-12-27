<?php

require_once "conexion.php";

class mdlUsuario{
	
	static public function mdlCrearUsuario()
	{

	}

	static public function mdlMostrarUsuario($tabla, $campo, $valor)
	{

		$stmt = Conexion::conectar()->prepare("SELECT * FROM `usuarios` as `u` INNER JOIN `roles` as `r` ON u.RolID = r.Id WHERE $campo = :$campo");

		$stmt -> bindParam(":".$campo, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

	}

	static public function mdlActualizarUsuario()
	{

	}

	static public function mdlEliminarUsuario()
	{

	}

}
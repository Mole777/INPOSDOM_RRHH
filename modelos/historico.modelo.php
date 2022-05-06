<?php

	require_once "conexion.php";

	class mdlHistorico{

		static public function mdlMostrarHistorico()
		{
			$historico = Conexion::conectar()-prepare("SELECT * FROM historico_rrhh");
			
			$historico->execute();
			
			return $historico->fetchAll();

			
		}

		static public function mdlCrearHistorico($datos)
		{
			$historico = Conexion::conectar()-prepare("INSERT INTO historico_rrhh usuario_ID = :usuario, descripcion = :descripcion");

				$historico->bindParam(":usuario", $datos["his_usuario"], PDO::PARAM_INT);
				$historico->bindParam(":descripcion", $datos["his_descripcion"], PDO::PARAM_STR);

				if ($historico->execute()) {
					return true;
				}else{
					return false;
				}


				
				 

		}

	}
<?php

class Conexion{

	static public function conectar()
	{
		
		try {
			
			$link = new PDO("mysql:host=localhost;dbname=db_rrhh", "root", "");

			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $link;

		} catch (PDOException $e) {
			
			return $e;
		}
	}

}


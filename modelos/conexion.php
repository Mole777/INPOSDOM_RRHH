<?php

class Conexion{

	static public function conectar()
	{
		
		$link = new PDO("mysql:host=localhost;port=3306;dbname=db_rrhh", "Melquisedec", "M3l9u1s3d3c");

		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $link;

	}

}


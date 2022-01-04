<?php

	class Validaciones{

		static public function soloLetras($input)
		{
			$patron = "/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/";
			$resultado = false;

			if(preg_match($patron, $input)){
				$resultado = true;
			}

			return $resultado;
		}
		

		static public function soloNumeros($input){

			$patron = "/^[0-9]+$/";
			$resultado = false;

			if (preg_match($patron, $input)) {
				$resultado = true;
			}

			return $resultado;
		}

		static public function formatearFechas($input)
		{
			$resultado = false;
									
			if ($input <= date("Ymd")) {
				$resultado = true;
			}

			return $resultado;
		}

		

	}
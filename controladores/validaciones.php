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

			$patron = "/^[0-9.]+$/";
			$resultado = false;

			if (preg_match($patron, $input)) {
				$resultado = true;
			}

			return $resultado;
		}

		static public function formatearFechas($input)
		{
			$resultado = false;
			$nuevaFecha = str_replace("/", "", $input);
			$fecha = str_replace("-", "", $nuevaFecha);
									
			if ($fecha <= date("Ymd")) {
				$resultado = true;
			}

			return $resultado;
		}

		static public function validarTipoDocumento($input, $value)
		{
			switch ($input) {
				
				case 1:

					if (Validaciones::soloNumeros($value) == true && strlen($value) == 11 ) {
						
						return true;
					}

				break;


				case 2:

					return true;

				break;


				case 3:

					if (Validaciones::soloNumeros($value) == true && strlen($value) == 9 ) {
							
						return true;
					}

				break;
			
			}

		}

	}
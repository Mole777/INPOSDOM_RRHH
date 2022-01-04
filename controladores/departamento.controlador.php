<?php

	class ctrDepartamento{

		public function ctrCrearDepartamento()
		{
			if (isset($_POST["guardar"])) {
				
				if (isset($_POST["regNombre"])) {

					if (Validaciones::soloLetras($_POST["regNombre"])) {
						
						$tabla = "departamentos_inposdom";
						$datos = array('nombre' => $_POST["regNombre"]);
						$respuesta = mdlDepartamento::mdlCrearDepartamento($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo'<script>

									Swal.fire({
									  icon: "success",
									  title: "Se ha creado correctamente el departamento",
									  showConfirmButton: false,
									  timer: 2100
									}).then(function(result){

										if(result.value){
										
											window.location = "departamentos";

										}

									</script>';

						}
					}
	
				}
			}
		}

		static public function ctrMostrarDepartamento($campo, $valor)
		{
			$tabla = "departamentos_inposdom";

			$respuesta = mdlDepartamento::mdlMostrarDepartamento($tabla, $campo, $valor);

			return $respuesta;
		}


	}
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
									  showConfirmButton: true, 
									}).then(function(result){

										if(result.value){
										
											window.location = "departamentos";


										}
									});

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

		public function ctrEditarDepartamento()
		{
			if (isset($_POST["actualizar"])) {
				
				if (isset($_POST["regNombre"])) {
					
					$tabla = "departamentos_inposdom";
					$datos = array('id' => $_POST["idDepartamento"],
						'nombre' => $_POST["regNombre"]);

					$respuesta = mdlDepartamento::mdlEditarDepartamento($tabla, $datos);

					if($respuesta){

					echo'<script>

					Swal.fire({
						  icon: "success",
						  title: "El departamento ha sido actualizado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "departamentos";

									}
								})

					</script>';

				}
				}
			}
		}

		public function ctrEliminarDepartamento()
		{
			if (isset($_GET["idDepartamento"])) {
				
				$tabla = "departamentos_inposdom";
				$datos = $_GET["idDepartamento"];

				$respuesta = mdlDepartamento::mdlEliminarDepartamento($tabla, $datos);

				if($respuesta){

					echo'<script>

					Swal.fire({
						  type: "success",
						  title: "El departamento ha sido borrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then(function(result){
									if (result.value) {

									window.location = "departamentos";

									}
								})

					</script>';

				}	
			}
		}


	}
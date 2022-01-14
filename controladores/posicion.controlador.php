<?php

	class ctrPosicion{


		public function ctrCrearPosicion()
		{
			if (isset($_POST["guardar"])) {
				
				if (isset($_POST["regNombre"])) {

					if (Validaciones::soloLetras($_POST["regNombre"])) {

						$tabla = "posiciones";
						$datos = array('nombre' => $_POST["regNombre"]);
						
						$respuesta = mdlPosicion::mdlCrearPosicion($tabla, $datos);

						if ($respuesta) {
							
							echo'<script>

									Swal.fire({
									  icon: "success",
									  title: "Se ha creado correctamente la posición",
									  showConfirmButton: true,
									  timer: 2100
									}).then(function(result){

										if(result.value){
										
											window.location = "posiciones";

										}
									});
								

									</script>';

						}
					}
	
				}
			}
		}

		static public function ctrMostrarPosicion($campo, $valor)
		{
			$tabla = "posiciones";
			$respuesta = mdlPosicion::mdlMostrarPosicion($tabla, $campo, $valor);

			return $respuesta;
		}

		public function ctrEditarPosicion()
		{
			if (isset($_POST["actualizar"])) {
				
				if (isset($_POST["regNombre"])) {
					
					$datos = array('id' => $_POST["idPosicion"],
						'nombre' => $_POST["regNombre"]);

					$tabla = "posiciones";

					$respuesta = mdlPosicion::mdlEditarPosicion($tabla, $datos);

					if($respuesta){

					echo'<script>

					Swal.fire({
						  type: "success",
						  title: "La posición ha sido actualizada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "posiciones";

									}
								})

					</script>';

					}
				}
			}
		}

		public function ctrEliminarPosicion()
		{
			if (isset($_GET["idPosicion"])) {

				$datos = $_GET["idPosicion"];

				$tabla = "posiciones";

				$respuesta = mdlPosicion::mdlEliminarPosicion($tabla, $datos);

				if($respuesta){

					echo'<script>

					Swal.fire({
						  type: "success",
						  title: "La posición ha sido borrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then(function(result){
									if (result.value) {

									window.location = "posiciones";

									}
								})

					</script>';

				}	
			}
		}


	}
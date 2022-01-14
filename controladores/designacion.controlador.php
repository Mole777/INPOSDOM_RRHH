<?php

require_once "validaciones.php";

class ctrDesignacion{
	
	public function ctrCrearDesignacion()
	{
		
		if (isset($_POST["guardar"])) 
		{
			
			if(isset($_POST["regNombre"]) && isset($_POST["regApellido"]) && isset($_POST["regCedula"]) && isset($_POST["regSalario"]) && isset($_POST["regPosicion"]) && isset($_POST["regFechaIngreso"]) && isset($_POST["regDepartamento"]))
			{
					
					if (Validaciones::soloLetras($_POST["regNombre"]) && 
						Validaciones::soloLetras($_POST["regApellido"]) &&
						Validaciones::soloNumeros($_POST["regCedula"]) &&
						Validaciones::soloNumeros($_POST["regTelefono"]) &&
					    Validaciones::formatearFechas($_POST["regFechaIngreso"])) {
						$salario = str_replace(".00", "", $_POST["regSalario"]);
						
						$tabla = "designaciones";
					
						$datos = array('nombre' => $_POST["regNombre"],
								  'apellido' => $_POST["regApellido"],
								  'cedula' => $_POST["regCedula"],
								  'telefono' => $_POST["regTelefono"],
								  'direccion' => $_POST["regDireccion"],
								  'correo' => $_POST["regCorreo"],
								  'salario' => $salario,
								  'posicion' => $_POST["regPosicion"],
								  'fecha' => $_POST["regFechaIngreso"],
								  'departamento' => $_POST["regDepartamento"],
								  'usuario' => $_SESSION["UsuarioID"]

								);

						$respuesta = mdlDesignacion::mdlCrearDesignacion($tabla, $datos);
																																									
						if ($respuesta == "ok") {
							
							echo'<script>

								Swal.fire({
									  icon: "success",
									  title: "La designación ha sido actualizada correctamente",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then(function(result){
												if (result.value) {

												window.location = "designaciones";

												}
											})

								</script>';

						}else{

							var_dump($respuesta);

						}
					}
				
			}

		}
			
	}

	static public function ctrMostrarDesignacion($campo, $valor)
	{
		$tabla = "designaciones";

		$respuesta = mdlDesignacion::mdlMostrarDesignacion($tabla, $campo, $valor);
		
		return $respuesta;
	}

	static public function ctrEditarDesignacion()
	{
		if (isset($_POST["actualizarDesignacion"])) 
		{
			
			if(isset($_POST["regNombre"]) && isset($_POST["regApellido"]) && isset($_POST["regCedula"]) && isset($_POST["regSalario"]) && isset($_POST["regPosicion"]) && isset($_POST["regFechaIngreso"]) && isset($_POST["regDepartamento"]))
			{
					
				if (Validaciones::soloLetras($_POST["regNombre"]) && 
					Validaciones::soloLetras($_POST["regApellido"]) &&
					Validaciones::soloLetras($_POST["regPosicion"]) && 
					Validaciones::soloNumeros($_POST["regCedula"]) &&
					Validaciones::soloNumeros($_POST["regTelefono"]) &&
					Validaciones::soloNumeros($_POST["regSalario"]) &&
				    Validaciones::formatearFechas(str_replace("-", "", $_POST["regFechaIngreso"]))) {
				
					$tabla = "designaciones";
				
					$datos = array('id' => $_POST["idDesignacion"],
								   'nombre' => $_POST["regNombre"],
							  	   'apellido' => $_POST["regApellido"],
							  	   'cedula' => $_POST["regCedula"],
							  	   'telefono' => $_POST["regTelefono"],
							  	   'direccion' => $_POST["regDireccion"],
							  	   'correo' => $_POST["regCorreo"],
							  	   'salario' => $_POST["regSalario"],
							  	   'posicion' => $_POST["regPosicion"],
							  	   'fecha' => $_POST["regFechaIngreso"],
							  	   'departamento' => $_POST["regDepartamento"],
							  	   'usuario' => $_SESSION["UsuarioID"]
							  	  
							);

					$respuesta = mdlDesignacion::mdlEditarDesignacion($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo'<script>

								Swal.fire({
								  icon: "success",
								  title: "Se ha actualizado correctamente la designación",
								  showConfirmButton: false,
								  timer: 2100
								}).then(function(result){

									if(result.value){
									
										window.location = "designaciones";
										
									}
								});

							</script>';

					}else{

						var_dump($respuesta);
					}

				}
				
			}

		}
		
	}

	public function ctrEliminarDesignacion()
	{
		if (isset($_GET["idDesignacion"])) {
			
			$tabla = "designaciones";
			$datos = $_GET["idDesignacion"];

			$respuesta = mdlDesignacion::mdlEliminarDesignacion($tabla, $datos);

			if($respuesta){

					echo'<script>

					Swal.fire({
						  type: "success",
						  title: "La designación ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: true
						  }).then(function(result){

								if (result.value) {

								window.location = "inicio";
								
								}
							});

					
					</script>';


				}	
		}
		
	}

}
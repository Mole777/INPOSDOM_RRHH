<?php

require_once "validaciones.php";

class ctrPersonal{
	
	public function ctrCrearPersonal()
	{
		
		if (isset($_POST["guardar"])) 
		{
			
			if(isset($_POST["regNombre"]) && isset($_POST["regApellido"]) && isset($_POST["regCedula"]) && isset($_POST["regSalario"]) && isset($_POST["regPosicion"]) && isset($_POST["regFechaIngreso"]) && isset($_POST["regDepartamento"]) && isset($_POST["regSexo"]))
			{
					
					if (Validaciones::soloLetras($_POST["regNombre"]) && 
						Validaciones::soloLetras($_POST["regApellido"]) &&
						Validaciones::soloNumeros($_POST["regCedula"]) &&
						Validaciones::soloNumeros($_POST["regTelefono"]) &&
						Validaciones::soloLetras($_POST["regSexo"]) &&
					    Validaciones::formatearFechas($_POST["regFechaIngreso"])) {
						$salario = str_replace(".00", "", $_POST["regSalario"]);
						
						$tabla = "personal";
					
						$datos = array('nombre' => $_POST["regNombre"],
								  'apellido' => $_POST["regApellido"],
								  'sexo' => $_POST["regSexo"],
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

						$respuesta = mdlPersonal::mdlCrearPersonal($tabla, $datos);
																																									
						if ($respuesta == "ok") {
							
							echo'<script>

								Swal.fire({
									  icon: "success",
									  title: "El perfil ha sido creado correctamente",
									  showConfirmButton: true
									  }).then(function(result){
												if (result.value) {

												window.location = "accion-personal";

												}
											})

								</script>';

						}
					}
				
			}

		}
			
	}

	static public function ctrMostrarPersonal($campo, $valor)
	{
		$tabla = "personal";

		$respuesta = mdlPersonal::mdlMostrarPersonal($tabla, $campo, $valor);
		
		return $respuesta;
	}

	public function ctrEditarPersonal()
	{
		if (isset($_POST["actualizarPersonal"])) 
		{
			
			if(isset($_POST["regNombre"]) && isset($_POST["regApellido"]) && isset($_POST["regCedula"]) && isset($_POST["regSalario"]) && isset($_POST["regPosicion"]) && isset($_POST["regFechaIngreso"]) && isset($_POST["regDepartamento"]))
			{
					
				if (Validaciones::soloLetras($_POST["regNombre"]) && 
						Validaciones::soloLetras($_POST["regApellido"]) &&
						Validaciones::soloNumeros($_POST["regCedula"]) &&
						Validaciones::soloNumeros($_POST["regTelefono"]) &&
					    Validaciones::formatearFechas($_POST["regFechaIngreso"])) {
						$salario = str_replace(".00", "", $_POST["regSalario"]);
						
						$tabla = "personal";
					
						$datos = array('id' => $_POST["idPersonal"],
								       'nombre' => $_POST["regNombre"],
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

					$respuesta = mdlPersonal::mdlEditarPersonal($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo'<script>

								Swal.fire({
								  icon: "success",
								  title: "Se actualizó correctamente el perfil",
								  showConfirmButton: true,	
								}).then(function(result){

									if(result.value){
									
										window.location = "accion-personal";
										
									}
								});

							</script>';

					}

				}
				
			}

		}
		
	}

	public function ctrEliminarPersonal()
	{
		if (isset($_GET["idPersonal"])) {
			
			$tabla = "personal";
			$datos = $_GET["idPersonal"];

			$respuesta = mdlPersonal::mdlEliminarPersonal($tabla, $datos);

			if($respuesta){

					echo'<script>

					Swal.fire({
						  type: "success",
						  title: "El personal ha sido borrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: true
						  }).then(function(result){

								if (result.value) {

								window.location = "accion-personal";
								
								}
							});

					
					</script>';


				}	
		}
		
	}

}
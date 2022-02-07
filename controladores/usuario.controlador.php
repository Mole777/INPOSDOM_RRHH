<?php

class ctrUsuario{

	public function ctrIngresoUsuario()
	{
		if (isset($_POST["btnIngresar"]) && $_POST["ingUsuario"] != "" && $_POST["ingClave"] != "") {


			if (!empty($_POST["ingUsuario"]) && !empty($_POST["ingClave"])) {
				
				$tabla = "Usuarios_rrhh";
				$campo = "Usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = mdlUsuario::mdlMostrarUsuario($tabla, $campo, $valor);			
		

				if ($respuesta["Usuario"] == $_POST["ingUsuario"] && $respuesta["Clave"] == $_POST["ingClave"] && $respuesta["Estado"] == "Activo") {
					
					$_SESSION["IniciarSesion"] = "ok";
					$_SESSION["Nombre"] = $respuesta["Nombre"];
					$_SESSION["Apellido"] = $respuesta["Apellido"];
					$_SESSION["Rol"] = $respuesta["Rol"];
					$_SESSION["Departamento"] = $respuesta["Departamento"];
					$_SESSION["UsuarioID"] = $respuesta["Id"];


					echo '<script>

							window.location = "inicio";

						</script>';

					header("Refresh:0");

				}
								
			}
			
		}
		
	}
		
	public function ctrCrearUsuario()
	{
		if (isset($_POST["guardar"])) {
			
			if (!empty("regNombre") && !empty("regApellido") && !empty("regUsuario") && !empty("regClave") && !empty("regRol")) {
				
				$tabla = "Usuarios_rrhh";

				$datos = array('nombre' => $_POST["regNombre"],
							'apellido' => $_POST["regApellido"],
							'usuario' => $_POST["regUsuario"],
							'clave' => $_POST["regClave"],
							'rol' => $_POST['regRol'],
							'estado' => 1);

				$respuesta=mdlUsuario::mdlCrearUsuario($tabla, $datos);

				if ($respuesta == "ok") {
							
							echo'<script>

								Swal.fire({
									  icon: "success",
									  title: "El usuario ha sido creada correctamente",
									  showConfirmButton: true
									  }).then(function(result){
												if (result.value) {

												window.location = "administrador-usuarios";

												}
											})

								</script>';

						}
			}
		}
		

	}

	static public function ctrMostrarUsuarios($campo, $valor)
	{
		$tabla = "Usuarios_rrhh";

		$respuesta = mdlUsuario::mdlMostrarUsuario($tabla, $campo, $valor);

		return $respuesta;
	}

	public function ctrEditarUsuario()
	{

	}

	public function ctrEliminarUsuario()
	{

	}

}
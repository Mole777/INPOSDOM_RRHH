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

	}

	public function ctrMostrarUsuarios()
	{
		
	}

	public function ctrEditarUsuario()
	{

	}

	public function ctrEliminarUsuario()
	{

	}

}
<?php

class ctrUsuario{

	public function ctrIngresoUsuario()
	{
		if (isset($_POST["btnIngresar"]) && $_POST["ingUsuario"] != "" && $_POST["ingClave"] != "") {


			if (!empty($_POST["ingUsuario"]) && !empty($_POST["ingClave"])) {
				
				$tabla = "Usuarios";
				$campo = "usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = mdlUsuario::mdlMostrarUsuario($tabla, $campo, $valor);			

				if (!$respuesta || $respuesta["Clave"] != $_POST["ingClave"]) {

					echo '<div class="container"><div class="alert alert-danger mt-2 text-center"> Error de credenciales</div></div>';
					
				}else{

					$_SESSION["IniciarSesion"] = "ok";
					$_SESSION["EstadoUsuario"] = $respuesta["EstadoID"];
					$_SESSION["Nombre"] = $respuesta["Nombre"];
					$_SESSION["Apellido"] = $respuesta["Apellido"];
					$_SESSION["Tipo"] = $respuesta["Tipo"];

					echo '<script> window.location = "Inicio" </script>';
						
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

	public function ctrActualizarUsuario()
	{

	}

	public function ctrEliminarUsuario()
	{

	}

}
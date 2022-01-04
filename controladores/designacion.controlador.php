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
						Validaciones::soloLetras($_POST["regPosicion"]) && 
						Validaciones::soloNumeros($_POST["regCedula"]) &&
						Validaciones::soloNumeros($_POST["regTelefono"]) &&
						Validaciones::soloNumeros($_POST["regSalario"]) &&
					    Validaciones::formatearFechas(str_replace("-", "", $_POST["regFechaIngreso"]))) {
					
						$tabla = "designaciones";
					
						$datos = array('nombre' => $_POST["regNombre"],
								  'apellido' => $_POST["regApellido"],
								  'cedula' => $_POST["regCedula"],
								  'telefono' => $_POST["regTelefono"],
								  'direccion' => $_POST["regDireccion"],
								  'correo' => $_POST["regCorreo"],
								  'salario' => $_POST["regSalario"],
								  'posicion' => $_POST["regPosicion"],
								  'fecha' => $_POST["regFechaIngreso"],
								  'departamento' => $_POST["regDepartamento"]
								);

						$respuesta = mdlDesignacion::mdlCrearDesignacion($tabla, $datos);

					}else{
						echo 'Error de Formato en algunos campos';
					}
				
			}

		}
			
	}

	public function ctrMostrarDesignacion($campo, $valor)
	{

	}

	public function ctrActualizarDesignacion()
	{

	}

	public function ctrEliminarDesignacion($id)
	{

	}

}
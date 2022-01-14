<?php

//Controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuario.controlador.php";
require_once "controladores/designacion.controlador.php";
require_once "controladores/departamento.controlador.php";
require_once "controladores/posicion.controlador.php";

//Modelos
require_once "modelos/conexion.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/designacion.modelo.php";
require_once "modelos/departamento.modelo.php";
require_once "modelos/historico.modelo.php";
require_once "modelos/posicion.modelo.php";

$Plantilla = new ctrPlantilla();
$Plantilla -> ctrEjecutarPlantilla();


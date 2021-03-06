<?php

//Controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuario.controlador.php";
require_once "controladores/personal.controlador.php";
require_once "controladores/departamento.controlador.php";
require_once "controladores/posicion.controlador.php";
require_once "controladores/estado.controlador.php";
require_once "controladores/rol.controlador.php";
require_once "controladores/documento.controlador.php";

//Modelos
require_once "modelos/conexion.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/personal.modelo.php";
require_once "modelos/departamento.modelo.php";
require_once "modelos/historico.modelo.php";
require_once "modelos/posicion.modelo.php";
require_once "modelos/estado.modelo.php";
require_once "modelos/rol.modelo.php";
require_once "modelos/documento.modelo.php";

$Plantilla = new ctrPlantilla();
$Plantilla -> ctrEjecutarPlantilla();


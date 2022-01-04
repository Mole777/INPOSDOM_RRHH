<?php

//Controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuario.controlador.php";
require_once "controladores/designacion.controlador.php";
require_once "controladores/departamento.controlador.php";


//Modelos
require_once "modelos/conexion.php";
require_once "modelos/usuario.modelo.php";
require_once "modelos/designacion.modelo.php";
require_once "modelos/departamento.modelo.php";

$Plantilla = new ctrPlantilla();
$Plantilla -> ctrEjecutarPlantilla();


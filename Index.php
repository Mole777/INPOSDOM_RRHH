<?php

//Controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuario.controlador.php";


//Modelos
require_once "modelos/conexion.php";
require_once "modelos/usuario.modelo.php";

$Plantilla = new ctrPlantilla();
$Plantilla -> ctrEjecutarPlantilla();


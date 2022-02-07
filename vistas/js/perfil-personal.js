/*=============================================
MOSTRAR PERFIL DE PERSONAL
=============================================*/

$(".tablaPersonal").on("click", ".btnMostrarPersonal", function(){

	var idPerfil = $(this).attr("idPersonal");

	window.location = "index.php?ruta=perfil-personal&id="+idPerfil;

});
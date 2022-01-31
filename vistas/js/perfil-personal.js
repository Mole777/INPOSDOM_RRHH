/*=============================================
MOSTRAR PERFIL DE PERSONAL
=============================================*/

$(".tablaDesignacion").on("click", ".btnMostrarDesignacion", function(){

	var idPerfil = $(this).attr("idDesignacion");

	window.location = "index.php?ruta=perfil-personal&id="+idPerfil;

});
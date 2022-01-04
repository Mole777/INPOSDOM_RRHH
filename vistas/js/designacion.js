/*=============================================
ELIMINAR DESIGNACION
=============================================*/

$(".tablaDesignacion").on("click", ".btnEliminarDesignacion", function(){

	var idDesignacion = $(this).attr("idEliminarDesignacion");

	Swal.fire({
		  title: '¿Está seguro de borrar la designación?',
		  text: '¡Si no lo está puede cancelar la acción!',
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Sí, borrar designación!'
		}).then(function(result){
		  if (result.value) {

		  	window.location = "index.php?ruta=designaciones&idDesignacion="+idDesignacion;
		    
		  }
	})
})